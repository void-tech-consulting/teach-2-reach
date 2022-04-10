<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri();?>/imgs/about-us-header-picture.png" alt="">
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
      <img src="<?php echo get_template_directory_uri();?>/imgs/image 8.png" alt="" class="side-by-side-image">
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
          Vanessa
        </div>
        <div class="student-testimonials-entry-text">
          “We really are not just a school we’re a family.”
        </div>
      </div>

      <div class="student-testimonials-entry student-testimonials-entry-img student-testimonial-offset-side">
        <img src="<?php echo get_template_directory_uri();?>/imgs/current_students_photo.jpg" alt="">
      </div>

    </div>

    <div class="student-testimonials-row">

      <div class="student-testimonials-entry student-testimonials-entry-text">
        <div class="student-testimonials-entry-header bold-text">
          Chauncey
        </div>
        <div>
          “I always leave better than I came.”
        </div>
      </div>

      <div class="student-testimonials-entry student-testimonials-entry-text student-testimonial-offset-side">
        <div class="student-testimonials-entry-header bold-text">
          Garland
        </div>
        <div>
        “We strive to uplift one another…and that’s special.”
        </div>
      </div>
      
    </div>

    <div class="student-testimonials-row">

      <div class="student-testimonials-entry student-testimonials-entry-text">
        <div class="student-testimonials-entry-header bold-text">
          Andre
        </div>
        <div>
          “Everybody just accepted me.”
        </div>
      </div>

      <div class="student-testimonials-entry student-testimonials-entry-text student-testimonial-offset-side">
        <div class="student-testimonials-entry-header bold-text">
          Trevor
        </div>
        <div>
          “Not too many people have the bonds and support that we have.”
        </div>
      </div>
      
    </div>

    <div class="student-testimonials-row">

      <div class="student-testimonials-entry student-testimonials-entry-img">
        <img src="<?php echo get_template_directory_uri();?>/imgs/group pic 1.jpg" alt="">
      </div>

      <div class="student-testimonials-entry student-testimonials-entry-text student-testimonial-offset-side">
        <div class="student-testimonials-entry-header bold-text">
          John
        </div>
        <div>
          “I feel like it was God intervening when I found this school”…
        </div>
      </div>
      
    </div>

  </div>
</div>

<?php get_footer(); ?>
