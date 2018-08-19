<?php

use Pattern\Iterator\BookShelf;
use Pattern\Iterator\Book;

class Main
{
  public function __construct()
  {
    $bookshelf = new BookShelf;
    $bookshelf->appendBook(new Book('A'));
    $bookshelf->appendBook(new Book('B'));
    $bookshelf->appendBook(new Book('C'));
    $bookshelf->appendBook(new Book('D'));

    $it = $bookshelf->iterator();

    while($it->hasNext()) {
      echo $it->next()->getName();
    }
  }
}

require __DIR__ . '/../bootstrap.php';

new Main();
