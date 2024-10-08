<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "dbname";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO customers (name, email, address) VALUES (:name, :email, :address)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);

    $name = "John Doe";
    $email = "john.doe@example.com";
    $address = "123 Main St";
    $stmt->execute();

    echo "New customer record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
