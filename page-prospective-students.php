<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>


<div class="page">
  <?php if (get_theme_mod($prospective_students_img)) { ?>
    <img src="<?php echo get_theme_mod($prospective_students_img) ?>" class="prospective-student-img" alt="">
  <?php } ?>

  <div class="prospective-student-body">
    <h1 class="prospective-student-h1">Our Programs</h1>
    <br>
    <p>Something</p>
    <p>Something</p>
    <p>Something</p>
    <p>Something</p>
    <p>Something</p>
  </div>
</div>