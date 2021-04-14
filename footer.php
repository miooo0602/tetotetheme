<?php get_header(); ?>

	</div><!-- #content -->





	<footer id="footer" class="site-footer">
		<div class="footer-contact">
			<div class="container">
				<div class="clearfix">
					<div class="footer-contact-left">
						<h2 class="style2a"><span class="style2a-first"></span>Contact us<span class="style2a-jp">お問い合わせ</span></h2>
						<p class="color-black fontsize18 color-black_2 serif">
							お気軽にお問い合わせください。
						</p>
					</div>	
					<div class="footer-contact-right text-center pt40 pl60">
						<div class="more more01">
							<a href="<?php echo home_url(); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/img/top/btn_6.png" alt="image" class="btn_6"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-contact-2">
		   <div class="container">
			  <div class="clearfix">
			    <div class="footer-info">
					<div class="line">
						<div class="line_inner">
							<a href="<?php echo home_url(); ?>/contact/" class="text-center"> 
								<p class="fontsize20 serif">お役立ち情報発信中</p>
								<p class="fontsize23 serif">今すぐLINE友達登録する</p>
							</a>
						</div>
					</div>
					<div class="line">
						<div class="line_inner">
							<a href="<?php echo home_url(); ?>/contact/" class="text-center"> 
							<p class="fontsize20 serif">お客様から愛され<br>選ばれ続けるサロンになる法則</p>
							<p class="fontsize23 serif">無料メール講座はこちら</p>
							</a>
						</div>
					</div>
				</div>
			   </div>
			</div>			
		 </div> 

		 <div class="footer-sitemap">
								<div class="clearfix">
									<div class="footer-menu">
										<ul class="sitemap footer-menu-lists">
											<li class="footer-menu-lists-first"><a href="<?php echo home_url(); ?>">TOP</a></li>
											<li><a href="<?php echo home_url(); ?>/service">Service</a></li>
											<li><a href="<?php echo home_url(); ?>/about">About</a></li>
											<li><a href="<?php echo home_url(); ?>/profile">Profile</a></li>
											<li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
											<li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
										</ul>
									</div>
									<div class="sns-menu">
										<ul class="sns-menu-lists">
											<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/instagram_icon.png" alt="image" class="btn_5"></a></li>
											<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/blog_icon.png" alt="image" class="btn_5"></a></li>
											<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/twitter_icon.png" alt="image" class="btn_5"></a></li>
											<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/facebook_icon.png" alt="image" class="btn_5"></a></li>
										</ul>
									</div>
								</div> 
								<div class="site-branding site-branding-footer">
									<?php
									the_custom_logo();
									if ( is_front_page() && is_home() ) :
										?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><!--<?php bloginfo( 'name' ); ?>--><img src="<?php echo get_template_directory_uri(); ?>/img/com/logo.png" alt="image"></a></h1>
										<?php
									else :
										?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><!--<?php bloginfo( 'name' ); ?>--><img src="<?php echo get_template_directory_uri(); ?>/img/com/logo.png" alt="image"></a></p>
										<?php
									endif;
									$underscores_description = get_bloginfo( 'description', 'display' );
									if ( $underscores_description || is_customize_preview() ) :
										?>
									<?php endif; ?>
								</div><!-- .site-branding -->
		</div>  
		
		<div id="copyright" class="bg01 pt20 pb20">
			<div class="container text-center">
				<p class="color-black fontsize12">
				© XXXXXXXX All rights reserved.
				</p>
			</div>
		</div>	<!-- #copyright -->
	
	</footer><!-- #colophon -->


</div><!-- #page -->



<script>
//スムーズスクロール
jQuery(function(){
   jQuery('a[href^="#"]').click(function() {// # クリック処理
      var speed = 600; //スクロール速度ミリ秒
      var href= jQuery(this).attr("href"); // アンカーの値取
      // 移動先を取得
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;// 移動先を数値で取得
      // スムーススクロール
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
</script>

<?php wp_footer(); ?>

</body>
</html>
