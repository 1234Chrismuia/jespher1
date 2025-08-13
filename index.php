<?php
// index.php - Home page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechNova - Innovating Your Future</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <section class="hero">
        <div class="container">
            <h1>Innovating Your Future</h1>
            <p>TechNova leverages cutting-edge technology to drive business growth and digital transformation.</p>
            <a href="services.php" class="btn">Explore Services</a>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="feature-list">
                <div class="feature-card">
                    <h3>Expert Team</h3>
                    <p>Our experts bring years of industry experience to every project.</p>
                </div>
                <div class="feature-card">
                    <h3>Modern Solutions</h3>
                    <p>We use the latest technologies to solve real-world problems.</p>
                </div>
                <div class="feature-card">
                    <h3>Customer Focused</h3>
                    <p>Your success is our mission. We tailor solutions to your exact needs.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section class="projects">
        <div class="container">
            <h2>Our Projects</h2>
            <div class="project-list">
                <div class="project-card">
                    <h3>SmartHome App</h3>
                    <p>IoT-enabled home automation platform for seamless living.</p>
                </div>
                <div class="project-card">
                    <h3>HealthTrack</h3>
                    <p>Mobile health solution used by clinics in 4 countries.</p>
                </div>
                <div class="project-card">
                    <h3>CloudERP</h3>
                    <p>Cloud-based ERP system for SMEs to streamline their operations.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-list">
                <div class="testimonial-card">
                    <p>"TechNova transformed our business. Their team is outstanding!"</p>
                    <span>- Michael Strong, CEO, StrongBiz</span>
                </div>
                <div class="testimonial-card">
                    <p>"Professional, reliable, and innovative. Highly recommended."</p>
                    <span>- Grace Lee, Founder, HealthSync</span>
                </div>
                <div class="testimonial-card">
                    <p>"They delivered our project on time and exceeded expectations."</p>
                    <span>- Eric Turner, CTO, Cloudify</span>
                </div>
            </div>
        </div>
    </section>
   <?php include 'footer.php'; ?>
    <script src="scripts.js"></script>
</body>

</html>
