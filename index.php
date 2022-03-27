<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>





<div class = "welcome" >
<img src="<?php echo get_template_directory_uri();?>/imgs/Home page photo.png" alt="" class = "collage-photo">

<div class = "welcome-text" > 
  <h1 class = "heading"  > Welcome! </h1>
  <p1 class = "paragraph" > We teach Barber and Barber Instructor courses (1800 hrs/400hrs respectively) as well as  cosmetology essentials and skills with a social twist. Our cosmetology school offers the full 1500hr State of MI course curriculum for licensure. <p1> 
</div> 


</img> 

</div> 

<div class = "images" >


<img src="<?php echo get_template_directory_uri();?>/imgs/group pic 1.jpg" alt="" class = "volunteer">
<img src="<?php echo get_template_directory_uri();?>/imgs/become a student pic.jpeg" alt="" class = "student">
<img src="<?php echo get_template_directory_uri();?>/imgs/donate pic.jpeg" alt="" class = "donate">


</div>



<div class = "words" > 
<p1 class = "first_word" > Volunteer </p1> 
<p2 class = "second_word" > Become a Student </p2> 
<p3 class = "third_word" > Donate </p3> 
</div> 


<div class = "video">

<iframe width="600" height="400"
src="https://www.youtube.com/embed/dSkt8Brso5w">
</iframe>

<p1 class = "difference" > Working to Make a Difference </p1> 

</div>


<?php get_footer(); ?>
