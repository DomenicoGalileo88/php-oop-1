<!-- 
Create un file index.php in cui:

è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php
/* definire una classe ‘Movie’ */
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

//var_dump($spiderman, $doctor_strange);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Movie oop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="d-flex justify-content-center p-3 bg-primary">
        <div class="logo">
            <img src="https://www.dlf.pt/dfpng/middlepng/414-4146868_avengers-png-logo-logo-avengers-png-hd-transparent.png" alt="">
        </div>
    </header>

    <main class="p-4">
        <div class="container">
            <h1>Movies:</h1>
            <div class="row row-cols-4 g-3">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card text-center bg-dark text-white">
                            <img class="img-fluid" src="<?php echo $movie->poster ?>" alt="">

                            <h5 class="pt-2">
                                <?php echo $movie->title ?>
                                </h4>

                                <p>
                                    <?php echo $movie->genre ?> <br>
                                    <?php echo $movie->year ?> <br>
                                    <?php echo $movie->linguage ?>
                                </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>


</body>

</html>