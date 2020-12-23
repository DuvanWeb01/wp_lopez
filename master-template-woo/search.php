<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Master_Template_Woo
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<?php 
				get_template_part('template-parts/subheader','search');	
			?>
			<section class="mb-5">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-9 search-col">
							<div class="row">
								<?php
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/**
										 * Run the loop for the search to output the results.
										 * If you want to overload this in a child theme then include a file
										 * called content-search.php and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'search' );

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>
							</div>
						</div>
						<div class="col-12 col-md-3 sidebar-col ">
							<?php get_sidebar(); ?>	
						</div>
					</div>
				</div>
			</section>
			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
