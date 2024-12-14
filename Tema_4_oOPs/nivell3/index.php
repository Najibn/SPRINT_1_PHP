<?php 
require_once 'film.php';
require_once 'cinema.php';
require_once 'cinemaManager.php';


$cinema1 = new Cinema("view+", "sabadell");
$cinema2 = new Cinema("warner bros","barcelona");

$cinema1->addFilm(new Films("wakanda", 120, "africans"));            
$cinema1->addFilm(new Films("the wolf of wall street", 152, "martin scorsese"));
$cinema1->addFilm(new Films("The Godfather", 152, "Francis Ford Coppola"));


$cinema2->addFilm(new Films(" E.T. the Extra-Terrestrial", 148, "steven spielberg"));
$cinema2->addFilm(new Films("Saving Private Ryan", 162, "steven spielberg"));
$cinema2->addFilm(new Films("Bumblebee", 154, "steven spielberg"));


$management = new CineManagement();
$management->addCinema($cinema1);
$management->addCinema($cinema2);


echo "Films in Cinema 1: <br>";
$cinema1->displayFilm();

echo "Films in Cinema 2: <br>";
$cinema2->displayFilm();



$management->displayLongestFilms();

$director = "steven spielberg";
$filmsByDirector = CineManagement::searchFilmsByDirector($management->getCinemas(), $director);

echo "Films by $director: <br>";
foreach ($filmsByDirector as $filmName) {
    echo $filmName . "<br>";
}




?>