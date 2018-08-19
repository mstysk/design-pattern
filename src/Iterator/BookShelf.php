<?php
namespace Pattern\Iterator;

class BookShelf implements Aggregate
{
  /** @var Book[] **/
  private $books;

  /** @var int **/
  private $last = 0;

  public function getBookAt(int $index): Book
  {
    return $this->books[$index];
  }

  public function appendBook(Book $book)
  {
    $this->books[$this->last] = $book;
    $this->last++;
  }

  public function getLength()
  {
    return $this->last;
  }

  public function iterator(): Iterator
  {
    return new BookShelfIterator($this);
  }
}
