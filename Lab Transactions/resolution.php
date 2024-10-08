<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "dbname";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->exec("INSERT INTO customers (name, email, address) 
                 VALUES ('John Doe', 'john.doe@example.com', '123 Main St')");
    $conn->exec("UPDATE accounts 
                 SET balance = balance - 100 
                 WHERE customer_id = LAST_INSERT_ID()");
    $conn->commit();
    echo "Transaction completed successfully";

} catch (Exception $e) {
    $conn->rollBack();
    echo "Transaction failed: " . $e->getMessage();
}
$conn = null;
?>
