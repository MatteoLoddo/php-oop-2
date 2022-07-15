<?php

class CartaDiCredito{
  private $numero;
  private $scadenza;
  private $nomeIntestatario;
  private bool $valida = false;


  public function __construct($_numero, $_scadenza , $_nomeIntestatario)
  {
    $this->setNumero($_numero);
    $this->setScadenza($_scadenza);
    $this->setNomeIntestatario($_nomeIntestatario);
  }

  /**
   * Get the value of numero
   */
  public function getNumero()
  {
    return $this->numero;
  }

  /**
   * Set the value of numero
   */
  public function setNumero($numero): self
  {
    $this->numero = $numero;

    return $this;
  }

  /**
   * Get the value of scadenza
   */
  public function getScadenza()
  {
    return $this->scadenza;
  }

  /**
   * Set the value of scadenza
   */
  public function setScadenza($scadenza): self
  {
    $this->scadenza = $scadenza;

    return $this;
  }

  /**
   * Get the value of nomeIntestatario
   */
  public function getNomeIntestatario()
  {
    return $this->nomeIntestatario;
  }

  /**
   * Set the value of nomeIntestatario
   */
  public function setNomeIntestatario($nomeIntestatario): self
  {
    $this->nomeIntestatario = $nomeIntestatario;

    return $this;
  }

  /**
   * Get the value of valida
   */
  public function isValida(): bool
  {
    return $this->valida;
  }

  /**
   * Set the value of valida
   */
  public function setValida(bool $valida): self
  {
    $this->valida = $valida;

    return $this;
  }
}


?>