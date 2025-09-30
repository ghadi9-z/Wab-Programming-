<?php
/*
Template Name: Pricing
*/
get_header();
?>

<div class="container">
    <h2>«·»«ﬁ«  Ê«·√”⁄«—</h2>
    <ul>
        <?php
        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM wp_pricing");
        if ($results) {
            foreach ($results as $plan) {
                echo "<li>";
                echo "<h3>{$plan->plan_name}</h3>";
                echo "<p>«·”⁄—: {$plan->price}</p>";
                echo "<p>{$plan->features}</p>";
                echo "</li>";
            }
        } else {
            echo "<p>·«  ÊÃœ Œÿÿ „ Ê›—… Õ«·Ì«.</p>";
        }
        ?>
    </ul>
</div>

<?php get_footer(); ?>
