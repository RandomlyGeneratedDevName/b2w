<?php get_header(); ?>
<?php get_template_part('template-parts/banner','title'); ?>

  <div class="content-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 overflow-hidden">

        <?php

        // are there any posts in the DB?
        if ( have_posts() ) {

          while ( have_posts() ) {

            
          }


        }

        ?>

          <article class="post">
            <div class="meta">
              <span>Sep 24, 2021</span>
            </div>
            <h2><a href="#">Blog post title</a></h2>
            <p class="excerpt">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veritatis expedita molestias id, dolorem sapiente quae dolores modi hic et ea, suscipit minima eligendi magnam odio reiciendis dolorum, non placeat?
            </p>
            <a href="#" class="read-more">Read the full post -&gt;</a>
          </article>

          

        </div>
      </div>
    </div>
  </div>

  
  <?php get_footer(); ?>