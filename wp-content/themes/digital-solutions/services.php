<?php
/*
Template Name: Services
*/
get_header();
?>

<div class="container">
    <h2>Œœ„« ‰«</h2>
    <ul>
        <?php
        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM wp_services");
        foreach ($results as $service) {
            echo "<li><h3>{$service->title}</h3><p>{$service->description}</p></li>";
        }
        ?>
    </ul>
</div>

<?php get_footer(); ?>
