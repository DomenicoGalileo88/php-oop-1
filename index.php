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

$spiderman = new Movie('Spiderman no way Home', 'Action', '2022', 'ita', 'https://mr.comingsoon.it/imgdb/locandine/big/59121.jpg');
$doctor_strange = new Movie('Doctor Strange', 'action', '2016', 'ita', 'https://m.media-amazon.com/images/I/81Zlc0suPCL._SY550_.jpg');

$movies = [
    new Movie('Spiderman no way Home', 'Action', '2022', 'ita', 'https://mr.comingsoon.it/imgdb/locandine/big/59121.jpg'),
    new Movie('Doctor Strange', 'action', '2016', 'ita', 'https://m.media-amazon.com/images/I/81Zlc0suPCL._SY550_.jpg')
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
</head>

<body>
    <header>
        <div class="logo">
            Movie oop
        </div>
    </header>

    <main>
        <div class="container">
            <h1>Movies:</h1>
            <div class="row row-cols-4">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $movie->poster ?>" alt="">

                            <h4>
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