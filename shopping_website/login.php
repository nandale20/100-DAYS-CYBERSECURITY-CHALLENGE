<?php
// 1. Get the login data from the form
$user_email = $_REQUEST["email"];
$user_password = $_REQUEST["password"];

// 2. Connect to the database
$z = mysqli_connect("localhost", "root", "", "nandakart");

// 3. The Query: Search for a user with matching email AND password
$query = "SELECT * FROM users WHERE email = '$user_email' AND password = '$user_password'";

// 4. Execute the query
$result = mysqli_query($z, $query);

// 5. Check if the user exists
if (mysqli_num_rows($result) > 0) {
    // SUCCESS: User found
    echo "<script>
            alert('Login Successful! Welcome to NandaKart.');
            window.location.href='index.html'; 
          </script>";
} else {
    // FAILURE: No match found
    echo "<script>
            alert('Invalid Email or Password. Please try again.');
            window.location.href='login.html';
          </script>";
}
?>