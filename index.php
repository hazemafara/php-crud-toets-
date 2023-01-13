<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=php-pdo-crud-toets", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM DureAuto";

// Maak de sql-query gereed om te worden uitgevoerd op de database
$statement = $pdo->prepare($sql);

// Voer de sql-query uit op de database
$statement->execute();

// Zet het resultaat in een array met daarin de objecten (records uit de tabel Persoon)
$result = $statement->fetchAll(PDO::FETCH_OBJ);

// Even checken wat we terugkrijgen
//    var_dump($result);

$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->id</td>
                <td>$info->merk</td>
                <td>$info->model</td>
                <td>$info->topsnelheid</td>
                <td>$info->prijs</td>
                <td>
                    <a href='delete.php?Id=$info->id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
                <td>
                <a href='update.php?Id=$info->id'>
                    <img src='img/b_edit.png' alt='potlood'>
                </td>
              </tr>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Persoonsgegevens</h3>

    <a href="index.php">
        <input type="button" value="Nieuw record">
    </a>
    <br>
    <br>
    <table border='1'>
        <thead>
            <th>Id</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Haarkleur</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>

</html>