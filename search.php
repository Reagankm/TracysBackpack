<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Tracy\'s_Backpack
 */

get_header(); ?>
<div class="archive-heading">
  <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'tracys_backpack' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>

<div class="container" id="main-stuff">
  <div class="row no-gutters" id="primary">
    <main id="content" class="col-sm-7 col-sm-offset-1" role="main">


      <?php
      if ( have_posts() ) : ?>

        
        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();

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

        endif; ?>

    </main>
    <aside class="col-sm-3" id="sidebar-col">

      <?php get_sidebar(); ?>
    </aside>
  </div>
</div>
<?php get_footer(); ?>
