<?php
$servername = "localhost";
$username = "root";
$password = "";

try {

    $conn = new PDO("mysql:host=$servername;dbname=php-pdo-crud-toets", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "DELETE FROM DureAuto
        WHERE Id = :Id";

// Bereid de query voor om de placeholder te vervangen voor een id-waarde
$statement = $conn->prepare($sql);

// Vervang de placeholder voor een id-waarde
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

// Voer de query uit op de mysql-database
$result = $statement->execute();

if ($result) {
    echo "Het record is succesvol verwijderd";
    header('Refresh:3; url=read.php');
} else {
    echo "Het record is niet verwijderd";
    header('Refresh:3; url=read.php');
}
?>