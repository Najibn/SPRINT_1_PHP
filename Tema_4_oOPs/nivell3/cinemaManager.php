<?php

class CineManagement {
    private $cinemas = [];

    public function addCinema(Cinema $cinema) {
        $this->cinemas[] = $cinema;
    }

    public function getCinemas() {
        return $this->cinemas;
    }

    public static function searchFilmsByDirector($cinemas, $directorName) {
        $uniqueMovies = [];
        foreach ($cinemas as $cinema) {
            foreach ($cinema->getMovies() as $movie) {
                if ($movie->getDirector() === $directorName && !in_array($movie->getName(), $uniqueMovies)) {
                    $uniqueMovies[] = $movie->getName();
                }
            }
        }
        return $uniqueMovies;
    }

    public function getLongestFilm() {
        $longestFilm = null;
        foreach ($this->cinemas as $cinema) {
            foreach ($cinema->getMovies() as $film) {
                if ($longestFilm === null || $film->getDuracion() > $longestFilm->getDuracion()) {
                    $longestFilm = $film;
                }
            }
        }
        return $longestFilm;
    }


    public function displayLongestFilms() {
        foreach ($this->cinemas as $cinema) {
            $longestFilm = $cinema->getLongestFilm();
            echo "<strong>The longest film in " . $cinema->getName() . " is:</strong> " . $longestFilm->getName() . "<br>";
        }
    }
}
?>
