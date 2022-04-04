<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

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