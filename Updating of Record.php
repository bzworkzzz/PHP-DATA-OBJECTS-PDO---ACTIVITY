<?php
// Updating a client's information
require 'dbconfig.php'; // Include the database configuration file

// Prepare the SQL statement
$sql = "UPDATE Clients SET name = :name, contact_info = :contact_info WHERE client_id = :client_id";
$stmt = $pdo->prepare($sql);

// Execute the statement with data
$stmt->execute([
    'name' => 'Alice Johnson',
    'contact_info' => 'alicejohnson@example.com',
    'client_id' => 1
]);

echo "Client updated successfully!";
?>
