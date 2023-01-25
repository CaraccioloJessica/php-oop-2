<?php

class Product
{
  // variabili
  private $name;
  private $category;
  private $description;
  private $price;

  // costruttori
  public function __construct($name, $category, $description, $price)
  {
    $this->setName($name);
    $this->setCategory($category);
    $this->setDescription($description);
    $this->setPrice($price);
  }

  // metodo per nome
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  // metodo per categoria
  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  // metodo per descrizione
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  // metodo per prezzo
  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getPrice()
  {
    return $this->price;
  }

  // funzione che restituisce una stringa di testo formattata in HTML contenente i dettagli degli oggetti creati nella classe
  public function getHtml()
  {
    return "Nome: " .
      $this->getName() .
      "<br>" .
      "Categoria: " .
      $this->getCategory() .
      "<br>" .
      "Descrizione: " .
      $this->getDescription() .
      "<br>" .
      "Prezzo: " .
      $this->getPrice() .
      "<br><br>";
  }
}

// divisione prodotto per tipologie (definite con classi), utilizzando i metodi della classe padre
class Toy extends Product
{
  public function __construct($name, $category, $description, $price)
  {
    parent::__construct($name, $category, $description, $price);
  }

  public function getHtml()
  {
    return parent::getHtml();
  }
}

class Food extends Product
{
  public function __construct($name, $category, $description, $price)
  {
    parent::__construct($name, $category, $description, $price);
  }

  public function getHtml()
  {
    return parent::getHtml();
  }
}

class Bed extends Product
{
  public function __construct($name, $category, $description, $price)
  {
    parent::__construct($name, $category, $description, $price);
  }

  public function getHtml()
  {
    return parent::getHtml();
  }
}

// creazione di tre oggetti, utilizzando un costruttore e richiamando i dettagli definiti nel padre.
$beds = new Bed(
  "Cuscino ovale",
  "Cani",
  "Realizzato in tessuto resistente ed idrorepellente. Dalla fantasia eccentrica e, al contempo, contemporanea, è disponibile in diverse misure. Scegli quella più adatta al tuo amico a quattro zampe.",
  "9.89 €"
);

$toys = new Toy(
  "KONG Porta Biscotto Goodie Bone",
  "Cani",
  "Vuoi far divertire il tuo cane e allo stesso tempo premiarlo con gustosi snack? Il Goodie Bone di KONG dispone dei Goodie Grippers brevettati che trasformano questo gioco divertente in una giocosa sfida che eroga premi, che può essere riempito con i croccantini preferiti dal tuo amico a quattro zampe.",
  "6.90 €"
);

$foods = new Food(
  "Monge buste tonno e alici gr80",
  "Gatti",
  "Alimento complementare per gatti adulti, cotto al vapore, prodotto in Thailandia, con le tipiche caratteristiche del prodotto di alta qualità a base pesce: alta appetibilità grazie all’uso di ingredienti freschi e buon contenuto nutritivo. Ricco di Omega 3 e di proteine e ha un basso contenuto di grassi.",
  "1.20 €"
);

// controllo funzionalità
// var_dump($products);

// stampa in pagina il risultato
echo $beds->getHtml();
echo $toys->getHtml();
echo $foods->getHtml();