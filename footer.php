<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Derek Houck Web Design
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			&copy;<?php echo date("Y"); ?> Derek Houck
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.swipe.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js"></script>
</body>
</html>
