<?php
// 1. Get the data (Add the missing pieces here)
$a = $_REQUEST["firstName"];
$b = $_REQUEST["lastName"];
$c = $_REQUEST["email"];
$d = $_REQUEST["password"];
$e = $_REQUEST["phone"];
$f = $_REQUEST["city"];
$g = $_REQUEST["addressLine1"]; // New
$h = $_REQUEST["country"];      // New

// 2. Connect
$z = mysqli_connect("localhost", "root", "", "nandakart");

// 3. The Query (You must add the columns and the variables here)
$query = "INSERT INTO users (first_name, last_name, email, password, phone, city, address, country) 
          VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";

// 4. Execute
$result = mysqli_query($z, $query);

// 5. Pop-up logic
if($result){    
    echo "<script>
            alert('Success! Account created with Address.');
            window.location.href='index.html';
          </script>";
} else { 
    // This will tell you if you forgot to add the columns to the database!
    echo "Error: " . mysqli_error($z); 
}
?>