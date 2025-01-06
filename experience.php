<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Moments - Experience & Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #2a3d66;
            color: #fff;
            padding: 1.5em 2em;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.8em;
        }

        header nav a {
            color: #fff;
            font-size: 1.2em;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #ffcc00;
        }

        .container h1, .container h2 {
            text-align: center;
            margin-bottom: 1.5em;
        }

        .gallery {
            text-align: center;
            padding: 2em 0;
        }

        .gallery h3 {
            font-size: 2em;
            margin-bottom: 1em;
        }

        .gallery-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5em;
        }

        .image-item img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Eternal Moments Experience</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="experience.php">Experience</a>
            <a href="gallery.php">Gallery</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
            <a href="admin-login.php">Admin</a>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container py-5">
        <!-- Gallery -->
        <section class="gallery">
            <h3>Some of Our Memorable Moments</h3>
            <div class="gallery-images">
                <div class="image-item">
                    <img src="img/dest2.jpg" alt="Majestic Mountain Landscapes">
                </div>
                <div class="image-item">
                    <img src="img/travel.jpg" alt="Adventurous Travel Photography">
                </div>
                <div class="image-item">
                    <img src="img/view.jpg" alt="Intimate">
                </div>
            </div>
        </section>

        <!-- Experience & Skills -->
        <section class="py-5">
            <h1>Experience & Skills</h1>
            <h2>Selena Everhart - Wedding Photographer</h2>
            <ul>
                <li>5+ years of wedding photography experience.</li>
                <li>Over 100 couples served with natural light and candid shots.</li>
                <li>Proficient in Photoshop and Lightroom.</li>
            </ul>
            <hr>
            <h2>Mariana Voss - Wildlife Photographer</h2>
            <ul>
                <li>10+ years capturing wildlife across continents.</li>
                <li>Published in renowned wildlife magazines.</li>
                <li>Expert in wildlife behavior and high-end equipment.</li>
            </ul>
            <hr>
            <h2>Zara Fitzgerald - Event Photographer</h2>
            <ul>
                <li>7+ years photographing corporate and private events.</li>
                <li>Award-winning work showcased in film festivals.</li>
                <li>Skilled in Premiere Pro, Final Cut Pro, and storytelling.</li>
            </ul>
        </section>
    </div>

</body>
</html>
