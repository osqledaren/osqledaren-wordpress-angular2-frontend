<?php

defined('ABSPATH') or die();

class Osqledaren_Angular2_Admin
{
    function __construct()
    {
        $this->init();
    }

    private function init()
    {
        add_action('admin_menu', array($this, 'create_menu'));

    }

    public function create_menu()
    {
        add_menu_page('Angular2 App', 'Angular2 App', 'administrator', __FILE__, array($this, 'settings_page'), '
dashicons-welcome-view-site');
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function register_settings()
    {
        //register our settings
        register_setting('osqledaren_angular2-settings-group', 'osqledaren_angular2_app_url');
    }

    public function settings_page()
    {
        ?>
        <div class="wrap">
            <h1>Angular 2 App Settings</h1>
            <p>The app url must include protocol and port, e.g http://osqledaren.se. <br/>Notice: you must host the app in the same parent domain.
                Otherwise authenticated requests from the app won't work because of enforced security restrictions.</p>
            <form method="post" action="options.php">
                <?php settings_fields('osqledaren_angular2-settings-group'); ?>
                <?php do_settings_sections('osqledaren_angular2-settings-group'); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">App url</th>
                        <td><input type="text" name="osqledaren_angular2_app_url"
                                   value="<?php echo esc_attr(get_option('osqledaren_angular2_app_url')); ?>"/></td>
                    </tr>
                </table>

                <?php submit_button(); ?>

            </form>
        </div>
    <?php }
}

new Osqledaren_Angular2_Admin();