<?php
// Replace these variables with your actual database connection details
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a table named 'cart_items', and you want to get the total number of items in the cart
$sql = "SELECT COUNT(*) AS cartItemCount FROM cart_items";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $cartItemCount = $row['cartItemCount'];
} else {
    $cartItemCount = 0;
}

$conn->close();

// Return the cart item count as plain text (not JSON) because we will parse it as an integer on the client-side
echo $cartItemCount;
?>
