<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div id="form">
        <h1 id="heading">Sign up</h1><br>

        <form action="" method="POST" name="form">
    
            <div class="error-message"></div>
                         
            <i class="fa-solid fa-user"></i>
            <input type="text" id="user" name="username" placeholder="Enter Username" required><br><br>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="Password" id="Pass" name="password" placeholder="Create Password" required><br><br>
            <!-- <i class="fa-solid fa-lock"></i> -->
            <!-- <input type="Password" id="cpass" name="cpass" placeholder="Retype Password" required><br><br> -->

            <input type="submit" id="btn" value="SignUp" name="submit"/>
        </form>

    </div>
    <?php

// Include functions.php
include "function.php";

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Call registerUser function to insert user data into the database
    $registration_result = registerUser($username, $email, $password);

    if ($registration_result === true) {
        // Registration successful, redirect to home page or login page
        echo "<script>
                $(document).ready(function() {
                    alert('Registration successful');
                    // window.location.href = 'home_page_url'; // Redirect to home page
                });
              </script>";
        exit();
    } else {
        // Registration failed, display error message
        echo "<script>
                $(document).ready(function() {
                    $('.error-message').html('<div class=\"alert alert-danger\">" . $registration_result . "</div>');
                });
              </script>";
    }
}
?>


</body>
</html>