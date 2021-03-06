<?php

/**
 * Template Name: bbPress - User Login
 *
 * @package bbPress
 * @subpackage Theme
 */

// No logged in users
bbp_logged_in_redirect();
get_header();
st_before_content($columns='');

do_action( 'bbp_template_notices' );
// Begin Template
	while ( have_posts() ) : the_post(); ?>

		<div id="bbp-login" class="bbp-login">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">

				<?php the_content(); ?>

				<?php // this just clutters things - bbp_breadcrumb(); ?>

				<?php bbp_get_template_part( 'bbpress/form', 'user-login' ); ?>

			</div>
		</div><!-- #bbp-login -->

	<?php endwhile;
		st_after_content();
		get_sidebar('bbpress');
		get_footer();
	?>