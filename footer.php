<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tracy\'s_Backpack
 */

?>

<a href="#blog-top">
  <div class="navbar-fixed-bottom" id="return-to-top">
    <p>
      <i class="fa fa-arrow-circle-o-up fa-2x"></i>
    </p>
  </div>
</a>
	
<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JAVA (Place at the end of the coument so the page loads faster) ======= -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-2.2.2.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"> </script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>


</body>
</html>
