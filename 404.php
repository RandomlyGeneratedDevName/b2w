<?php 
/**
 * The template for displaying 404 Not Found page.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package bootstrap2wordpress
 * @since 2.0
 */

 get_header();
 get_template_part( 'template-parts/banner', 'title');
?>

<div class="content-area">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">

        <div class="image-404">
          <img src="<?= esc_url( get_template_directory_uri() ) ?>/assets/images/404.png" alt="404" class="img-fluid">
        </div>

        <h3 class="text-center"><?= esc_html_e( 'Sorry, sad pug can\'t it.', 'bootstrap2wordpress')?></h3>

        <div class="button-box text-center">
          <a href="<?= esc_url( home_url( '/' ) ) ?>" class="btn btn-primary"><?= esc_html_e( 'Back to Homepage', 'bootstrap2wordpress' ) ?></a>
        </div>

      </div>
    </div>
  </div>
</div>

<?php
get_footer();