<?php
// Establish database connection
try {
    $db = new mysqli('localhost', 'root', '', 'event'); // Corrected database name format
    
    // Check for connection error
    if ($db->connect_error) {
        throw new Exception("Connection failed: " . $db->connect_error);
    }
    
    echo "Connected successfully to the database.";
} catch (Exception $e) {
    echo $e->getMessage();
}

