<?php
require('config.php');
require('Livre.php');

function display_book(array $book)
{
  $book_content = '';

  if ($book['is_enabled']) {
    $book_content = '<h3>' . $book['titre'] . '</h3>';
  }
  return $book_content;
}

function get_book(array $books, int $limit)
{
  $valid_books = [];
  $counter = 0;
  foreach ($books as $book) {
    return $valid_books;
  }
}
