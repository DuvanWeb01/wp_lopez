<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
            /*Sub heading*/
            if (get_field('field_5e019842fdcc6')) {
                get_template_part('template-parts/subheader');
            }
            /*End Sub heading*/
        ?>
		<div class="container-page-master">
			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'master-template-woo' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Editar <span class="screen-reader-text">%s</span>', 'master-template' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>
		</div>
</article><!-- #post-<?php the_ID(); ?> -->
