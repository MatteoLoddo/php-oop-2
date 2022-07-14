<?php

class User{
  private $nome;
  private $cognome;
  public $registrato;

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
   * Get the value of cognome
   */
  public function getCognome()
  {
    return $this->cognome;
  }

  /**
   * Set the value of cognome
   */
  public function setCognome($cognome): self
  {
    $this->cognome = $cognome;

    return $this;
  }

  /**
   * Get the value of registrato
   */
  public function getRegistrato()
  {
    return $this->registrato;
  }

  /**
   * Set the value of registrato
   */
  public function setRegistrato($registrato): self
  {
    $this->registrato = $registrato;

    return $this;
  }
}


?>