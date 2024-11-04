<?php
// Inserting a new client into the Clients table
require 'dbconfig.php'; // Include the database configuration file

// Prepare the SQL statement
$sql = "INSERT INTO Clients (client_id, name, contact_info, address) VALUES (:client_id, :name, :contact_info, :address)";
$stmt = $pdo->prepare($sql);

// Execute the statement with data
$stmt->execute([
    'client_id' => 2,
    'name' => 'Alice Smith',
    'contact_info' => 'alicesmith@example.com',
    'address' => '123 Main St, Cityville'
]);

echo "New client added successfully!";
?>
