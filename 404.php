<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'underscores' ); ?></h1>
				</header><!-- .page-header -->

				<div class="entry-content">
					
					<div class="container pt60 pb60 text-center">
						<h3 class="pb30">
							お探しのページは見つかりませんでした。
						</h3>
						<p class="pb30">お探しのページは、削除されたか、名前が変更された可能性があります。<br>
直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。</p>
						<div class="more more01 text-center">
						<a href="<?php echo home_url(); ?>">トップページへ</a>
		</div>
					</div>
					
				</div><!-- .entry-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
