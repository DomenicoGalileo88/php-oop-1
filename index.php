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


?>