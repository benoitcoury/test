<?php
$file = fopen("todolist.csv", "a+"); // Ouvrir le fichier CSV

$line = fgetcsv($file); // Récupère une ligne de CSV sous la forme d'un tableau
var_dump($line);

$line = fgetcsv($file); // Récupère une ligne de CSV sous la forme d'un tableau
var_dump($line);

$tasks = [];

while(true) {
    $task = fgetcsv($file);
    if ($task == false) {
        break;}
    }

include("index.phtml");

?>