<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>

	</div><!-- #main  -->
</div><!-- #page -->
	<footer id="colophon" class="footer" role="contentinfo">
			<div class="container">
<div class="row">

<div class="span2">
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('f_left_column')) : else : ?>  
        <h2>Widget Ready</strong></h2>  
        <p>This left_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
</div>
<div class="span10">  
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('f_center_column')) : else : ?>  
        <h2>Widget Ready</strong></h2> 
        <p>This center_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
</div>
<div class="span4">  
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('f_right_column')) : else : ?>  
        <h2>Widget Ready</strong></h2>  
        <p>This right_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
</div>

</div><!-- .row -->


				<div id="site-generator">
				<small>&copy Copyright <?php echo date('Y') . " " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?></small>
				</div>			
			</div>
	</footer><!-- #colophon -->


<!-- Grab Google CDN's jQuery. Fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>

 <!--  plugin sources -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-alerts.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-modal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tabs.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-scrollspy.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-twipsy.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-popover.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-buttons.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery-ui-1.8.11.custom.js"></script>  
<script src="<?php bloginfo('template_url');?>/js/script.js"></script> 

<script>
 $(function() {
   $(".alert-message").alert();
 });
</script>

<script>
            $(function () {
              $("a[rel=twipsy]").twipsy({
                live: true
              })
            })
          </script>

 <script>
            $(function () {
              $("a[rel=popover]")
                .popover({
                  offset: 10
                })
                .click(function(e) {
                  e.preventDefault()
                })
            })
          </script>

 <script>
            $(function () {
$('#my-modal').modal({
  keyboard: true
})
})
          </script>

<?php
$ilc_settings = get_option( "ilc_theme_settings" );
if( $ilc_settings['ilc_ga'] != '' ) : ?>
<?php echo stripslashes($ilc_settings['ilc_ga']); ?>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>