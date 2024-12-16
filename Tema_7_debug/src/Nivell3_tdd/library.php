<?php

namespace App\nivell3_tdd;

class Library
{
    private  $libros = [];


    public function addBook($title, $author, $isbn, Genre $genre, $numOfPages)
    {
        $book = new Libro($title, $author, $isbn, $genre, $numOfPages);
        $this->libros[] = $book;
    }

    public function getLibros(): array
    {
        return $this->libros;
    }
    

    // Removing book by using its ISBN
    public function removeBook($isbn)
    {
        foreach ($this->libros as $index => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->libros[$index]);
                $this->libros = array_values($this->libros);    // Reindex the array
                return true;        //"book deleted successfully!";
            }
        }
        return false;        //"Error!Book not found";
    }



    public function modifyBook($isbn, $newTitle = null,  $newAuthor = null,  $newGenre = null,  $newPages = null)
    {
        foreach ($this->libros as $book) {
            if ($book->getIsbn() === $isbn) {
                $book->setTitle($newTitle);
                $book->setAuthor($newAuthor);
                $book->setGenre($newGenre);
                $book->setNumOfPages($newPages);
                return true;   //"succesful! Book modified.";
            }
        }
        return false;   //"error! Book not found"; 
    }



   
    public function searchByTitle($title)
    {
        foreach ($this->libros as $book) {
            if ($book->getTitle() === $title) {
                return true;
            }
        }
        return false;
    }




   
    public function searchByAuthor($author)
    {
        //$results = [];
        foreach ($this->libros as $book) {
            if ($book->getAuthor() === $author) {
                return true;
            }
        }
        return false;
    }


   
    public function searchByGenre(Genre $genre)
    {
        foreach ($this->libros as $book) {
            if ($book->getGenre() === $genre) {
                return true;
            }
        }
        return false;
    }


    public function searchByIsbn($isbn)
    {
        foreach ($this->libros as $book) {
            if ($book->getIsbn() === $isbn) {
                return $book;
            }
        }
        return null; 
    }


    public function getLargeBooks()
    {
        $largeBooks = [];

        foreach ($this->libros as $book) {
            if ($book->getNumOfPages() > 500) {

                $largeBooks[] = $book;
            }
        }
        return $largeBooks;
    }
}
?>