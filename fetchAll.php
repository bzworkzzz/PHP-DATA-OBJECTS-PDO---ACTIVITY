<?php
// Fetching all clients from the Clients table
require 'dbconfig.php'; // Include the database configuration file

// Prepare the SQL statement
$sql = "SELECT * FROM Clients";
$stmt = $pdo->prepare($sql);
$stmt->execute(); // Execute the statement

// Fetch all records
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Print results in a readable format
echo "<pre>";
print_r($clients);
echo "</pre>";
?>
