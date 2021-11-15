<?php
//require __DIR__ 'database_credentials.php';
require __DIR__ . '/database_credentials.php';

// Create connection

$conn = new mysqli("localhost", "root", "", "chefsbank");


// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else{ echo "Connected successfully";}



mysqli_close($conn);

?>
    
