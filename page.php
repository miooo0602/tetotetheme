<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<div class="breadcrumbs-box container">
						<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
						</div>
					</div><!-- .breadcrumbs-box -->
				
				<div class="entry-content">
					<?php if(have_posts()): 
while(have_posts()): the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
