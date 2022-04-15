<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>


<div class="header-section">
  <img class="header-picture" src="<?php echo get_template_directory_uri();?>/imgs/bg_4.jpg" alt="">
  <div class="header-text">News & Events</div>
</div>
<div class="header-section-mobile">
    News & Events
</div>

<div class="news-events-container">
  <?php
  // get_example_data is in /inc/template_functions.php
  $data  = get_events_data('event_repeater_setting');
  if (!empty($data)) {
  ?>
    <?php
    foreach ($data as $k => $f) {
    ?>

      <div class="news-events-entry">
        <div class="news-events-event-name">
          <?php echo $f['event_title'] ?>
        </div>
        <div>
          <div class="news-events-date news-events-entry-subsection"><?php echo $f['event_date'] ?></div>
        </div>
        <div class="news-events-entry-subsection">
          <span class="news-events-subheader">What:</span>
          <span class="news-events-white-text"><?php echo $f['event_what'] ?></span>
        </div>
        <div class="news-events-entry-subsection">
          <span class="news-events-subheader">Who:</span>
          <span class="news-events-white-text"><?php echo $f['event_who'] ?></span>

        </div>
        <div class="news-events-entry-subsection">
          <div class="news-events-side-by-side">
            <div class="news-events-side-by-side-half-1">
              <span class="news-events-subheader">Why:</span><br>
              <span class="news-events-white-text"><?php echo $f['event_why'] ?></span>
            </div>
            <!-- <img class="news-events-side-by-side-half" src="<?php echo get_template_directory_uri(); ?>/imgs/current_students_photo.jpg" alt=""> -->
            <?php
            $media = '';
            if ($f['event_img']) {
              // get_media_url function is in template_functions.php
              $media = '<img class="news-events-side-by-side-half-2" src="' . esc_url(get_media_url($f['event_img'])) . '">';
            }
            ?>
            <?php echo $media ?>
          </div>
        </div>
        <div class="news-events-entry-note news-events-white-text">
          <?php echo $f['event_note'] ?>
        </div>
      </div>
    <?php
    }
    ?>
  <?php
  }
  ?>
</div>

<?php get_footer(); ?>