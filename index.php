<?php 
// MY CLASS
class Movie {
    public $title;
    public $original_title;
    public $overview;
    public $original_lang;
    public $year;
    public $duration;
    public $genre;

    // CONSTRUCT
    function __construct($_title, $_original_title, $_overview, $_original_lang, $_year, $_duration, $_genre) {
        $this->title = $_title;
        $this->original_title = $_original_title;
        $this->overview = $_overview;
        $this->original_lang = $_original_lang;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }
    // FUNZIONE PER TITOLO
    public function getTitle() {
        // Se title e original title sono uguali stampo solo title 
        // invece se sono diversi li stampo entrambi
        if ($this->title === $this->original_title) {
            echo $this->title;
        } else {
            echo "Titolo: " . $this->title . "<br>";
            echo "Titolo originale: " . $this->original_title;
        }
    }
}

// MY MOVIES ARRAY
$movies = [];

// FILM 1
$star_wars = new Movie(
    "Guerre Stellari",
    "Star Wars",
    "Con l'aiuto di robot e altri alleati, Luke Skywalker deve salvare la principessa ribelle Leila e sconfiggere le forze del male.",
    "EN",
    1977,
    "2h 1m",
    "Fantascienza, Azione"
);
$movies[] = $star_wars;

// FILM 2
$nobody = new Movie(
    "Io sono nessuno",
    "Nobody",
    "Un violento episodio scatena in Hutch Mansell, un marito trascurato e un papà sottovalutato, una rabbia a lungo repressa, facendogli scoprire abilità letali e portando alla luce oscuri segreti.",
    "EN",
    2021,
    "1h 32m",
    "Azione"
);
$movies[] = $nobody;

// FILM 3
$wwz = new Movie(
    "World War Z",
    "World War Z",
    "Quando una pandemia di zombie minaccia di distruggere l'umanità, un ex investigatore americano è costretto a riprendere il lavoro per rintracciare la fonte dell'infezione e impedire il peggio.",
    "Inglese, spagnolo, arabo ebraico",
    2013,
    "1h 56m",
    "Fantazienza, Horror"
);
$movies[] = $wwz;

// var_dump($movies);

?>

<ul>
    <?php foreach($movies as $movie) {?>

        <li>
            <h2><?php echo $movie->getTitle() ?></h2>
            <p><?php echo "Overview: " . $movie->overview ?></p>
            <p><?php echo "Lingua Originale: " .  $movie->original_lang ?></p>
            <p><?php echo "Anno di uscita: " .$movie->year ?></p>
            <p><?php echo "Genere: " . $movie->genre ?></p>
        </li>

    <?php } ?>
</ul>