<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<h1>hi</h1>

<?php if (get_theme_mod($prospective_students_img)) { ?>
    <img src="<?php echo get_theme_mod($prospective_students_img) ?>" class="img" alt="">
  <?php } ?>

  <p>why isn't this working</p>