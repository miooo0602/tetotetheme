<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php if(have_posts()): 
while(have_posts()): the_post(); ?>


			
<div class="entry-header entry-header-recruit">
				<div class="container">
					
					<h1 class="entry-title entry-title-single"><?php the_title(); ?><span><?php echo get_the_date(); ?><time datetime="<?php echo get_the_date( 'c' ); ?>"></time></span></h1>
				</div>
</div>
			
			<div class="breadcrumbs-box container">
						<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
						</div>
			</div><!-- .breadcrumbs-box -->


		<div class="container clearfix pt40 pb40">
			<div class="post-list-box post-main-box">
						
<article <?php post_class(); ?>>
<?php the_content(); ?>
</article>

<?php endwhile; endif; ?>

			</div><!-- post-list-box -->

			<div class="sidebar-box">
				<?php get_sidebar(); ?>
			</div>

		</div><!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
