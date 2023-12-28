<?php

$host = getenv("DB_HOST") ?: "localhost";
$user = getenv("DB_USER") ?: "root";
$password = getenv("DB_PASSWORD") ?: "vijai@123";
$database = getenv("DB_DATABASE") ?: "scoe";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    echo "Unable to connect";
}

?>