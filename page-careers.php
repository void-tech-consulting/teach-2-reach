<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri();?>/imgs/bg_6.jpg" alt="">
  <div class="header-text">Careers</div>
</div>
<div class="header-section-mobile">
    Careers
</div>
<div class="careers-orange-half">
    <p class="careers-join-us-msg">Join us!</p>

    <div class="careers-orange-container">

        <div class="careers-orange-half-1">
            <p class="careers-orange-subheading">Why Work Here?</p>
            <ul>
                <li>something</li>
                <li>another something</li>
            </ul>

            <p class="careers-orange-subheading">What do I Need to Apply?</p>
            <ul>
                <li>something</li>
                <li>another something</li>
            </ul>

            <br>
            <br>

            <p class="careers-orange-subheading">How do I apply?</p>
            <br>
            <p>Email all necessary documents and identification to teach2reachinc@aol.com.</p>
        </div>
        <div class="careers-orange-half-2">
            <img class="" src="<?php echo wp_get_attachment_url(get_theme_mod($careers_top_image)) ?>" />
        </div>
    </div>
</div>

<div class="careers-black-half">
    <h1 class="careers-positions-header">Available Positions</h1>
    <div class="careers-item">
        <div class="careers-item-meta">
            <div class="careers-item-date"><strong>Date Posted: </strong></div>
            <div class="careers-item-deadline">Deadline</div> 
        </div>
        <div class="careers-item-body">
            <img class="careers-item-icon" src="<?php echo get_template_directory_uri(); ?>/imgs/ellipse.png" ></img>
            <div class="careers-item-info">
                <div class="careers-item-info-header">Header</div>
                <div class="careers-item-info-text">Job description: This position will entail that the candidate to be willing and manage
comprehensive functions related to the daily operations of the school office, data entry, and
files.
Salary: $18/hour
Requirements: 
Proficient in computer software
Effective in written and verbal communication
Ability to manage multiple tasks
Must be well organized
Must understand how to input and interpret data entry
</div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>