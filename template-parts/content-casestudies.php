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

	<div id="casestudies" class="entry-content">
		<?php the_content(); ?>
		<?php $pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order' ) ); ?> 
<ul>
	<?php foreach ( $pages as $page ) : ?>
		<li>
			<?php 
				echo '<a href="' . get_page_link( $page->ID ) . '" >';
				echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); 
				echo '</a>'; ?>
			<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></a></h2>
			<?php $excerpt = $page->post_excerpt; ?> 
			<div class="entry-summary">
				<?php echo $excerpt; ?>
			</div><!-- .entry-summary -->
		</li>
	<?php endforeach; ?>
</ul>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'derek-houck-web-design' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
