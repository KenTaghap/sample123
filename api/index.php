<?php
require '../vendor/autoload.php'; // Autoload the MongoDB PHP extension

// Replace these with your MongoDB Atlas connection details
$mongoClient = new MongoDB\Client("mongodb+srv://kenUser:KenPassword@atlascluster.qrj9egp.mongodb.net/Agriculture?retryWrites=true&w=majority/examples");

// Select the database and collection
$database = $mongoClient->examples;
$collection = $database->people;

// Data to be inserted
$data = [
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'age' => 30
];

// Insert data into the collection
$result = $collection->insertOne($data);

// Check if the insertion was successful
if ($result->getInsertedCount() > 0) {
    echo "Data inserted successfully!";
} else {
    echo "Failed to insert data.";
}
?>

