<?php
/*
Template Name: Contact
*/
get_header();
?>

<div class="container">
    <h2>« ’· »‰«</h2>
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
        <input type="text" name="name" placeholder="«·«”„" required>
        <input type="email" name="email" placeholder="«·»—Ìœ «·≈·ﬂ —Ê‰Ì" required>
        <textarea name="message" placeholder="—”«· ﬂ" required></textarea>
        <button type="submit">≈—”«·</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        global $wpdb;
        $wpdb->insert("wp_contact_requests", [
            'name' => sanitize_text_field($_POST['name']),
            'email' => sanitize_email($_POST['email']),
            'message' => sanitize_textarea_field($_POST['message'])
        ]);
        echo "<p> „ ≈—”«· —”«· ﬂ »‰Ã«Õ!</p>";
    }
    ?>
</div>

<?php get_footer(); ?>
