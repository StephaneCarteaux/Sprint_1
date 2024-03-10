<?php

//Exercici 1
enum TemaRecurs: string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum TipusRecurs: string {
    case Fitxer = 'Fitcher';
    case Article_Web = 'Article web';
    case Video = 'Video';
}

class RecursDidactic {

    public string $nom;
    public TemaRecurs $tema;
    public string $url;
    public TipusRecurs $tipus;

    public function __construct(string $nom, TemaRecurs $tema, string $url, TipusRecurs $tipus) {
        $this->nom = $nom;
        $this->tema = $tema;
        $this->url = $url;
        $this->tipus = $tipus;
    }
}

$recursDidactic1 = new RecursDidactic("Variables en Php", TemaRecurs::PHP, "http://www.aprende_php.org", TipusRecurs::Article_Web);
echo $recursDidactic1->nom .PHP_EOL;
echo $recursDidactic1->tema->value .PHP_EOL;
echo $recursDidactic1->url .PHP_EOL;
echo $recursDidactic1->tipus->value .PHP_EOL;

?>