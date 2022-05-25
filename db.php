<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $linguage;
    public $poster;

    function __construct(String $title, String $genre, String $year, String $linguage, String $poster)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->linguage = $linguage;
        $this->poster = $poster;
    }
}

$spiderman = new Movie('Spiderman no way Home', 'Action', '2022', 'it', 'https://mr.comingsoon.it/imgdb/locandine/big/59121.jpg');
$doctor_strange = new Movie('Doctor Strange', 'Adventure', '2016', 'it', 'https://m.media-amazon.com/images/I/81Zlc0suPCL._SY550_.jpg');
$avengers_endgame = new Movie('Avengers: Endgame', 'Action', '2019', 'en', 'https://writinguntilragnarokhome.files.wordpress.com/2021/01/avengers-endgame-review.jpg?w=1280');
$iron_man_3 = new Movie('Iron Man 3', 'Action', '2013', 'fr', 'https://m.media-amazon.com/images/M/MV5BMjE5MzcyNjk1M15BMl5BanBnXkFtZTcwMjQ4MjcxOQ@@._V1_.jpg');
$black_panther = new Movie('Black Panther', 'Adventure', '2018', 'it', 'https://cdn.shopify.com/s/files/1/2103/4063/products/BlackPanther_poster_06b76e17-9825-4789-8859-7d1dccf53b4a_1024x1024.jpg?v=1519668121');
$thor_ragnarock = new Movie('Thor: Ragnarok', 'Action', '2017', 'en', 'https://images-na.ssl-images-amazon.com/images/I/914fedeGZRL.jpg');
$capitan_america = new Movie('Captain America: The Winter Soldier', 'Action', '2014', 'it', 'https://www.cinemascomics.com/wp-content/uploads/2014/01/Poster-Capit%C3%A1n-Am%C3%A9rica-El-Soldado-de-invierno.jpg');
$black_window = new Movie('Black Widow', 'Adventure', '2016', 'it', 'https://lumiere-a.akamaihd.net/v1/images/image_b97b56f3.jpeg?region=0%2C0%2C540%2C810');

$movies = [
    new Movie('Spiderman no way Home', 'Action', '2022', 'ita', 'https://mr.comingsoon.it/imgdb/locandine/big/59121.jpg'),
    new Movie('Doctor Strange', 'Action', '2016', 'ita', 'https://m.media-amazon.com/images/I/81Zlc0suPCL._SY550_.jpg'),
    new Movie('Avengers: Endgame', 'Action', '2019', 'en', 'https://writinguntilragnarokhome.files.wordpress.com/2021/01/avengers-endgame-review.jpg?w=1280'),
    new Movie('Iron Man 3', 'Action', '2013', 'fr', 'https://m.media-amazon.com/images/M/MV5BMjE5MzcyNjk1M15BMl5BanBnXkFtZTcwMjQ4MjcxOQ@@._V1_.jpg'),
    new Movie('Black Panther', 'Adventure', '2018', 'it', 'https://cdn.shopify.com/s/files/1/2103/4063/products/BlackPanther_poster_06b76e17-9825-4789-8859-7d1dccf53b4a_1024x1024.jpg?v=1519668121'),
    new Movie('Thor: Ragnarok', 'Action', '2017', 'en', 'https://images-na.ssl-images-amazon.com/images/I/914fedeGZRL.jpg'),
    new Movie('Captain America: The Winter Soldier', 'Action', '2014', 'it', 'https://www.cinemascomics.com/wp-content/uploads/2014/01/Poster-Capit%C3%A1n-Am%C3%A9rica-El-Soldado-de-invierno.jpg'),
    new Movie('Black Widow', 'Adventure', '2016', 'it', 'https://lumiere-a.akamaihd.net/v1/images/image_b97b56f3.jpeg?region=0%2C0%2C540%2C810'),
];

//var_dump($movies);

$genre = $_GET['genre'];
var_dump($genre);

function FilterGenre($data)
{
    if (!isset($_GET['genre']) || $_GET['genre'] == '') {
        //var_dump('return all genre');

        $filtered_movies = $data;
    } else{
        //var_dump('return filtered genre');

        $filtered_movies = array_filter($data, function ($element){
            //var_dump($element['genre'] == $_GET['genre']);
            return $element->genre == $_GET['genre'];
        });
    }
    return $filtered_movies;
};

 $filtered_movies = FilterGenre($movies);
 var_dump($filtered_movies);

