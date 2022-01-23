<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>
<!-- <h1>The Front Page</h1>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?> -->

<p> hi justin</p>

<!-- Example with default video if $home_top_vid isn't set -->
<!-- <iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe> -->

<div class="about_us">
  <h1 class = "our_philosophy" > Our Philosophy </h1>

  <div class = "text" >
  <p1 class = "description" >Our philosophy at Teach 2 Reach Inc. is 
    <p2 class = "orange_text_one" > to teach basic cosmetology essentials and barbering skills </p2>
    and all it entails in a fun, safe and inviting atmosphere. We intend to instruct in a way that is nontraditional through 
    <p3 class = "orange_text_one" > integrated learning </p3>
    , which entails integrating social skills with cosmetology essentials and barbering skills.
 <br> <br> We strive to help student learn through 
<p4 class = "orange_text_one" > guided learning methods </p4>
  such as group activities and differentiated learning techniques.  We help students understand what it takes to be successful by 
  <p5 class = "orange_text_one" > setting goals and objectives </p5> 
   and helping them reach those goal and objectives successfully. </p1>

 <div>
</div>


<?php get_footer(); ?>
