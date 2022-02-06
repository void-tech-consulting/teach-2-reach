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

<div class="news-events-container">
    <div class="news-events-entry">
        <div class="news-events-event-name">
            Event: Annual MLK Day Positive Youth Initiative
        </div>
        <div>
            <div class="news-events-date news-events-entry-subsection">Date</div>
        </div>
        <div class="news-events-entry-subsection">
            <span class="news-events-subheader">What:</span>
            <span class="news-events-white-text">more stuff here  blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</span>
        </div>
        <div class="news-events-entry-subsection">
            <span class="news-events-subheader">Who:</span>
            <span class="news-events-white-text">more stuff here  blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</span>

        </div>
        <div class="news-events-entry-subsection">
          <div class="news-events-side-by-side">
            <div class="news-events-side-by-side-half">
                <span class="news-events-subheader">Why:</span><br>
                <span class="news-events-white-text">more stuff here  blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</span>
            </div>
            <img class="news-events-side-by-side-half" src="<?php echo get_template_directory_uri();?>/imgs/current_students_photo.jpg" alt="">
          </div>
        </div>
        <div class="news-events-entry-note news-events-white-text">
            Note here more stuff here  blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah
        </div>
    </div>
</div>

<?php get_footer(); ?>
