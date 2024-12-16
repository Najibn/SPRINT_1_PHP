<?php

namespace App\nivell3_tdd;

class  Libro
{
    //var
    private $title;
    private $author;
    private $isbn;
    private Genre $genre;   // = array("Adventures", "Science Fiction", "Tale", "Police Novel", "Paranormal", "Dystopia", "Fantastic");
    private $numOfPages;

    public function __construct($title, $author, $isbn, Genre $genre, $numOfPages)
    {
        $this->title      = $title;
        $this->author     = $author;
        $this->isbn       = $isbn;
        $this->genre      = $genre;
        $this->numOfPages = $numOfPages;
    }

    //getters
    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getNumOfPages(): int
    {
        return $this->numOfPages;
    }

    //setters
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }
    public function setNumOfPages($numOfPages)
    {
        $this->numOfPages = $numOfPages;
    }


    //show details
    public function __toString()
    {
        return "Title: " . $this->title . ",\n  Author: " . $this->author
            . "\n ISBN:  " . $this->isbn  . ",\n  Genre: " . $this->genre
            . "\n Number of pages: " . $this->numOfPages;
    }
}
