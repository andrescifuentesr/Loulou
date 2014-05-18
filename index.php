<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package loulou
 */

get_header(); ?>

	<div id="fullpage">
		<div class="section">
			<div id="primary" class="content-area template-general">
				<main id="main" class="site-main" role="main">

					<?php /* Start the Loop */ ?>
						<?php
						$args = array(
						'page_id'			=> 16,
						'order'			=> 'DESC',			// List in ascending order
						'showposts'		=> 1, 				// Show all attachments
						);
						$contactPage = new WP_Query();
						$contactPage->query($args);
					?>
						
					<?php while ($contactPage->have_posts()) : $contactPage->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('contact'); ?>>
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->

						</article><!-- #post-## -->

					<?php endwhile; ?>
				</main><!-- #main -->
			</div><!-- #primary -->						
		</div><!-- .section -->

		<?php wp_reset_postdata(); ?>

		<div class="section">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php /* Start the Loop */ ?>
						<?php
						$args = array(
						'page_id'		=> 14,
						'order'			=> 'DESC',			// List in ascending order
						'showposts'		=> 1, 				// Show all attachments
						);
						$jaysPage = new WP_Query();
						$jaysPage->query($args);
					?>
						
					<?php while ($jaysPage->have_posts()) : $jaysPage->the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('jays-block'); ?>>

							<div class="entry-content">
								<?php the_content(); ?>
								
								<div class="button-jays"></div>

							</div><!-- .entry-content -->

						</article><!-- #post-## -->

					<?php endwhile; ?>

				</main><!-- #main -->
			</div><!-- #primary -->						
		</div><!-- .section -->

	</div><!-- #fullpage -->	

<?php get_footer(); ?>
