<?php
require_once __DIR__ . "/Prodotto.php";

class Alimenti extends Prodotto
{
  private $scadenza;

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