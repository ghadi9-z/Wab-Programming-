
<?php get_header(); ?>

<div class="hero">
    <h1><?php _e('حلول رقمية مبتكرة لتطوير أعمالك!', 'digital-solutions'); ?></h1>
    <p><?php _e('نقدم لك أحدث الحلول التقنية لتطوير أعمالك بأفضل الأسعار', 'digital-solutions'); ?></p>
</div>

<div class="container">
    <h2><?php _e('خدماتنا', 'digital-solutions'); ?></h2>
    <?php
    $services = array(
        array("title" => __('تطوير المواقع', 'digital-solutions'), "desc" => __('تصميم مواقع احترافية تلبي احتياجات عملك.', 'digital-solutions')),
        array("title" => __('التسويق الرقمي', 'digital-solutions'), "desc" => __('استراتيجيات تسويق فعالة لزيادة العملاء.', 'digital-solutions')),
        array("title" => __('تحليل البيانات', 'digital-solutions'), "desc" => __('استخدام الذكاء الاصطناعي لتحليل بيانات عملك.', 'digital-solutions'))
    );
    foreach ($services as $service) {
        echo "<div class='service-box'>
                <h3>{$service['title']}</h3>
                <p>{$service['desc']}</p>
              </div>";
    }
    ?>
</div>

<?php get_footer(); ?>
