<?php
session_start();
include('config.php');

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit;
}

// Handle adding a new member (with category)
if (isset($_POST['add_member'])) {
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    $category = $_POST['category']; // New category field

    $query = "INSERT INTO members (name, specialization, age, address, phone, description, category) VALUES (?, ?, ?, ?, ?, ?, ?)";
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
    $category = $_POST['category']; // New category field

    $query = "UPDATE members SET name = ?, specialization = ?, age = ?, address = ?, phone = ?, description = ?, category = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssissssi", $name, $specialization, $age, $address, $phone, $description, $category, $id);

    if ($stmt->execute()) {
        header("Location: members.php"); // Redirect after updating
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
    <title>Manage Members</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #333;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin: 10px 0;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .main-content {
            margin-left: 270px;
            padding: 20px;
            width: 100%;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            font-size: 24px;
        }
        .form-container {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-container input, .form-container textarea, .form-container select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
        .table-container {
            margin-top: 20px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="admin-dashboard.php">Dashboard</a>
        <a href="members.php">Manage Members</a>
        <a href="portfolio.php">View Portfolio</a>
        <a href="users.php">Users</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="main-content">
        <div class="header"><h1>Manage Members</h1></div>

        <!-- Add or Edit Member Form -->
        <div class="form-container">
            <h3><?php echo isset($_GET['edit_id']) ? 'Edit Member' : 'Add New Member'; ?></h3>
            <form method="post">
                <?php
                if (isset($_GET['edit_id'])) {
                    $id = $_GET['edit_id'];
                    $query = "SELECT * FROM members WHERE id = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $member = $result->fetch_assoc();
                }
                ?>
                <input type="hidden" name="id" value="<?php echo $member['id'] ?? ''; ?>">
                <input type="text" name="name" placeholder="Name" value="<?php echo $member['name'] ?? ''; ?>" required>
                <input type="text" name="specialization" placeholder="Specialization" value="<?php echo $member['specialization'] ?? ''; ?>" required>
                <input type="number" name="age" placeholder="Age" value="<?php echo $member['age'] ?? ''; ?>" required>
                <input type="text" name="address" placeholder="Address" value="<?php echo $member['address'] ?? ''; ?>" required>
                <input type="text" name="phone" placeholder="Phone" value="<?php echo $member['phone'] ?? ''; ?>" required>
                <textarea name="description" placeholder="Description" required><?php echo $member['description'] ?? ''; ?></textarea>
                <select name="category" required>
                    <option value="">Select Category</option>
                    <option value="Wedding Photographer" <?php echo isset($member['category']) && $member['category'] == 'Wedding Photographer' ? 'selected' : ''; ?>>Wedding Photographer</option>
                    <option value="Portrait Photographer" <?php echo isset($member['category']) && $member['category'] == 'Portrait Photographer' ? 'selected' : ''; ?>>Portrait Photographer</option>
                    <option value="Event Photographer" <?php echo isset($member['category']) && $member['category'] == 'Event Photographer' ? 'selected' : ''; ?>>Event Photographer</option>
                    <option value="Commercial Photographer" <?php echo isset($member['category']) && $member['category'] == 'Commercial Photographer' ? 'selected' : ''; ?>>Commercial Photographer</option>
                    <option value="Fashion Photographer" <?php echo isset($member['category']) && $member['category'] == 'Fashion Photographer' ? 'selected' : ''; ?>>Fashion Photographer</option>
                </select>
                <button type="submit" name="<?php echo isset($_GET['edit_id']) ? 'update_member' : 'add_member'; ?>">
                    <?php echo isset($_GET['edit_id']) ? 'Update Member' : 'Add Member'; ?>
                </button>
            </form>
        </div>

        <!-- Members Table -->
        <div class="table-container">
            <h3>Members List</h3>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Specialization</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                <td>' . htmlspecialchars($row['name']) . '</td>
                                <td>' . htmlspecialchars($row['specialization']) . '</td>
                                <td>' . htmlspecialchars($row['age']) . '</td>
                                <td>' . htmlspecialchars($row['address']) . '</td>
                                <td>' . htmlspecialchars($row['phone']) . '</td>
                                <td>' . htmlspecialchars($row['description']) . '</td>
                                <td>' . htmlspecialchars($row['category']) . '</td>
                                <td>
                                    <a href="members.php?edit_id=' . $row['id'] . '" class="btn">Edit</a>
                                    <a href="members.php?delete_id=' . $row['id'] . '" class="btn" onclick="return confirm(\'Are you sure?\')">Delete</a>
                                </td>
                            </tr>';
                        }
                    } else {
                        echo "<tr><td colspan='8'>No members found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
