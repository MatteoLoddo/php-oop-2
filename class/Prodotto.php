<?php

class Prodotto{
  private $nome;
  private $marca;
  private $peso;
  private $animale;
  private $prezzo;
  public $sconto;

  /**
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   */
  public function setNome($nome): self
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of marca
   */
  public function getMarca()
  {
    return $this->marca;
  }

  /**
   * Set the value of marca
   */
  public function setMarca($marca): self
  {
    $this->marca = $marca;

    return $this;
  }

  /**
   * Get the value of peso
   */
  public function getPeso()
  {
    return $this->peso;
  }

  /**
   * Set the value of peso
   */
  public function setPeso($peso): self
  {
    $this->peso = $peso;

    return $this;
  }

  /**
   * Get the value of animale
   */
  public function getAnimale()
  {
    return $this->animale;
  }

  /**
   * Set the value of animale
   */
  public function setAnimale($animale): self
  {
    $this->animale = $animale;

    return $this;
  }

  /**
   * Get the value of prezzo
   */
  public function getPrezzo()
  {
    return $this->prezzo;
  }

  /**
   * Set the value of prezzo
   */
  public function setPrezzo($prezzo): self
  {
    $this->prezzo = $prezzo;

    return $this;
  }

  /**
   * Get the value of sconto
   */
  public function getSconto()
  {
    return $this->sconto;
  }

  /**
   * Set the value of sconto
   */
  public function setSconto($sconto): self
  {
    $this->sconto = $sconto;

    return $this;
  }
}



?>