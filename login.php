<?php
session_start();
require_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form validation
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        // Retrieve user from the database
        $sql = "SELECT id, username, password FROM users WHERE username='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // Redirect to the homepage (index.php in this case)
                header("Location: pury/index.php");
                exit();
            // } else {
            //     echo "Login failed. Please check your credentials and try again.";
            }
        } else {
            echo "User not found. Please sign up.";
        }
    }
}

// Close the connection after processing the login logic
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  
    <style>
    
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('images/peakpx.jpg');
    background-size: cover; /* This ensures the image covers the entire background */
    background-position: center; /* This centers the image */
}


.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form {
    max-width: 300px;
    margin: 0 auto;
}

h2 {
    text-align: center;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
}

button:hover {
    background-color: blue;
}

button:active {
    background-color: #004680;
}

   </style>



</head>
<body>
    <section>
    <h2>Login</h2>
    <div>
    <form action="login.php" method="post">
        <!-- Your login form fields go here -->
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Log In">
    </form>
    </div>
    <div>
    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
    </div>
    </section>
</body>
</html>
