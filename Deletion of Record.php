<?php
// Deleting a client from the Clients table
require 'dbconfig.php'; // Include the database configuration file

// Prepare the SQL statement
$sql = "DELETE FROM Clients WHERE client_id = :client_id";
$stmt = $pdo->prepare($sql);

// Execute the statement with data
$stmt->execute(['client_id' => 2]);

echo "Client deleted successfully!";
?>
