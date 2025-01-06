<?php
session_start();
include('config.php'); // Database connection

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to validate credentials
    $query = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin'] = $username; // Start session for logged-in user
            header("Location: admin-dashboard.php"); // Redirect to dashboard
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
            color: #333;
            background-color: #f0f4f8;
            line-height: 1.6;
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
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        header nav a {
            color: #fff;
            font-size: 1em;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #ffcc00;
        }

        /* Login Container */
        .login-container {
            background: white;
            padding: 3em 2em;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 5em auto;
            text-align: center;
        }

        .login-container h2 {
            font-size: 2em;
            margin-bottom: 1.5em;
            color: #2a3d66;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5em;
        }

        label {
            font-size: 1em;
            color: #333;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.8em;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }

        button {
            padding: 0.8em;
            font-size: 1em;
            background-color: #6c63ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5a54e0;
        }

        .error {
            color: red;
            font-size: 1em;
            margin-top: 0.8em;
        }

        footer {
            margin-top: 2em;
            font-size: 0.9em;
            color: #888;
        }

        footer a {
            color: #6c63ff;
            text-decoration: none;
        }

        footer a:hover {
            color: #5a54e0;
        }
    </style>
</head>

<body>

    <!-- Header with Navigation -->
    <header>
        <h1>Admin Portal</h1>
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

    <!-- Login Form -->
    <div class="login-container">
        <h2>Admin Login</h2>

        <?php if (isset($error)) : ?>
            <div class="error"><?= $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <footer>
            <p><a href="#">Forgot Password?</a></p>
        </footer>
    </div>

</body>

</html>
