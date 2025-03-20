<?php
<<<<<<< HEAD
// Configuration file example

// Database configuration
$dbHost = 'localhost';
$dbName = 'example_db';
$dbUser = 'root';
$dbPass = 'password';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

// Application settings
$appName = 'MyApp';
$debugMode = true;

// Example usage
if ($debugMode) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

echo "Welcome to $appName!";
?>
=======
// Display a message
echo "Hello, World!<br>";

// Display the current date and time
date_default_timezone_set("UTC"); // Set timezone
echo "Current Date and Time: " . date("Y-m-d H:i:s");
?>
>>>>>>> 430ed31fc1a65a593a446fa84e1d299fa17a2944
