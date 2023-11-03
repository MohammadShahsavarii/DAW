<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    if ($email === "user@example.com" && $password === "password123") {
        echo "Welcome, logged in as $email!";
    } else {
        echo "Invalid email or password.";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $searchTerm = $_GET["search"];
    
    echo "Search results for: $searchTerm";
}
?>
