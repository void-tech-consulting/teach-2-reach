<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri();?>/imgs/bg_1.jpg" alt="">
  <div class="header-text">About Us</div>
</div>
<div class="header-section-mobile">
    About Us
</div>

<div class="about_us">
  <h1 class = "our_philosophy" > Our Philosophy </h1>

  <div class = "text" >
  <p1 class = "description" ><?php echo get_theme_mod($about_us_philosophy_paragraph) ?></p1>

</div>
</div>
</div> 
</div>



<div class = "who_we_are" >

  <div class = "text" > 
    <h1 class = "heading" > Who We Are </h1> 
    <p1 class = "paragraph" ><?php echo get_theme_mod($about_us_whoweare_paragraph) ?></p1> 

  </div>  

  <div class = "picture" >
    <div class="middle_picture" style="background: url(<?php echo get_theme_mod($about_us_middle1_picture) ?>); background-repeat: no-repeat; background-size: cover;"> </div>
    </div> 
  </div>
</div>




<div class = "goals" > 

  <div class="middle_picture" style="background: url(<?php echo get_theme_mod($about_us_middle2_picture1) ?>); background-repeat: no-repeat; background-size: cover;"> </div>

  <h1 class = "creative" > Be Creative <br> <br> <br> Learn New Skills <br> <br> <br> Treat Yourself <br> <br> <br> Make New Friends </h1> 



  <div class="middle_picture" style="background: url(<?php echo get_theme_mod($about_us_middle2_picture2) ?>); background-repeat: no-repeat; background-size: cover;"> </div>



</div> 

<div class = "purple_section" >
  <h1 class = "promise" > Our Promises: </h1> 
  <p1 class = "paragraph" ><?php echo get_theme_mod($about_us_promise_paragraph) ?></p1> 


</div>




<?php get_footer(); ?>
