<?php
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