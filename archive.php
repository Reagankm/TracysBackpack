<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tracy\'s_Backpack
 */

get_header(); ?>


    <?php
    if ( have_posts() ) : ?>
      <div class="archive-heading">
	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<h2 class="taxonomy-description">', '</h2>' );
	?>
      </div>


      <div class="container main-stuff">
        <div class="row no-gutters primary">
          <main id="content" class="col-sm-7 col-sm-offset-1" role="main">
      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();

      /*
       * Include the Post-Format-specific template for the content.
       * If you want to override this in a child theme, then include a file
       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
       */
      get_template_part( 'template-parts/content-search', get_post_format() );

      endwhile;

      the_posts_navigation();

      else :

      get_template_part( 'template-parts/content-search', 'none' );

      endif; ?>
          </main>
          <aside class="col-sm-3" id="sidebar-col">

            <?php get_sidebar(); ?>
          </aside>
        </div>
      </div>

<?php get_footer(); ?>
