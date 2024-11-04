<?php
// Displaying clients in an HTML table
require 'dbconfig.php'; // Include the database configuration file

// Prepare the SQL statement
$sql = "SELECT * FROM Clients";
$stmt = $pdo->prepare($sql);
$stmt->execute(); // Execute the statement

// Fetch all records
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>
        <tr>
            <th>Client ID</th>
            <th>Name</th>
            <th>Contact Info</th>
            <th>Address</th>
        </tr>";

foreach ($clients as $client) {
    echo "<tr>
            <td>{$client['client_id']}</td>
            <td>{$client['name']}</td>
            <td>{$client['contact_info']}</td>
            <td>{$client['address']}</td>
          </tr>";
}

echo "</table>";
?>
