<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Master_Template
 */

global $geniorama;

?>

</div>
<!-- #content -->

	<?php if ($geniorama['active-buttons'] == '1'): ?>
		<?php get_template_part('template-parts/buttons/float-buttons'); ?>
	<?php endif; ?>
	

	<footer id="colophon" class="site-footer">
		<!-- Top Footer -->
		<?php if($geniorama['on-off-top-footer']): ?>
			<?php get_template_part('template-parts/footer/top-footer'); ?>
		<?php endif;?>

		<!-- Bottom Footer -->
		<?php if($geniorama['on-off-bottom-footer']): ?>
			<?php get_template_part('template-parts/footer/bottom-footer'); ?>
		<?php endif;?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
