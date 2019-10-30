<?php

$sql = 'INSERT INTO films(namefilm, year, genre, age, country) VALUES (:name, :year, :genre, :age, :country)';

$statement = $connection->prepare($sql);


if((isset($_POST['name'])) && (isset($_POST['year'])) && (isset($_POST['genre'])) && (isset($_POST['age'])) && (isset($_POST['country'])))
{
    $name =    htmlspecialchars($_POST['name']);
    $year =    htmlspecialchars($_POST['year']);
    $genre =   htmlspecialchars($_POST['genre']);
    $age =     htmlspecialchars($_POST['age']);
    $country = htmlspecialchars($_POST['country']);


    $statement->execute([':name'=> $name, 'year' => $year, ':genre'=> $genre, ':age'=> $age , ':country' => $country]);
    header('Location: index.php');
}
