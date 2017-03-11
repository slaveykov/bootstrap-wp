<?php 
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

		<div id="projectPage">
			<div id="layout-controls">
				<a href="#" class="grid"><span>Grid</span></a>
				<a href="#" class="list"><span>List</span></a>
				<div class="clear"></div>
			</div>
			<?php $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => -1)); 
				  $count =0;
			?>
			<?php if($loop) { ?>
				<ul id="folio" class="grid">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>					
						<li class="item-<?php the_ID() ?> <?php if(++$count%4==0) echo 'rightmost'?> ">
							<div class="image">
								<span>
									<a href="<?php the_permalink() ?>">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail('thumbnail');
											}
										?>
									</a>
								</span>
								<a href="<?php the_permalink() ?>" class="link">View Details</a>					
							</div>
							<div class="content">
								<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
								<span class="tags">
									<?php 
										// Fetching the tag names with respect to the post and displaying them
										$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'names');
										echo implode(wp_get_object_terms( $post->ID, 'tag', $args),', '); 
									?>
								</span>
								<p>
									<?php 
										// Using custom excerpt function to fetch the excerpt
										folio_excerpt('folio_excerpt_length','folio_excerpt_more');
									 ?>
								</p>
							</div>
							<div class="clear"></div>
						</li>									
					<?php endwhile; ?>
				</ul>	
			<?php } ?>
			<?php wp_reset_query(); ?>	
			<div class="clear"></div>
</div>
		


<?php get_footer(); ?>