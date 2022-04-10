<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri(); ?>/imgs/about-us-header-picture.png" alt="">
  <div class="header-text">Current Student Testimonials</div>
</div>
<div class="header-section-mobile">
  Current Student Testimonials
</div>

<!-- gray box -->
<div class="side-by-side-section">
  <div class="side-by-side-container">
    <div class="current-students-header bold-text">Current Students</div>
    <div class="side-by-side-content">
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/imgs/image 8.png" alt="" class="side-by-side-image"> -->
      <?php if (get_theme_mod($student_testimonials_top_img)) { ?>
        <img src="<?php echo get_theme_mod($student_testimonials_top_img) ?>" class="side-by-side-image" alt="">
      <?php } ?>
      <div class="side-by-side-text">
        <div class="bold-text">Join Our Family!</div>
        <div class="side-by-side-text-basic">
          The Teach 2 Reach community is growing, and we would love to have you! Our current students are excited to get to you know you- hear what they have to say about us!
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Student Testimonials Black box -->
<div class="student-testimonials-section">
  <div class="student-testimonials-container">
    <div class="current-students-header current-students-testimonials-header bold-text">Student Testimonials</div>

    <div class="student-testimonials-row">

      <div class="student-testimonials-entry">
        <div class="student-testimonials-entry-header student-testimonials-entry-text bold-text">
          <?php echo get_theme_mod($student_testimonials_row1_name) ?>
        </div>
        <div class="student-testimonials-entry-text">
          <?php echo get_theme_mod($student_testimonials_row1_quote) ?>
        </div>
      </div>

      <div class="student-testimonials-entry student-testimonials-entry-img student-testimonial-offset-side">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/imgs/current_students_photo.jpg" alt=""> -->
        <?php if (get_theme_mod($student_testimonials_row1_img)) { ?>
          <img src="<?php echo get_theme_mod($student_testimonials_row1_img) ?>" alt="">
        <?php } ?>
      </div>

    </div>

    <?php
    // get_example_data is in /inc/template_functions.php
    $data  = get_events_data($student_testimonials_repeater);
    if (!empty($data)) {
    ?>
      <?php
      foreach ($data as $k => $f) {
      ?>
        <div class="student-testimonials-row">

          <div class="student-testimonials-entry student-testimonials-entry-text">
            <div class="student-testimonials-entry-header bold-text">
              <?php echo $f['student_name_1'] ?>
            </div>
            <div>
              <?php echo $f['quote_1'] ?>
            </div>
          </div>

          <div class="student-testimonials-entry student-testimonials-entry-text student-testimonial-offset-side">
            <div class="student-testimonials-entry-header bold-text">
              <?php echo $f['student_name_2'] ?>
            </div>
            <div>
              <?php echo $f['quote_2'] ?>
            </div>
          </div>

        </div>
      <?php
      }
      ?>
    <?php
    }
    ?>

    <div class="student-testimonials-row">

      <div class="student-testimonials-entry student-testimonials-entry-img">
        <?php if (get_theme_mod($student_testimonials_rowLast_img)) { ?>
          <img src="<?php echo get_theme_mod($student_testimonials_rowLast_img) ?>" alt="">
        <?php } ?>
      </div>

      <div class="student-testimonials-entry student-testimonials-entry-text student-testimonial-offset-side">
        <div class="student-testimonials-entry-header student-testimonials-entry-text bold-text">
          <?php echo get_theme_mod($student_testimonials_rowLast_name) ?>
        </div>
        <div>
          <?php echo get_theme_mod($student_testimonials_rowLast_quote) ?>
        </div>
      </div>

    </div>

  </div>
</div>

<?php get_footer(); ?>