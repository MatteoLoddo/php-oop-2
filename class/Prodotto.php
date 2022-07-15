<?php

class Prodotto{
  private $nome;
  private $peso;
  private float $prezzo;


  public function __construct($_nome, $_prezzo)
  {
    $this->setNome($_nome);
    $this->setPrezzo($_prezzo);
    
  }
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



}


?>