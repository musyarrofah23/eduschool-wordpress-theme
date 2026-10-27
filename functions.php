
<?php

function eduschool_setup() {
    // Mengaktifkan judul halaman otomatis dari WordPress
    add_theme_support('title-tag');

    // Mengaktifkan gambar unggulan untuk artikel
    add_theme_support('post-thumbnails');

    // Mendaftarkan menu navigasi
    register_nav_menus(array(
        'primary' => 'Menu Utama',
    ));
}
add_action('after_setup_theme', 'eduschool_setup');

function eduschool_enqueue_styles() {
    wp_enqueue_style(
        'eduschool-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'eduschool_enqueue_styles');
