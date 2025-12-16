<?php
// Get the connection details from Vercel Environment Variables
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');
$port = getenv('DB_PORT');

// Create connection string
$conn_string = "host=" . $servername . " port=" . $port . " dbname=" . $dbname . " user=" . $username . " password=" . $password;

// Create connection
$conn = pg_connect($conn_string);

// Check connection
if (!$conn) {
    error_log("Connection failed: " . pg_last_error());
    die("Connection failed: " . pg_last_error());
}
?>