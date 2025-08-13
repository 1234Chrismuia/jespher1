<?php
// contact.php - Contact form page
$msg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // Here you would typically send email or store in DB
    $msg = "Thank you, $name! We have received your message.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us | TechNova</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <section class="page-section">
        <div class="container">
            <h1>Contact Us</h1>
            <?php if ($msg) echo "<p class='success'>$msg</p>"; ?>
            <form method="POST" action="contact.php" class="contact-form">
                <label>Name:</label>
                <input type="text" name="name" required>
                <label>Email:</label>
                <input type="email" name="email" required>
                <label>Message:</label>
                <textarea name="message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
    <?php include 'partials/footer.php'; ?>
    <script src="assets/scripts.js"></script>
</body>
</html>