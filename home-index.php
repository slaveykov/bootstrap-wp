<?php 
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
		<div class="container">
		<div class="hero-unit">
			
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=1');
?>
<?php global $more; $more = 0; ?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themename' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="entry-meta">
							<?php
								printf( __( '<span class="meta-prep meta-prep-author">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="meta-sep">', 'themename' ),
									get_permalink(),
									get_the_date( 'c' ),
									get_the_date(),
									get_author_posts_url( get_the_author_meta( 'ID' ) ),
									sprintf( esc_attr__( 'View all posts by %s', 'themename' ), get_the_author() ),
									get_the_author()
								);
							?>
						</div><!-- .entry-meta -->
<div class="entry-content">

<?php global $more; $more = false; ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'themename' ) ); ?>
<?php $more = true; ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

<?php endwhile; ?>


			</div><!-- hero unit -->

<?php
$ilc_settings = get_option( "ilc_theme_settings" );
if( $ilc_settings['ilc_intro'] != '' ) : ?>
<div id="homeBlurb">
<?php echo '<h1><small>' . stripslashes($ilc_settings['ilc_intro']) . '</small><h1>'; ?>
</div>
<?php endif; ?>




<div id="homeRow">
<div class="row">
<div class="span-one-third">
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left_column')) : else : ?>  
        <h2>Widget Ready</strong></h2>  
        <p>This left_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
</div>
<div class="span-one-third">  
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('center_column')) : else : ?>  
        <h2>Widget Ready</strong></h2> 
        <p>This center_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
</div>
<div class="span-one-third">  
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('right_column')) : else : ?>  
        <h2>Widget Ready</strong></h2>  
        <p>This right_column is widget ready! Add one in the admin panel.</p>  
    <?php endif; ?>  
</div>
</div> <!-- row -->
</div> <!-- homeRow -->
		</div><!-- container -->

<?php get_footer(); ?>