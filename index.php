<!-- 
Create un file index.php in cui:

è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 -->

<?php
require __DIR__ . '/db.php';
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

        <div class="filter_genre">
            <form action="http://localhost/PHP/php-oop-1/" method="get">

                <select class="ms-4" name="genre" id="genre">
                    <option value="">All genres</option>
                    <option value="Action">Action</option>
                    <option value="Adventures">Adventures</option>
                </select>

                <button class="btn btn-dark" type="submit">Genre</button>

            </form>
        </div>
    </header>

    <main class="p-4-">
        <div class="container">
            <h1>Movies:</h1>
            <div class="row row-cols-4 g-3">
                <?php foreach ($filtered_movies as $movie) : ?>
                    <div class="col">
                        <div class="card text-center bg-dark text-white dim_card">
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