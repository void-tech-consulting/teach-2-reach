<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>





<div class="welcome">
  <img src="<?php echo get_template_directory_uri(); ?>/imgs/Home page photo.png" alt="" class="collage-photo">

  <div class="welcome-text">
    <h1 class="heading">
      <span id="index_top"><?php  echo get_theme_mod($index_welcome_header); ?></span>
    </h1>
    <p1 class="paragraph">
      <?php  echo get_theme_mod($index_welcome_text); ?>
    <p1>
  </div>


  </img>

</div>

<span id="index_middle"></span>
<div class="images">
    <div class="index-picture-section">
      <div class="middle-picture" style="background: url(<?php echo get_theme_mod($index_middle_picture1) ?>); background-repeat: no-repeat; background-size: cover;"> </div>
      <p class="index-words">Volunteer</p>
    </div>
    <div class="index-picture-section">
      <div class="middle-picture" style="background: url(<?php echo get_theme_mod($index_middle_picture2) ?>); background-repeat: no-repeat; background-size: cover;"> </div>
      <p class="index-words">Become a Student</p>
    </div>
    <div class="index-picture-section">
      <div class="middle-picture" style="background: url(<?php echo get_theme_mod($index_middle_picture3) ?>); background-repeat: no-repeat; background-size: cover;"> </div>
      <p class="index-words">Donate</p>
    </div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/imgs/group pic 1.jpg" alt="" class="volunteer">
  <img src="<?php echo get_template_directory_uri(); ?>/imgs/become a student pic.jpeg" alt="" class="student">
  <img src="<?php echo get_template_directory_uri(); ?>/imgs/donate pic.jpeg" alt="" class="donate"> -->


</div>

<!-- <video id="video-screenshot" controls>
  <source src="<?php echo wp_get_attachment_url(get_theme_mod($about_us_video))?>" type="video/mp4">
</video> -->


<div class="video">


  <video class="index-video-frame" controls>
    <source src="<?php echo wp_get_attachment_url(get_theme_mod($index_video))?>" type="video/mp4">
  </video>
  <p1 class="index-video-words"> Working to Make a Difference </p1>

</div>


<?php get_footer(); ?>
