<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

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

            <p class="careers-orange-subheading">How do I apply?</p>
            <br>
            <p>Email all necessary documents and identification to teach2reachinc@aol.com.</p>
        </div>
        <div class="careers-orange-half-2">
            <img class="" src="<?php echo wp_get_attachment_url(get_theme_mod($careers_top_image)) ?>" />
        </div>
    </div>
</div>


<?php get_footer(); ?>