<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="entry-header entry-header-recruit">
				<div class="container">
					<?php
				the_archive_title( '<h1 class="entry-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
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
	<?php if(have_posts()): 
	while(have_posts()): the_post(); ?>

					<article <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>">
							<div class="post-list fade-in clearfix">
								<div class="post-thumb">
		<?php if( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail( '505_thumbnail' ); ?>
		<?php else: ?>

		<?php preg_match( '/wp-image-(\d+)/s', $post->post_content, $thumb ); ?>
		<?php if ( $thumb ): ?>
		<?php echo wp_get_attachment_image( $thumb[1], '505_thumbnail' ); ?>
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/com/noimg.jpg" alt="">
		<?php endif; ?>
		<?php endif; ?>
								</div>

								<div class="post-body">
										<time datetime="<?php echo get_the_date( 'c' ); ?>">
										<?php echo get_the_date(); ?>
										</time>
									<h2><?php the_title(); ?></h2>
							</div>

						</div>	
						</a>
				</article>

<?php endwhile; ?>
<?php else: ?>
<p>準備中です。</p>
<?php endif; ?>

	<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>	
				
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
