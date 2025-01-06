<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Eternal Moments Photography</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Header Styling */
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

        /* Main Section */
        main {
            padding: 3em 5em;
            background-color: #fff;
            margin-top: 2em;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            font-size: 2.4em;
            color: #333;
            margin-bottom: 1.5em;
        }

        main p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 2em;
            line-height: 1.8;
        }

        main .about-section {
            margin-top: 2em;
        }

        main .about-section h3 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        main .about-section p {
            font-size: 1.2em;
            color: #666;
            line-height: 1.7;
            text-align: justify;
        }

        /* Photo Styling */
        .photo {
            text-align: center;
            margin-bottom: 30px;
        }

        .photo img {
            width: 300px;
            border-radius: 15px;
            border: 3px solid #ccc;
        }

        /* Footer / Social Media Icons */
        .social-media-icons {
            text-align: center;
            padding: 15px;
        }

        .social-media-icons a {
            padding-right: 22px;
            text-decoration: none;
            color: rgb(255, 250, 250);
        }

        .social-media-icons a:hover {
            color: #ff6347;
            transition: color 0.3s;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            header nav a {
                font-size: 1.1em;
                margin: 0 10px;
            }

            main h2 {
                font-size: 2.2em;
            }

            main p {
                font-size: 1.1em;
            }

            main .about-section h3 {
                font-size: 1.8em;
            }

            main .about-section p {
                font-size: 1.1em;
            }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2em;
            }

            main h2 {
                font-size: 2em;
            }

            main p {
                font-size: 1.1em;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.8em;
            }

            main h2 {
                font-size: 1.7em;
            }

            main p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body background="img/back.jpg">
    <header>
        <h1>About Us</h1>
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
        <h2>Welcome to Eternal Moments Photography</h2>
        <p>At Eternal Moments, we believe that every moment is a story waiting to be told. We are a 
            passionate photography team dedicated to capturing the beauty, emotion, and essence of life's most precious moments. 
            Whether it's an intimate travel experience or a grand celebration, we ensure that each photograph is a timeless memory.</p>

        <div class="about-section">
            <h3>Our Mission</h3>
            <p>Our mission is to provide you with the highest quality photography service that truly reflects your individual style and story. 
                We aim to make every moment memorable by capturing it with precision, creativity, and artistry. Our photographers go beyond just taking pictures they create images that tell a unique, emotional, and meaningful story.</p>
        </div>

        <div class="about-section">
            <h3>Our Vision</h3>
            <p>We envision being a leader in the photography industry, known for our commitment to excellence and creativity. Through our work, we strive to inspire people to appreciate and cherish the fleeting moments in life that deserve to be immortalized.</p>
        </div>

        <div class="about-section">
            <h3>Why Choose Us?</h3>
            <p>We offer a personalized photography experience that focuses on your unique needs. With a keen eye for detail and an artistic approach, we make sure your moments are captured in the most beautiful way possible. We work closely with each client to understand their vision, ensuring that their story is beautifully preserved in every shot.</p>
        </div>

        <div class="photo">
            <img src="img/us.jpeg" alt="Photo of Eternal Moments">
        </div>
        <p>Eternal Moments is a freelance photographer based on the North West coast of Scotland. With a profound passion for capturing the natural world,  Eternal Moments photography journey is deeply intertwined with the rugged Scottish landscape, its diverse wildlife, and coastal birds. His work not only reflects the raw beauty of nature but also his dedication to preserving those moments through the lens.</p>
        <p>Whether you're looking to capture the beauty of your special day, create timeless portraits, or explore the magnificent landscapes of Scotland through photography,  Eternal Moments is ready to bring your vision to life. Explore his gallery to see the breadth of his work and feel free to reach out with any inquiries or to discuss your photography needs.</p>

    </main>
</body>
</html>
