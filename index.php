<!doctype html>
<html class="no-js" lang="">
<?php wp_head(); ?>
<body>
<?php wp_footer(); ?>
<main id="main" role="main">
    <div class="wrapper">
        <div class="notice">
            <div class="inner">
                <img class="logo" title="Logo of Osqledaren"
                     src="<?php echo get_stylesheet_directory_uri() ?>/img/ol_logo.png"/>
                <h1 class="heading"><?php _e('The content of Osqledaren is served externally.', 'osqledaren-headless'); ?></h1>
                <a class="button" rel="nofollow" title="Go to App" href="http://osqledaren.se">
                    <?php _e('Take me to the site!', 'osqledaren-headless'); ?>
                </a>
            </div>
        </div>
    </div>
</main>

</body>
</html>