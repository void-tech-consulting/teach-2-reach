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

<!-- gray box -->
<div class="side-by-side-section">
  <div class="side-by-side-container">
  <div class="side-by-side-header">Current Students</div>
    <div class="side-by-side-content">
      <img src="<?php echo get_template_directory_uri();?>/img/image 8.png" alt="" class="side-by-side-image">
      <div class="side-by-side-text">
        <div class="bold-text">Join Our Family!</div>
        <div class="side-by-side-text-basic">
          The Teach 2 Reach community is growing, and we would love to have you! Our current students are excited to get to you know you- hear what they have to say about us!
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Example with default video if $home_top_vid isn't set -->
<!-- <iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe> -->

<?php get_footer(); ?>
