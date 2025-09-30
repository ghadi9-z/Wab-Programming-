
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar">
    <a href="<?php echo home_url(); ?>"><?php _e('الرئيسية', 'digital-solutions'); ?></a>
    <a href="<?php echo site_url('/services'); ?>"><?php _e('خدماتنا', 'digital-solutions'); ?></a>
    <a href="<?php echo site_url('/portfolio'); ?>"><?php _e('معرض الأعمال', 'digital-solutions'); ?></a>
    <a href="<?php echo site_url('/blog'); ?>"><?php _e('المدونة', 'digital-solutions'); ?></a>
    <a href="<?php echo site_url('/contact'); ?>"><?php _e('اتصل بنا', 'digital-solutions'); ?></a>
</div>
