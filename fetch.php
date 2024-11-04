<?php
// Fetching a specific client by ID
require 'dbconfig.php'; // Include the database configuration file

// Prepare the SQL statement
$sql = "SELECT * FROM Clients WHERE client_id = :client_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['client_id' => 1]); // Bind parameter

// Fetch a single record
$client = $stmt->fetch(PDO::FETCH_ASSOC);

// Print result
echo "<pre>";
print_r($client);
echo "</pre>";
?>
