<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri();?>/imgs/about-us-header-picture.png" alt="">
  <div class="header-text">Donate</div>
</div>

<div class="page-half-2">
  <div class="content-wrapper">
    <div class="prospective-student-body">
      <h1 class="prospective-student-sif"></h1>


      <div class="prospective-student-interest-form">
        <?php
        $shortcode = get_theme_mod($donate_form_shortcode);
        echo do_shortcode($shortcode);
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>