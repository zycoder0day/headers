<?php
/**
 * The header for Nuage theme
 *
 * This is the template that displays all of the <head> section and everything up until <main>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nuage
 * @since 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <?php
    wp_head();
    ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9583571796986552"
     crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();

    do_action('wgl_theme/preloader');

    do_action('wgl_theme/elementor_pro/header');

    if (apply_filters('wgl_theme/header/enable', true)) {
        get_template_part('templates/header/section', 'header');
    }

    $page_title = apply_filters('wgl_theme/page_title/enable', true);
    if (isset($page_title['page_title_switch']) && $page_title['page_title_switch'] !== 'off') {
        get_template_part('templates/header/section', 'page_title');
    }

    ?>
    <main id="main" class="site-main">
