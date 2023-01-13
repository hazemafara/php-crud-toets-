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

$sql = "SELECT Id
                ,merk
                ,model
                ,topsnelheid
                ,prijs
          FROM DureAuto
          ORDER BY prijs DESC";

// Maak de sql-query gereed om te worden uitgevoerd op de database
$statement = $conn->prepare($sql);

// Voer de sql-query uit op de database
$statement->execute();

// Zet het resultaat in een array met daarin de objecten (records uit de tabel Persoon)
$result = $statement->fetchAll(PDO::FETCH_OBJ);

// Even checken wat we terugkrijgen
// var_dump($result);

$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                <td>$info->Id</td>
                <td>$info->merk</td>
                <td>$info->model</td>
                <td>$info->topsnelheid</td>
                <td>
                    <a href='delete.php?Id=$info->Id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
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
    <title>RichestPeople</title>
</head>

<body>
    <h3>De vijf rijkste mensen ter wereld</h3>
    <table border='1'>
        <thead>
            <th>id</th>
            <th>Vermogen</th>
            <th>Leeftijd</th>
            <th>Bedrijf</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?= $rows; ?>
        </tbody>
    </table>
</body>

</html>