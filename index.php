<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tracy\'s_Backpack
 */

get_header(); ?>

<div class="container main-stuff">
  <div class="row no-gutters primary">
    <main id="content" class="col-sm-7 col-sm-offset-1" role="main">

      <?php
      if ( have_posts() ) :

      if ( is_home() && ! is_front_page() ) : ?>
	<header>
	  <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
	</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		        else :

			get_template_part( 'template-parts/content', 'none' );

		        endif; ?>
    </main><!-- end post content column-->
    <!-- SIDEBAR -->
    <aside class="col-sm-3" id="sidebar-col">
      <?php get_sidebar(); ?>

    </aside>
  </div><!-- end row -->
</div><!-- end outer container -->


<?php get_footer(); ?>
