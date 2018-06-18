<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tyson_Hood_2.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


		<!-- IF BLOG POST
		=============================================================================== -->
		<?php if ( 'post' === get_post_type() ) : ?>
		<time class="entry-time"><?php echo the_date(); ?></time>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


			<div class="post-details">
				<i class="fa fa-folder"></i> Posted in <?php the_category( ', ' ); ?>
				<i class="fa fa-tags"></i> Tagged: <?php the_tags('', ', ', ''); ?>
			</div> <!-- .post-details -->

		<?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i> ', '</div>' ); ?>
	</header><!-- .entry-header -->



	<?php if(has_post_thumbnail() ) { // Check for post thumbnail ?>
		<div class="post-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div> <!-- post-image -->
	<?php } ?>



	<div class="post-body">
		<p><?php the_content(); ?></p>
		<h4>Written by <?php the_author(); ?></h4>
	</div> <!-- post-excerpt -->


	<!-- IF PORTFOLIO ITEM
	=============================================================================== -->
	<?php elseif ( 'portfolio_item' === get_post_type() ) : ?>

<?php
	$live_site_link	=	get_field( 'live_site_link' );
	$about_project	=	get_field( 'about_project' );
	$highlight_1 		= get_field( 'highlight_1' );
	$highlight_2 		= get_field( 'highlight_2' );
	$highlight_3 		= get_field( 'highlight_3' );
	$highlight_4 		= get_field( 'highlight_4' );
	$highlight_5 		= get_field( 'highlight_5' );
	$highlight_6 		= get_field( 'highlight_6' );
	$highlight_7 		= get_field( 'highlight_7' );
	$highlight_8 		= get_field( 'highlight_8' );
	$highlight_9 		= get_field( 'highlight_9' );
	$highlight_10 	= get_field( 'highlight_10' );
	$highlight_11 	= get_field( 'highlight_11' );
	$highlight_12 	= get_field( 'highlight_12' );
?>

			<div class="post-title">
				<h2><?php the_title(); ?></h2>

				<?php if ( 'portfolio_item' === get_post_type() ) : ?>

					<div class="post-details">
						<i class="fa fa-plane"></i> <a href="<?php echo $live_site_link ?>">Visit the live site</a>
					</div> <!-- .post-details -->


				<?php
				endif; ?>
			</div> <!-- .post-title -->
		</header><!-- .entry-header -->



			<?php if(has_post_thumbnail() ) { // Check for post thumbnail ?>
				<div class="post-image">
					<?php the_post_thumbnail(); ?>
				</div> <!-- post-image -->
			<?php } ?>



	<div class="post-body">
		<h3>Highlights</h3>
		<div class="highlight-wrap">
			<div class="col-sm-4">
				<ul>
					<li><?php echo $highlight_1 ?></li>
					<li><?php echo $highlight_2 ?></li>
					<li><?php echo $highlight_3 ?></li>
					<li><?php echo $highlight_4 ?></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li><?php echo $highlight_5 ?></li>
					<li><?php echo $highlight_6 ?></li>
					<li><?php echo $highlight_7 ?></li>
					<li><?php echo $highlight_8 ?></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul>
					<li><?php echo $highlight_9 ?></li>
					<li><?php echo $highlight_10 ?></li>
					<li><?php echo $highlight_11 ?></li>
					<li><?php echo $highlight_12 ?></li>
				</ul>
			</div>
		</div>
		<h3>About Project</h3>
		<p><?php echo $about_project ?></p>
	</div> <!-- post-excerpt -->


	<!-- IF COOL PROJECT ITEM
	=============================================================================== -->
	<?php elseif ( 'cool_projects' === get_post_type() ) : ?>

		<?php
			$cool_site_link	=	get_field( 'cool_site_link' );
			$about_cool_project	=	get_field( 'about_cool_project' );
		?>

			<div class="post-title">
				<h2><?php the_title(); ?></h2>

					<div class="post-details">
						<i class="fa fa-plane"></i> <a href="<?php echo $cool_site_link ?>">Visit the live site</a>
					</div> <!-- .post-details -->

			</div> <!-- .post-title -->
		</header><!-- .entry-header -->



		<?php if(has_post_thumbnail() ) { // Check for post thumbnail ?>
			<div class="post-image">
				<?php the_post_thumbnail(); ?>
			</div> <!-- post-image -->
		<?php } ?>



		<div class="post-body">
			<h3>About Project</h3>
			<p><?php echo $about_cool_project ?></p>
		</div> <!-- post-excerpt -->


		<!-- IF Contribution Item
		=============================================================================== -->
	<?php elseif ( 'contributions' === get_post_type() ) : ?>

			<?php
				$contribution_link	=	get_field( 'contribution_link' );
				$about_contribution	=	get_field( 'about_contribution' );
			?>

				<div class="post-title">
					<h2><?php the_title(); ?></h2>

						<div class="post-details">
							<i class="fa fa-plane"></i> <a href="<?php echo $contribution_link ?>">Visit the live site</a>
						</div> <!-- .post-details -->

				</div> <!-- .post-title -->
			</header><!-- .entry-header -->



			<?php if(has_post_thumbnail() ) { // Check for post thumbnail ?>
				<div class="post-image">
					<?php the_post_thumbnail(); ?>
				</div> <!-- post-image -->
			<?php } ?>



			<div class="post-body">
				<h3>About Contribution</h3>
				<p><?php echo $about_contribution ?></p>
			</div> <!-- post-excerpt -->


			<!-- IF DIVI PROJECT Item
			=============================================================================== -->
		<?php elseif ( 'divi_projects' === get_post_type() ) : ?>

				<?php
					$divi_project_link	=	get_field( 'divi_project_link' );
					$about_divi_project	=	get_field( 'about_divi_project' );
				?>

					<div class="post-title">
						<h2><?php the_title(); ?></h2>

							<div class="post-details">
								<i class="fa fa-plane"></i> <a href="<?php echo $divi_project_link ?>">Visit the live site</a>
							</div> <!-- .post-details -->

					</div> <!-- .post-title -->
				</header><!-- .entry-header -->



				<?php if(has_post_thumbnail() ) { // Check for post thumbnail ?>
					<div class="post-image">
						<?php the_post_thumbnail(); ?>
					</div> <!-- post-image -->
				<?php } ?>



				<div class="post-body">
					<h3>About This Divi Project</h3>
					<p><?php echo $about_divi_project ?></p>
				</div> <!-- post-excerpt -->


		<?php
		endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
