<?php get_header(); ?>

<div class="page-title">
    <h1><?php the_title(); ?></h1>
    <p><?php the_category(); ?></p>
</div>

<section id="s-blog">
  <div class="container">
    <div class="s-blog-wrap">
      <div class="s-blog-img-warap">
        <img src="" alt="">
      </div>
      <div class="s-blog-text-wrap">
        <p><?php the_content(); ?></p>
      </div>
    </div>
    
  </div>
</section>

<?php get_footer(); ?>