 <?php
/*
Template Name: Blog
*/
get_header();
?>

<div class="container">
    <h2>�������</h2>
    <?php
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM wp_blog ORDER BY created_at DESC");
    if ($results) {
        foreach ($results as $post) {
            echo "<article style='margin-bottom: 30px;'>";
            echo "<h3>{$post->title}</h3>";
            echo "<p>{$post->content}</p>";
            echo "<p><small>����� �����: {$post->created_at}</small></p>";
            echo "</article>";
        }
    } else {
        echo "<p>�� ���� ������ �� ������� ��� ����.</p>";
    }
    ?>
</div>

<?php get_footer(); ?>
