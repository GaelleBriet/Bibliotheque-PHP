<?php
require('config.php');

$booksStatement = $pdo->prepare('SELECT * FROM Livre');
$booksStatement->execute();
$books = $booksStatement->fetchAll();


$auteursStatement = $pdo->prepare('SELECT * FROM Auteur');
$auteursStatement->execute();
$auteurs = $auteursStatement->fetchAll();
