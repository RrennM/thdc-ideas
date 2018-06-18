<?php
/**
 * Template Name: Portfolio page
 *
 * @package Tyson_Hood_2.0
 */
// Portfolio items
$section_one_title				= get_field( 'section_one_title' );
$section_one_body					= get_field( 'section_one_body' );

// Cool Projects
$section_two_title				= get_field( 'section_two_title' );
$section_two_body					= get_field( 'section_two_body' );

// Contributions
$section_three_title			= get_field( 'section_three_title' );
$Section_three_body				= get_field( 'section_three_body' );

// Divi Items
$section_four_title				= get_field( 'section_four_title' );
$section_four_body				= get_field( 'section_four_body' );

get_header(); ?>


		<?php get_template_part( 'template-parts/content', 'header-alt' ); ?>


		<!-- FEATURE IMAGE
		==================0============================================================= -->
		<?php if( has_post_thumbnail() ) { // Check for feature image?>

			<section class="feature-image" style="background: url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</section>

		<?php } else { // Fallback image ?>

			<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
				<div class="page-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</section>

		<?php } ?>

	</header> <!-- .site-header -->

	<!-- PORTFOLIO Section
	=============================================================================== -->
	<section class="portfolio" id="primary">
		<div class="container">
			<h2><?php echo $section_one_title ?></h2>
			<p><?php echo $section_one_body ?></p>
			<div class="gallery">
				<div class="row">

					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio_item', 'orderby' => 'post_id', 'order' => 'DESC' ) );

					while( $loop->have_posts() ) : $loop->the_post();

						$live_site_link	=	get_field( 'live_site_link' );
						$about_project	=	get_field( 'about_project' );

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						// get_template_part( 'template-parts/content', 'portfolio-single' );
					?>

					<div class="col-sm-4">
						<h3><?php the_title() ?></h3>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div> <!-- end col -->

					<?php endwhile; wp_reset_query(); ?>

				</div> <!-- .row -->
			</div> <!-- .gallery -->


			<!-- === Cool project section
			============================================================= -->
			<h2><?php echo $section_two_title ?></h2>
			<p><?php echo $section_two_body ?></p>
			<div class="gallery">
				<div class="row">

					<?php $loop = new WP_Query( array( 'post_type' => 'cool_projects', 'orderby' => 'post_id', 'order' => 'DESC' ) );

					while( $loop->have_posts() ) : $loop->the_post();
						$cool_site_link			=	get_field( 'cool_site_link' );
						$about_cool_project	=	get_field( 'about_cool_project' );

					?>

						<div class="col-sm-4">
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div> <!-- end col -->


					<?php endwhile; wp_reset_query() ?>

				</div> <!-- .row -->
			</div> <!-- .gallery -->


			<!-- === Contributions section
			============================================================= -->
			<h2><?php echo $section_three_title ?></h2>
			<p><?php echo $section_three_body ?></p>
			<div class="gallery">
				<div class="row">

					<?php $loop = new WP_Query( array( 'post_type' => 'contributions', 'orderby' => 'post_id', 'order' => 'DESC' ) );

					while( $loop->have_posts() ) : $loop->the_post();
						$contribution_link	=	get_field( 'contribution_link' );
						$about_contribution	=	get_field( 'about_contribution' );

					?>

						<div class="col-sm-4">
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div> <!-- end col -->


					<?php endwhile; wp_reset_query() ?>

				</div> <!-- .row -->
			</div> <!-- .gallery -->


			<!-- === Divi Projects section
			============================================================= -->
			<h2><?php echo $section_four_title ?></h2>
			<p><?php echo $section_four_body ?></p>
			<div class="gallery">
				<div class="row">

					<?php $loop = new WP_Query( array( 'post_type' => 'divi_projects', 'orderby' => 'post_id', 'order' => 'DESC' ) );

					while( $loop->have_posts() ) : $loop->the_post();
						$divi_project_link	=	get_field( 'divi_project_link' );
						$about_divi_project	=	get_field( 'about_divi_project' );

					?>

						<div class="col-sm-4">
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div> <!-- end col -->


					<?php endwhile; wp_reset_query() ?>

				</div> <!-- .row -->
			</div> <!-- .gallery -->


		</div> <!-- .container -->
	</section> <!-- #portfolio -->



<?php get_footer() ?>
