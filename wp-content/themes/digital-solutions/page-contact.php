
<?php
/**
 * Template Name: صفحة اتصل بنا
 */

get_header(); ?>

<div class="container">
    <h2><?php _e('اتصل بنا', 'digital-solutions'); ?></h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_form'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        if (!empty($name) && !empty($email) && !empty($message)) {
            $to = get_option('admin_email'); // يرسل الرسالة إلى بريد مدير الموقع
            $subject = "رسالة جديدة من $name";
            $headers = "From: $email";

            $email_body = "الاسم: $name\n";
            $email_body .= "البريد الإلكتروني: $email\n";
            $email_body .= "الرسالة:\n$message\n";

            if (wp_mail($to, $subject, $email_body, $headers)) {
                echo '<p style="color: green;">تم إرسال الرسالة بنجاح!</p>';
            } else {
                echo '<p style="color: red;">حدث خطأ أثناء الإرسال. حاول مرة أخرى.</p>';
            }
        } else {
            echo '<p style="color: red;">يرجى ملء جميع الحقول.</p>';
        }
    }
    ?>

    <form method="POST">
        <label><?php _e('الاسم:', 'digital-solutions'); ?></label>
        <input type="text" name="name" required>
        
        <label><?php _e('البريد الإلكتروني:', 'digital-solutions'); ?></label>
        <input type="email" name="email" required>
        
        <label><?php _e('الرسالة:', 'digital-solutions'); ?></label>
        <textarea name="message" required></textarea>
        
        <input type="hidden" name="contact_form" value="1">
        <input type="submit" class="btn" value="<?php _e('إرسال', 'digital-solutions'); ?>">
    </form>
</div>

<?php get_footer(); ?>
