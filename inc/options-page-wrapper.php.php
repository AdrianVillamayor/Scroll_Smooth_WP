<div class="wrap">
    <h2>Smooth Scroll WP - Options</h2>
    <form method="post" action="options.php">
        <?php
        settings_fields('ss_settings-group'); //passing in the settings group as defined register settings
        do_settings_sections('scroll_smooth_controller'); //page that it appears on
        submit_button('Update');
        ?>
    </form>
</div>
