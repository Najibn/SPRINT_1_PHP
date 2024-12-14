<?php

class Cinema {
    private $name;
    private $town;
    private $movies = [];

    public function __construct($name, $town) {
        $this->name = $name;
        $this->town = $town;
        $this->movies = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getMovies() {
        return $this->movies;
    }

    public function addFilm(Films $film) {
        $this->movies[] = $film;
    }

    public function displayFilm() {
        foreach ($this->movies as $movie) {
            echo "Film: " . $movie->getName() . "<br>" .
                 "Duration: " . $movie->getDuracion() . "<br>" .
                 "Director: " . $movie->getDirector() . "<br><br>";
        }
    }
}
?>
