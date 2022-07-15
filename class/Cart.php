<?php
require_once __DIR__ ."/Prodotto.php";
class Carrello
{
  private $prodotti =[];

  public function addCarrello($_prodotto){
  $this->prodotti[] = $_prodotto;
  }



  /**
   * Get the value of prodotti
   */
  public function getProdotti()
  {
    return $this->prodotti;
  }

  public function getTotale($_sconto = 0){
    $totale = 0;

    foreach ( $this->prodotti as $prodotto){
      $totale += $prodotto->getPrezzo();
    }return $totale;
  }
}

?>