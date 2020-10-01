<?php get_header(); ?>
<div class="voitures">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="voiture">
<?php the_terms( $post->ID, 'couleur', 'Couleur : ' ); ?><br>
<?php the_terms( $post->ID, 'marque', 'Marque : ' ); ?><br>
<?php the_post_thumbnail( 'thumbnail' ); ?>
<?php 
 
	$my_cilyndre = get_post_meta( get_the_ID(), 'cylindre_', true);
 
	if( ! empty( $my_cilyndre ) ) {
		echo '<h3>Cylindré: ' . $my_cilyndre . '<h3>';
	}
 
?>
<h1 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h1>
<div class="content">
<?php the_content(); ?>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php get_footer(); ?>