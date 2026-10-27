
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-container">

        <a class="site-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img
    class="brand-logo"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/10/erasebg-transformed-3.png')); ?>"
    alt="Logo SMP Informatika Roudlotul Hidayah"
>
            <span class="brand-text">
                <strong>SMP INFORMATIKA</strong>
                <strong>ROUDLOTUL HIDAYAH</strong>
                <small>Website Profil Sekolah</small>
            </span>
        </a>

        <nav class="main-navigation" aria-label="Menu utama">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

    </div>
</header>
