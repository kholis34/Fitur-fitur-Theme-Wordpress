<?php get_header(); ?>
		</div>
			<div class="row bread_cumbs">
				<img src="<?php bloginfo('template_directory'); ?>/images/top_bg.png" width="100%" height="10" alt="">
				<div class="container">
					<p><?php the_breadcrumb(); ?></p>
					<span class="main_bradcumbs_logo">Vendor Design Interior</span>
				</div>
				
			</div>
			<!-- Main Content Wrapper -->
			
			<div class="container">
				<div class="col-lg-8 blog_wrapper_big">
				<div class="main_blog_control_loop">
				<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
					<div class="title_class_blog">
					
					<a href=""><h1><?php the_title(); ?></h1></a>
						
					</div>
					<hr>
						<?php if (has_post_thumbnail( $post->ID ) ) :
						{
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							$imagesrc = $image[0];
						}?>	
							
						<div class="thumbnail">
						
							<a href=""><img src="<?php echo $imagesrc; ?>" alt=""></a>
							
						</div>
						<hr>
						<?php endif; ?>
						
						<div class="main_content_description">
							<p><?php the_content(); ?></p>
						</div>
						<hr>
						<?php endwhile; ?> 
						<?php else : ?>
					<div class="main_blog_control_loop">	
						<h3 class="page_title">Page Not Found</h1>  
						<p class="main_content_description">We're very sorry, but the page you requested has not been found! It may have been moved or deleted.
						I'm not blaming you, but have you checked your address bar? There might be a typo in the URL.
						One last thing, if you're feeling so kind, please <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact' ) ) ); ?>">tell me</a> about this error, so that I can fix it. Thanks!</p>  
					</div>
				<?php endif; ?>
				</div>
				</div><!-- Big blog Wrap -->
				<div class="col-lg-1"></div>
				<?php get_sidebar(); ?>
			</div>

			<!-- End Content Wrapper -->
		
<?php get_footer(); ?>
