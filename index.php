<?php

class Product
{
  private $name;
  private $type;
  private $category;
  private $description;
  private $price;

  function __construct($name, $type, $category, $description, $price)
  {
    $this->setName($name);
    $this->setType($type);
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

  // metodo per tipologia
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
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
}

// prodotto random per prova stampa in pagina
$products = new Product('palla', 'palla in gomma', 'cani', 'safnjsdngjdfngbjfnb', '20$');
// controllo funzionalità
// var_dump($products);

echo 'Nome: ' . $products->getName() . '<br>';
echo 'Tipologia: ' . $products->getType() . '<br>';
echo 'Categoria: ' . $products->getCategory() . '<br>';
echo 'Descrizione: ' . $products->getDescription() . '<br>';
echo 'Prezzo: ' . $products->getPrice() . '<br>';