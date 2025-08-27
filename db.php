<?php
// Database connection file
$host = 'localhost';
$dbname = 'dbxtg9orzy5ai5';
$user = 'uws1gwyttyg2r';
$pass = 'k1tdlhq4qpsf';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
