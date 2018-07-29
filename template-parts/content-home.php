<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Derek Houck Web Design
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php $pages = get_pages( array( 'child_of' => 4, 'sort_column' => 'menu_order' ) ); ?> 
		<div class="cycle-slideshow"
			data-cycle-swipe="true"
		    data-cycle-swipe-fx="scrollHorz"
			data-cycle-fx="scrollHorz" 
			data-cycle-prev="#prev"
		    data-cycle-next="#next"
			>
			<?php foreach ( $pages as $page ) : ?>
				<?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
			<?php endforeach; ?>
		</div>
		<div class="cycle-nav">
		    <a href=# id="prev">&#xe803;</a> 
		    <a href=# id="next">&#xe804;</a>
		</div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'derek-houck-web-design' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
