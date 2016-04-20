<?php
/**
 * The template part for displaying single posts
 *
 * @package Tracy\'s_Backpack
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if ( is_single() ) {
      the_title( '<h1 class="entry-title">', '</h1>' );
    } else {
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    }

    if ( 'post' === get_post_type() ) : ?>
      <div class="post-details">
        <h3><?php the_author(); ?>, 
          <time><?php the_date(); ?></time> <?php edit_post_link(' <i class="fa fa-pencil"></i> Edit this post','',''); ?></h3>
        
      </div><!-- .entry-meta -->
      
  </header><!-- post header -->

  <div class="row">
    <div class="col-sm-10">
      <?php if (has_post_thumbnail()) { ?>
        <div class="post-image">
          <?php the_post_thumbnail(); ?>
        </div><!-- post image -->
      <?php } ?>
    </div><!-- end image column -->
    
    <div class="col-sm-2" id="meta-col">

      <!-- SIDE ICONS -->
      <div class="meta-wrapper meta-square">
        
        <!-- Date box -->
	<div class="meta-date">
          <div class="meta-inner" id="date-box">
	    <span class="date-meta"><time><?php the_time('M j Y') ?> </time></span>
          </div>
          
          <!-- Date tooltip -->
	  <div class="meta-tooltip">	  
            <span class="meta-title">Browse archives for </span>
	    <a href="http://localhost/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/" title="View archive for <?php the_time('F'); ?>"><?php the_time('F') ?></a> <a href="http://localhost/<?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?>/" title="View archive for <?php the_time('F j, Y'); ?>"><?php the_time('j'); ?></a>, <a href="http://localhost/<?php the_time('Y'); ?>/" title="View archive for <?php the_time('Y'); ?>"><?php the_time('Y'); ?></a>		              
	  </div><!-- end tooltip -->
        </div><!-- end date box -->

        <!-- Author box -->
        <div class="meta-author">
          <div class="meta-inner">
            <?php echo get_avatar(get_the_author_meta('ID'), 70); ?>
          </div><!-- end author box -->
          <!-- author tooltip -->
	  <div class="meta-tooltip">
	    <span class="meta-title vcard author"><span class="fn"><?php echo get_the_author(); ?></span></span>
	    <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">All posts from <?php the_author(); ?></a>
	  </div><!-- end tooltip -->
        </div><!-- end author box -->

        <!-- Comment box -->
        <div class="meta-comments">
          <div class="meta-inner">
            <span class="fa-stack fa-2x" id="comment-stack">
              <i class="fa fa-comment-o fa-stack-2x"></i>
              <strong class="fa-stack-1x comment-text"><?php comments_number(0, 1, '%'); ?></strong>
            </span>
          </div><!-- end box -->
          <!-- comment tooltip -->
          <div class="meta-tooltip">
	    <span class="meta-title">Latest Comment</span>
	    <div class="coment-wrap">
              <?php $args = array(
                'number' => '1',
                'post_id' => $post->ID
              );
              $comments = get_comments($args);
              foreach($comments as $comment) :
                          echo get_avatar($comment->user_id, 16);
              $text = $comment->comment_author . "<br />" . $comment->comment_content . "<br />";
              echo $text;
              endforeach; ?>
	      
	      <a href="<?php get_comments_link(); ?>">Add your own comment</a>
            </div>
          </div><!-- end tooltip -->
        </div><!-- end comment box -->

        <!-- category box -->
	<div class="meta-cats">
          <div class="meta-inner">
	    <i class="fa fa-tag fa-3x" id="category-icon"></i>
          </div><!-- end box -->
          <!-- category tooltip -->
	  <div class="meta-tooltip">
	    <span class="meta-title">Posted in</span>
	    <p><?php the_category(' | '); ?></p>
	    <span class="meta-title">Tagged with</span>
	    <?php the_tags('', ', ', ''); ?>
          </div><!-- end tooltip -->
        </div><!-- end category box -->

        
      </div><!-- end side icons -->
      
    </div><!-- end side icon column -->
  </div><!-- end post header row -->
  
    <?php
    endif; ?>
  </header><!-- .entry-header -->

  <div class="post-text">
    <?php the_content(); ?>
  </div>
  
</article><!-- #post-## -->
