<?php
session_start();
include('config.php');

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.php");
    exit;
}

// Initialize the success/error message
$message = "";

// Handle Add User
if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into admins table with role
    $query = "INSERT INTO admins (username, password, role) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $hashed_password, $role);

    if ($stmt->execute()) {
        $message = "User added successfully!";
    } else {
        $message = "Error: " . $stmt->error;
    }
}

// Handle Delete User
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Prepare statement for user deletion
    $delete_query = "DELETE FROM admins WHERE admin_id = ?";
    $delete_stmt = $conn->prepare($delete_query);
    $delete_stmt->bind_param("i", $delete_id);

    if ($delete_stmt->execute()) {
        $message = "User deleted successfully!";
        header("Location: users.php");  // Refresh current page
        exit;  // Ensure the script stops after the redirect
    } else {
        $message = "Error: " . $delete_stmt->error;
    }
}

// Handle Edit User
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Fetch user details for editing
    $edit_query = "SELECT * FROM admins WHERE admin_id = ?";
    $edit_stmt = $conn->prepare($edit_query);
    $edit_stmt->bind_param("i", $edit_id);
    $edit_stmt->execute();
    $user_result = $edit_stmt->get_result();
    $user = $user_result->fetch_assoc();

    // If form is submitted to update user
    if (isset($_POST['update_user'])) {
        $username = $_POST['username'];
        $role = $_POST['role'];

        // Update query
        $update_query = "UPDATE admins SET username = ?, role = ? WHERE admin_id = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("ssi", $username, $role, $edit_id);

        if ($update_stmt->execute()) {
            $message = "User updated successfully!";
            header("Location: users.php"); // Redirect to same page after update
            exit;
        } else {
            $message = "Error: " . $update_stmt->error;
        }
    }
}

// Fetch users
$query = "SELECT * FROM admins ORDER BY admin_id DESC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your existing styles */
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
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
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
        .form-container input, .form-container select {
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

<!-- Sidebar -->
<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="admin-dashboard.php">Dashboard</a>
    <a href="members.php">Manage Members</a>
    <a href="users.php">Users</a>
    <a href="logout.php">Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="header">
        <h1>Manage Users</h1>
    </div>

    <!-- Success/Failure Message -->
    <?php if ($message): ?>
        <div class="alert alert-info"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>

    <!-- Add New User Form -->
    <div class="form-container">
        <h3>Add New User</h3>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <button type="submit" name="add_user">Add User</button>
        </form>
    </div>

    <!-- Edit User Form (when edit_id is set) -->
    <?php if (isset($_GET['edit_id']) && $user): ?>
        <div class="form-container">
            <h3>Edit User</h3>
            <form method="POST">
                <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
                <select name="role" required>
                    <option value="admin" <?php echo $user['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="user" <?php echo $user['role'] == 'user' ? 'selected' : ''; ?>>User</option>
                </select>
                <button type="submit" name="update_user">Update User</button>
            </form>
        </div>
    <?php endif; ?>

    <!-- Users Table -->
    <div class="table-container">
        <h3>Existing Users</h3>
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                            <td>' . htmlspecialchars($row['username']) . '</td>
                            <td>' . htmlspecialchars($row['role']) . '</td>
                            <td>
                                <a href="users.php?edit_id=' . $row['admin_id'] . '" class="btn">Edit</a>
                                <a href="users.php?delete_id=' . $row['admin_id'] . '" class="btn" onclick="return confirm(\'Are you sure?\')">Delete</a>
                            </td>
                        </tr>';
                    }
                } else {
                    echo "<tr><td colspan='3'>No users found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
