<?php
/*
Template Name: Template Privatisation
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-mobile-jays" role="main">

			<video id="video-loulou" class="video-loulou" poster="http://www.cuyabroweb.com/loulou/wp-content/uploads/2014/05/31.jpg" loop="loop" autoplay>
				<source src="http://www.cuyabroweb.com/loulou/wp-content/themes/loulou/video/jayz.webm" type="video/webm">
				<source src="http://www.cuyabroweb.com/loulou/wp-content/themes/loulou/video/jayz.mp4" type="video/mp4">
			</video>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('jays-block'); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
						
						<div class="button-jays"></div>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>