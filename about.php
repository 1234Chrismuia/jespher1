<?php
// about.php - About Us page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | TechNova</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <section class="page-section">
        <div class="container">
            <h1>About TechNova</h1>
            <p>TechNova is a modern technology solutions provider, dedicated to helping businesses grow and adapt in today’s digital world.</p>
            <h2>Our Mission</h2>
            <p>To empower companies with innovative tech solutions that drive success.</p>
            <h2>Our Team</h2>
            <div class="team-list">
                <div class="team-card">
                    <img src="assets/team1.jpg" alt="CEO">
                    <h3>Jane Doe</h3>
                    <p>CEO</p>
                </div>
                <div class="team-card">
                    <img src="assets/team2.jpg" alt="CTO">
                    <h3>John Smith</h3>
                    <p>CTO</p>
                </div>
                <div class="team-card">
                    <img src="assets/team3.jpg" alt="Lead Designer">
                    <h3>Linda Brown</h3>
                    <p>Lead Designer</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'partials/footer.php'; ?>
    <script src="assets/scripts.js"></script>
</body>
</html>