<?php 
	get_header(); 	
	$featured_image = wp_get_attachment_url( get_post_thumbnail_id() );
?>
<div class="container single-blog">
	<div class="row">
		<div class="col-lg-12">
			<div class="post-title">
                <?php echo get_field('categories',$post->ID); ?>
							<h1 class="title-sw"><?php the_title(); ?></h1>

                            <?php echo get_field('country',$post->ID) ?>

						</div>
		
			<div class="post-content-wrap">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post-content-wrap" id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">
						
						<div class="entry-content">
							<?php the_content(); ?>	
						</div>
					</div>
				<?php endwhile; else : ?>
					<div class="post-not-found" class="hentry ">
						<div class="blog-header">
							<h1 class="title"><?php _e( 'Oops, Page Not Found!', 'launchtheme' ); ?></h1>
						</div>
						<div class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking the page URL or search our site.', 'launchtheme' ); ?></p>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>