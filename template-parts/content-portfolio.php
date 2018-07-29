<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Derek Houck Web Design
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div id="portfolio" class="entry-content">
		<?php the_content(); ?>
		<?php $pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order' ) ); ?> 
<ul>
	<?php foreach ( $pages as $page ) : ?>
		<li>
			<h2><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></h2>
			<?php 
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large' );
				echo '<a href="' . $large_image_url[0] . '" data-title="' . $page->post_title . '" data-lightbox="portfolio" >';
				echo get_the_post_thumbnail( $page->ID, 'portfolio-thumb' ); 
				echo '</a>'; ?>
		</li>
	<?php endforeach; ?>
</ul>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'derek-houck-web-design' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
