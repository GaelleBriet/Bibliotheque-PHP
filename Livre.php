<?php
require('config.php');

class Livre
{
  protected $table;
  protected $db;

  public function createBook($pdo)
  {
    if (
      isset($_POST['titre'])
      and isset($_POST['parution'])
      and isset($_POST['resume'])
      and isset($_POST['type'])
      and isset($_POST['cote'])
      and isset($_POST['auteur'])
      and isset($_POST['nbExemplaire'])
    ) {
      $sql = "INSERT INTO 
      `Livre` (`titre`, `parution`, `resume`, `type`, `cote`, `auteur`, `nbExemplaire`) 
      VALUES (?, ?, ?, ?, ?, ?, ?)";

      $pdo->prepare($sql)->execute([$_POST['titre'], $_POST['parution'], $_POST['resume'], $_POST['type'], $_POST['cote'], $_POST['auteur'], $_POST['nbExemplaire']]);
    }
  }



  public function updateBook($pdo)
  {
    $sql = "SELECT * FROM Livre WHERE id_livre = :id";
    $pdo->prepare($sql)->execute([
      'id' => $_GET['id'],
    ]);
  }



  public function deleteBook()
  {
  }
};
