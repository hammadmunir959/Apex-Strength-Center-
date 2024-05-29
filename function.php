<?php
// // functions.php
// working propery for registration and redirection to homepage

function registerUser($username, $email, $password) {
    include "connection.php"; // Assuming this file contains your database connection

    // Escape user inputs to prevent SQL injection
    $username = mysqli_real_escape_string($con, $username);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);


     // Check if username already exists
     $query_username = "SELECT * FROM signup WHERE username='$username'";
     $result_username = mysqli_query($con, $query_username);
     if (mysqli_num_rows($result_username) > 0) {
         return "Username already exists"; // Return error message
     } 

     
    // Check if email already exists
    $query_email = "SELECT * FROM signup WHERE email='$email'";
    $result_email = mysqli_query($con, $query_email);
    if (mysqli_num_rows($result_email) > 0) {
        return "Email already exists"; // Return error message
    }

   

    // Insert user data into the database
    $query_insert = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($con, $query_insert)) {
        return true; // Insertion successful
    } else {
        return "Error: " . mysqli_error($con); // Insertion failed
    }
}