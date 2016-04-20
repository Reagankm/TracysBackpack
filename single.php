<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tracy\'s_Backpack
 */

get_header(); ?>

<div class="container" id="main-stuff">
  <div class="row no-gutters" id="primary">
    <main id="content" class="col-sm-7 col-sm-offset-1" role="main">
      <?php
      while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_format() );

      the_post_navigation();

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
      comments_template();
      endif;

    endwhile; // End of the loop.
    ?>
    </main><!-- content -->

    <!-- SIDEBAR -->
    <aside class="col-sm-3" id="sidebar-col">
      <?php get_sidebar(); ?>

    </aside>

  </div><!-- row -->
</div><!-- container -->


<?php 
get_footer(); ?>
