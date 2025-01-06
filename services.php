<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Moments - Services & Price List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body {
            font-family: "Mukta", sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        img {
            border-radius: 8px;
        }

        .card-title {
            text-align: center;
            font-family: "Mukta", sans-serif;
            font-size: xx-large;
            font-weight: bold;
        }

        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: 0.5s;
        }

        /* Header Styling */
        header {
            background-color: #2a3d66;
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
            color: #ffcc00;
        }

        /* Price List Styling */
        .head {
            margin: 30px;
            font-family: "Montserrat", sans-serif;
            font-weight: bolder;
            text-align: center;
        }

        section {
            padding: 3em 5em;
            background-color: #fff;
            margin-top: 2em;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        section h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 1.5em;
        }

        section ul {
            font-size: 1.3em;
            color: #555;
            list-style-type: none;
            line-height: 1.8;
        }

        section ul li {
            padding: 0.5em;
            border-bottom: 1px solid #ddd;
            margin-bottom: 1em;
        }

        section ul li:last-child {
            border-bottom: none;
        }

        .card-body p {
            font-size: 1rem;
            color: #666;
        }

        .list a {
            text-decoration: none;
            color: white;
            margin-left: 70px;
        }

        .list {
            margin-left: 620px;
            display: flex;
            float: right;
        }

        ul a {
            font-family: "Montserrat", sans-serif;
        }

        .list ul li a:hover {
            color: #ff6347;
            transform: translateY(-5px);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            header nav a {
                font-size: 1.1em;
                margin: 0 10px;
            }

            section h1 {
                font-size: 2.2em;
            }

            section ul li {
                font-size: 1.2em;
            }
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2em;
            }

            section h1 {
                font-size: 2em;
            }

            section ul li {
                font-size: 1.1em;
            }
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 1.8em;
            }

            section h1 {
                font-size: 1.7em;
            }

            section ul li {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Services</h1>
        <nav>
            <ul>
                <a href="index.php">Home</a> | 
                <a href="experience.php">Experience</a> | 
                <a href="gallery.php">Gallery</a> | 
                <a href="portfolio.php">Portfolio</a> | 
                <a href="services.php">Services</a> | 
                <a href="contact.php">Contact</a> | 
                <a href="about.php">About</a> | 
                <a href="admin-login.php">Admin</a>
            </ul>
        </nav>
    </header>

    <div class="head">
        <h5 class="card-title">Price List</h5>
    </div>

    <div class="container">
        <div class="col-lg-12 col-md-6 col-sm-2">
            <div class="row">
                <div class="card me-5" style="width: 18rem;">
                    <img src="img/wed.jpg" class="card-img-top" alt="Wedding Photos">
                    <div class="card-body">
                        <h5 class="card-title">Wedding Photos</h5>
                        <p class="card-text">Capture the essence of your special day with stunning wedding photography.</p>
                        <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
                <div class="card me-5" style="width: 18rem;">
                    <img src="img/birth.jpg" class="card-img-top" alt="Birthday Photos">
                    <div class="card-body">
                        <h5 class="card-title">Birthday Photos</h5>
                        <p class="card-text">Celebrate your birthdays with beautifully captured moments.</p>
                        <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
                <div class="card me-5" style="width: 18rem;">
                    <img src="img/coup.jpg" class="card-img-top" alt="Couples Photos">
                    <div class="card-body">
                        <h5 class="card-title">Couples Photos</h5>
                        <p class="card-text">Special moments for couples, captured in beautiful photos.</p>
                        <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
                <div class="card me-4" style="width: 18rem;">
                    <img src="img/model.jpg" class="card-img-top" alt="Model Photos">
                    <div class="card-body">
                        <h5 class="card-title">Model Photos</h5>
                        <p class="card-text">Perfect photoshoots for models looking to make a statement.</p>
                        <a href="#" class="btn btn-primary w-100">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <h1>Our Services</h1>
        <p>At Eternal Moments, we offer a wide range of services to capture your precious moments. Whether it's a wedding, a birthday, or a personal photoshoot, we have a package for every occasion!</p>
        <ul>
            <li>Custom Photography Packages: Tailored photoshoots for every event.</li>
            <li>Pre-Wedding Shoots: Capture the beauty before your big day.</li>
            <li>Post-Wedding Shoots: Relive the moments after the celebration.</li>
            <li>Engagement Sessions: A special moment for newly engaged couples.</li>
            <li>Event Photography: Capturing memories from birthdays, parties, and more.</li>
        </ul>
    </section>

</body>
</html>
