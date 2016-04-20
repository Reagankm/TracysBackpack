<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tracy\'s_Backpack
 */

get_header(); ?>

<div class="archive-heading">
  <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tracys_backpack' ); ?></h1>
</div>
  <div class="container" id="main-stuff">
    <div class="row no-gutters" id="primary">
      <main id="content" class="col-sm-7 col-sm-offset-1" role="main">
        
        <div class="page-content error-page-content">
	  <h3><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links to the side or a search?', 'tracys_backpack' ); ?></h3>
      </main>
      <aside class="col-sm-3" id="sidebar-col">

        <?php get_sidebar(); ?>
      </aside>
    </div>
  </div>
</section><!-- .error-404 -->


<?php
get_footer(); ?>
