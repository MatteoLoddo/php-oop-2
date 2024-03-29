<?php
require_once __DIR__ . "/Prodotto.php";

class Alimento extends Prodotto
{
  private $scadenza;


  public function __construct($_nome, $_prezzo , $_scadenza)
  {

    parent::__construct($_nome , $_prezzo);

    $this->setScadenza($_scadenza);
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
}

?>