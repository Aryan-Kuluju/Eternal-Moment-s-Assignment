<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional photography and videography services to capture your eternal moments.">
    <title>Eternal Moments</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        header {
            background-color: #2a3d66; /* Deep blue background */
            color: #fff;
            padding: 1.5em 2em;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.8em;
            margin-bottom: 0.5em;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        header nav a {
            color: #fff;
            font-size: 1.2em;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #ffcc00; /* Golden hover effect */
        }

        .intro {
            text-align: center;
            padding: 2em;
            background-color: #07bff0;
            color: #fff;
        }

        .intro h2 {
            font-size: 2.5em;
        }

        .intro p {
            font-size: 1.2em;
            margin: 1em 0;
        }

        .cta-button {
            display: inline-block;
            margin-top: 1em;
            padding: 1em 2em;
            font-size: 1.2em;
            color: #07bff0;
            background-color: #fff;
            border: 2px solid #07bff0;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #07bff0;
            color: #fff;
        }

        section {
            padding: 2em;
            margin: 2em 0;
            background-color: #fff;
        }

        section h2 {
            text-align: center;
            font-size: 2.2em;
            margin-bottom: 1em;
        }

        .work-item, .testimonial-item, .service-item, .team-member {
            margin: 1em auto;
            padding: 1em;
            text-align: center;
        }

        .work-item img, .team-member img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 1em;
        }

        .testimonial-item p {
            font-style: italic;
        }

        .testimonial-item h3 {
            margin-top: 1em;
        }

        .service-item h3 {
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }

        .quick-links ul {
            list-style-type: none;
            padding: 0;
        }

        .quick-links ul li {
            margin: 0.5em 0;
        }

        .quick-links ul li a {
            font-size: 1.2em;
            color: #07bff0;
            text-decoration: none;
        }

        .quick-links ul li a:hover {
            color: #ffcc00; /* Hover color change */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            header nav a {
                font-size: 1em;
            }

            .intro h2 {
                font-size: 2em;
            }

            .services h2,
            .featured-works h2,
            .testimonials h2,
            .team h2 {
                font-size: 2em;
            }

            .cta-button {
                font-size: 1em;
                padding: 0.8em 1.5em;
            }

            .work-item, .team-member {
                width: 90%; /* Stacks content on mobile devices */
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Eternal Moments</h1>
        <nav>
            <a href="index.php">Home</a> | 
            <a href="experience.php">Experience</a> |
            <a href="gallery.php">Gallery</a> |
            <a href="portfolio.php">Portfolio</a> |
            <a href="services.php">Services</a> |
            <a href="contact.php">Contact</a> |
            <a href="about.php">About</a> |
            <a href="admin-login.php">Admin</a>
        </nav>
    </header>

    <main>
        <!-- Capture Section -->
        <section class="intro">
            <h2>Capture Your Eternal Moments</h2>
            <p>Every moment is precious, and we believe in turning those fleeting moments into lasting memories. Whether it’s your wedding day, a corporate event, or a family gathering, we offer professional photography and videography services to ensure that your memories are captured with the utmost care and creativity. Let us make your special occasion unforgettable.</p>
            <a href="portfolio.php" class="cta-button">Explore Our Portfolio</a>
        </section>

        <!-- Featured Works Section -->
        <section class="featured-works">
            <h2>Featured Works</h2>
            <div class="work-item">
                <img src="img/events5.jpg" alt="Event Photo 1">
                
                <h3>Corporate Events</h3>
                <p>Professional event photography that tells your brand's story.</p>
            </div>
            <div class="work-item">
                <img src="img/events2.jpg" alt="Event Photo 3">
                
                <h3>Destination Photography</h3>
                <p>Capturing breathtaking landscapes and stunning locations.</p>

            </div>
            <div class="work-item">
                <img src="img/dest.jpg" alt="Event Photo 3">
                <p></p>
                <img src="img/dest1.jpg" alt="Event Photo 3">
                <p></p>
                <img src="img/dest2.jpg" alt="Event Photo 3">
    
                <h3>Wedding Memories</h3>
                <p>Beautiful wedding moments captured with perfection.</p>
            </div>
            <div class="work-item">
                <img src="img/wedding4.jpg" alt="Wedding Photo 3">
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-item">
                <p>"Eternal Moments truly captured the essence of our wedding. The photographers were attentive, and the photos are simply stunning! Every shot told a beautiful story. We are so grateful for their hard work and professionalism."</p>
                <h3>Sarah & John</h3>
            </div>
            <div class="testimonial-item">
                <p>"The team at Eternal Moments provided exceptional service for our corporate event. The videography was top-notch, capturing every important detail with elegance and professionalism. Our brand was presented perfectly!"</p>
                <h3>Mike, CEO</h3>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services">
            <h2>Our Services</h2>
            <div class="service-item">
                <h3>Photography</h3>
                <p>We specialize in capturing moments that matter. From candid shots to posed portraits, our expert photographers will ensure that every memory is documented beautifully. We use the latest equipment and techniques to deliver high-quality images for all events.</p>
            </div>
            <div class="service-item">
                <h3>Videography</h3>
                <p>Let us tell your story through cinematic videography. Our experienced videographers capture every key moment, from intimate close-ups to sweeping wide shots, and produce stunning films that you'll cherish forever.</p>
            </div>
            <div class="service-item">
                <h3>Event Coverage</h3>
                <p>We offer comprehensive event coverage, whether it’s a wedding, corporate gathering, or private celebration. With a meticulous approach, we capture the emotions, excitement, and the finer details of your event to create a lasting memory.</p>
            </div>
        </section>
        <!-- Quick Links Section -->
        <section class="quick-links">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="experience.php">Our Experience</a></li>
                <li><a href="gallery.php">Our Gallery</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </section>
    </main>
</body>
</html>
