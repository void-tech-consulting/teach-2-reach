<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri();?>/imgs/bg_7.jpg" alt="">
  <div class="header-text">Donate</div>
</div>
<div class="header-section-mobile">
    Donate
</div>

<div class="donate-body">
  <div class="donate-left">
    <div class="donate-middle-section">Help make a difference in the Genesee County community.</div>
  </div>
  <div class="donate-right">
    <?php
    $shortcode = get_theme_mod($donate_form_shortcode);
    echo do_shortcode($shortcode);
    ?>
  </div>
</div>

<?php get_footer(); ?>