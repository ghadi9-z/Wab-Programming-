<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<div class="container">
    <h2>���� �������</h2>
    <ul>
        <?php
        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM wp_portfolio");
        if ($results) {
            foreach ($results as $project) {
                echo "<li>";
                echo "<h3>{$project->project_name}</h3>";
                echo "<p>����: {$project->client_name}</p>";
                echo "<p>{$project->description}</p>";
                echo "</li>";
            }
        } else {
            echo "<p>�� ���� ������ ������ ������.</p>";
        }
        ?>
    </ul>
</div>

<?php get_footer(); ?>

