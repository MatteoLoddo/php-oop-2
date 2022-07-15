<?php
class Carrello
{
  private $prodotti =[];

  public function addCarrello($prodotto){
  $this->prodotti[] = $prodotto;
  }

  public function removeCarrello($prodotti){
    
  }


  /**
   * Get the value of prodotti
   */
  public function getProdotti()
  {
    return $this->prodotti;
  }

}

?>