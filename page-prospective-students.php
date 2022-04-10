<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri(); ?>/imgs/about-us-header-picture.png" alt="">
  <div class="header-text">Prospective Students</div>
</div>
<div class="header-section-mobile">
    Prospective Students
</div>

<div class="page-half-1">
  <?php if (get_theme_mod($prospective_students_img)) { ?>
    <img src="<?php echo get_theme_mod($prospective_students_img) ?>" class="prospective-student-img" alt="">
  <?php } ?>

  <div class="content-wrapper">
    <div class="prospective-student-body">
      <h1 class="prospective-student-title">Our Programs</h1>
      <br>
      <h2 class="prospective-student-h2">Requirements:</h2>
      <ul>
        <li class="prospective-student-p">Demonstration of good moral character</li>
        <li class="prospective-student-p">Valid ID</li>
        <li class="prospective-student-p">Preliminary in-person consulation</li>
        <li class="prospective-student-p">Submission of application/tuition fees
          (email teach2reach@aol.com for payment details)
        </li>
      </ul>

      <br>
      <br>
      <br>
      <?php
      // get_example_data is in /inc/template_functions.php
      $data  = get_events_data($prospective_students_repeater);
      if (!empty($data)) {
      ?>
        <?php
        foreach ($data as $k => $f) {
        ?>
          <h1 class="prospective-student-h1"><?php echo $f['program_title'] ?></h1>
          <br>
          <p class="prospective-student-p"><strong>Description: </strong><?php echo $f['description'] ?></p>
          <br>
          <p class="prospective-student-p"><strong>Time: <?php echo $f['time'] ?></strong>
            1500 hours</p>
          <br>
          <p class="prospective-student-p"><strong>Additional Requirements:</strong>
          <p class="prospective-student-p"><?php echo $f['requirements'] ?></p>
          </ul>

          <br>
          <br>
          <br>
        <?php
        }
        ?>
      <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="page-half-2">
  <div class="content-wrapper">
    <div class="prospective-student-body">
      <h1 class="prospective-student-sif">Student Interest Form</h1>


      <div class="prospective-student-interest-form">
        <?php
        $shortcode = get_theme_mod($prospective_students_form_shortcode);
        echo do_shortcode($shortcode);
        ?>
      </div>
    </div>
  </div>
</div>
</div>

<?php get_footer(); ?>