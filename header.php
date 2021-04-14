<!doctype html>
<html lang="ja">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	
<!-- font -->
<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  
<!-- css -->
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/style.css?date=20200218">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
	
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
<script>
$(function(){
    $(window).scroll(function (){
        $('.left-to-right, .down-to-top').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
	

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	
	<header id="masthead" class="site-header">
		<div class="container clearfix align-items-center d-flex">
		<div class="site-branding">
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
		
		<div class="site-navigationmenu">
		<nav id="site-navigation" class="main-navigation">
			<div id="nav-drawer">
				<div class="clearfix">
			  <input id="nav-input" type="checkbox" class="nav-unshown">
			  <label id="nav-open" for="nav-input"><span></span></label>
			  <label class="nav-unshown" id="nav-close" for="nav-input"></label>
				 
				<div id="nav-content">
					<div id="primary-menu" class="menu">
						<ul>
							<li><a href="<?php echo home_url(); ?>">TOP</a></li>
							<li><a href="<?php echo home_url(); ?>/service">Service</a></li>
							<li><a href="<?php echo home_url(); ?>/about">About</a></li>
							<li><a href="<?php echo home_url(); ?>/profile">Profile</a></li>
							<li><a href="<?php echo home_url(); ?>/blog">Blog</a></li>
							<li><a href="<?php echo home_url(); ?>/contact">Contact</a></li>
						</ul>
					</div>
				</div>
				</div>
			</div>
		</nav>
		</div><!-- .site-navigationmenu -->
		</div><!-- .container -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
