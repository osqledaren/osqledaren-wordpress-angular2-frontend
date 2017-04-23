<!doctype html>
<html class="no-js" lang="">
<?php wp_head(); ?>
<body>

<?php

$app_url = get_option('osqledaren_angular2_app_url');
$app_url = rtrim($app_url, '/');

?>
<main class="front" id="main" role="main">
    <div class="wrapper">
        <div class="notice">
            <div class="inner">
                <img class="logo" title="Logo of Osqledaren"
                     src="<?php echo get_stylesheet_directory_uri() ?>/img/ol_logo_black.png"/>
                <h1 class="heading"><?php _e('The content of Osqledaren is served externally.', 'osqledaren-headless'); ?></h1>
                <a class="button" rel="nofollow" title="Go to App" href="<?php echo $app_url; ?>">
                    <?php _e('Go to the site', 'osqledaren-angular2'); ?>
                </a>
                <a class="button button-right" rel="nofollow" title="Go to App" href="/wp-admin">
                    <?php _e('Enter dashboard', 'osqledaren-angular2'); ?>
                </a>
            </div>
        </div>
    </div>
</main>

<?php wp_footer(); ?>

</body>
</html>