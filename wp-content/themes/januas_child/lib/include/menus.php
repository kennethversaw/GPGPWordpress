<?php
add_action('after_setup_theme', 'januas_register_menus', 100);

function januas_register_menus() {
    register_nav_menu('primary', __('Primary Menu', 'januas'));
}