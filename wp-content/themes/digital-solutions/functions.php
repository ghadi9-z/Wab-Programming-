
<?php
function digital_solutions_theme_setup() {
    // دعم الترجمة
    load_theme_textdomain('digital-solutions', get_template_directory() . '/languages');

    // دعم ميزات القالب الأساسية
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'digital_solutions_theme_setup');

// تحميل ملفات CSS تلقائيًا
function digital_solutions_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());

    // تحميل RTL.css عند استخدام اللغة العربية
    if (is_rtl()) {
        wp_enqueue_style('digital-solutions-rtl', get_template_directory_uri() . '/rtl.css');
    }
}
add_action('wp_enqueue_scripts', 'digital_solutions_enqueue_styles');
?>
