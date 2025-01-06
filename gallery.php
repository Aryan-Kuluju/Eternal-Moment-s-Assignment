<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery - Eternal Moments</title>
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
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
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

        /* Gallery Styling */
        .gallery {
            padding: 3em 2em;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .description {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .gallery-item:hover .description {
            opacity: 1;
        }

    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Eternal Moments Gallery</h1>
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
        </div>
    </header>

    <main class="gallery">
        <!-- Wedding Photographs -->
        <h2>Wedding Photographs</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="img/wedding3.jpg" alt="Wedding Photo">
                <div class="description">Bride & Groom Moments</div>
            </div>
            <div class="gallery-item">
                <img src="img/wedding2.jpeg" alt="Wedding Photo 2">
                <div class="description">Ceremonial Bliss</div>
            </div>
        </div>

        <!-- Wildlife Photographs -->
        <h2>Wildlife Photographs</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="img/wildlife1.jpg" alt="Wildlife Photo 1">
                <div class="description">Nature's Majesty</div>
            </div>
            <div class="gallery-item">
                <img src="img/wildlife4.jpeg" alt="Wildlife Photo 2">
                <div class="description">Untamed Beauty</div>
            </div>
        </div>

        <!-- Event Photographs -->
        <h2>Event Photographs</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="img/events1.jpg" alt="Event Photo 1">
                <div class="description">Grand Celebrations</div>
            </div>
            <div class="gallery-item">
                <img src="img/events3.jpg" alt="Event Photo 2">
                <div class="description">Memorable Moments</div>
            </div>
        </div>
    </main>
</body>
</html>
