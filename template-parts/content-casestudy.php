<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Derek Houck Web Design
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php 
			if ( has_post_thumbnail() ) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
				echo '<a href="' . $large_image_url[0] . '" data-title="' . the_title_attribute( 'echo=0' ) . '" data-lightbox="casestudy">';
				the_post_thumbnail( 'medium' );
				echo '</a>';
			}
			the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'derek-houck-web-design' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'derek-houck-web-design' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
