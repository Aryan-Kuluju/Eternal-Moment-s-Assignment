<?php
session_start();
include('config.php');

// Handle adding a new member (with category)
if (isset($_POST['add_member'])) {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $category = $_POST['category'];  // New field

    $query = "INSERT INTO members (name, specialization, age, address, phone, description, category) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssissss", $name, $specialization, $age, $address, $phone, $description, $category);

    if ($stmt->execute()) {
        header("Location: members.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Handle editing a member (with category)
if (isset($_POST['update_member'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $category = $_POST['category'];  // New field

    $query = "UPDATE members SET name = ?, specialization = ?, age = ?, address = ?, phone = ?, description = ?, category = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssissssi", $name, $specialization, $age, $address, $phone, $description, $category, $id);

    if ($stmt->execute()) {
        header("Location: members.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Handle deleting a member
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $query = "DELETE FROM members WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: members.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Fetch members
$query = "SELECT * FROM members ORDER BY created_at DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Moments - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: #f9f9f9;
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

        /* Main Portfolio Section */
        .container {
            padding: 3em 2em;
            background-color: #fff;
            margin-top: 2em;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card-body {
            padding: 1.5em;
        }

        .card-title {
            font-size: 1.5em;
            font-weight: bold;
        }

        .card-text {
            font-size: 1.1em;
            margin-bottom: 0.5em;
        }

        .description {
            font-style: italic;
            margin-top: 1em;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Eternal Moments Portfolio</h1>
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

    <!-- Portfolio Section -->
    <div class="container py-5">
        <h1 class="text-center mb-4">Our Photographers & Videographers</h1>
        <div class="row g-4">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>
                                <p class="card-text">Specialization: ' . htmlspecialchars($row['specialization']) . '</p>
                                <p class="card-text">Age: ' . htmlspecialchars($row['age']) . '</p>
                                <p class="card-text">Address: ' . htmlspecialchars($row['address']) . '</p>
                                <p class="card-text">Phone: ' . htmlspecialchars($row['phone']) . '</p>
                                <p class="description">Description: ' . htmlspecialchars($row['description']) . '</p>
                                <p class="category">Category: ' . htmlspecialchars($row['category']) . '</p>  <!-- Display category -->
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "<p>No members found in the portfolio.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
