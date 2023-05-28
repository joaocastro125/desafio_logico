<?php

require './config.php';


$statement = $pdo->prepare('SELECT * FROM Tb_banco');

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {

    foreach ($row as $key => $value) {

        echo " <strong></strong> " . $key . " :<strong>=></strong> " . $value . "<br>";
    }
    echo "=====================================<br>";
}
