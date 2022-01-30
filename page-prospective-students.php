<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="page-half-1">
  <?php if (get_theme_mod($prospective_students_img)) { ?>
    <img src="<?php echo get_theme_mod($prospective_students_img) ?>" class="prospective-student-img" alt="">
  <?php } ?>

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

    <h1 class="prospective-student-h1">Professional (MI) Barber (licensing) Program</h1>
    <br>
    <p class="prospective-student-p"><strong>Description: </strong>
      This program is designed to prepare candidates for state exam and
      licensure in the field of cosmotology. Cosmetology is a service occupation
      that deals with hair, skin, and nails. Career paths inlude opportunities
      to work in a salon as a professional stylist, manager, or business owner.</p>
    <br>
    <p class="prospective-student-p"><strong>Time: </strong>
      1500 hours</p>
    <br>
    <p class="prospective-student-p"><strong>Additional Requirements:</strong></p>
    <ul>
      <li class="prospective-student-p">Proof of 10th grade education of higher</li>
      <li class="prospective-student-p">Proof of age 17 years or older</li>
      <li class="prospective-student-p">Completion of 1500 hours; course program
        including theory and practical
      </li>
    </ul>

    <br>
    <br>
    <br>

    <h1 class="prospective-student-h1">Professional (MI) Cosmetology Instructor
      (Licensing) Program
    </h1>
    <br>
    <p class="prospective-student-p"><strong>Description: </strong>
      This program is designed to prepare <em><strong>licensed</strong></em>
      cosmetologists for the state exam and licensure for cosmetology Instructor.
      Cosmetology Instructors work in educational settings. Career paths include
      opportunities to work in a cosmetology school as a teacher or school owner.</p>
    <br>
    <p class="prospective-student-p"><strong>Time: </strong>
      500 hours</p>
    <br>
    <p class="prospective-student-p"><strong>Additional Requirements:</strong></p>
    <ul>
      <li class="prospective-student-p">Proof of state cosmetology license</li>
      <li class="prospective-student-p">Completion of 500 hours; course program
        including lesson planning and demonstrations.
      </li>
    </ul>
  </div>
</div>

<div class="page-half-2">
  <div class="prospective-student-body">
    <h1 class="prospective-student-sif">Student Interest Form</h1>

    <?php
    $shortcode = get_theme_mod($prospective_students_form_shortcode);
    echo do_shortcode($shortcode);
    ?>
  </div>
</div>
</div>

<?php get_footer(); ?>