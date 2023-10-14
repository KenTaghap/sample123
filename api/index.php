<?php
require 'vendor/autoload.php';

// Replace with your MongoDB Atlas connection string
$connectionString = "mongodb+srv://kenUser:KenPassword@atlascluster.qrj9egp.mongodb.net/examples";

// Create a MongoDB client
$client = new MongoDB\Client($connectionString);

// Select the database and collection
$database = $client->selectDatabase('examples');
$collection = $database->selectCollection('people');

// Data to insert
$data = [
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'age' => 30,
];

// Insert the data into the collection
$result = $collection->insertOne($data);

if ($result->getInsertedCount() == 1) {
    echo "Data inserted successfully!";
} else {
    echo "Failed to insert data.";
}
?>
