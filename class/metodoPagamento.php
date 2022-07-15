<?php

class MetodoPagamento {

  private $metodiDiPagamento = [];



public function __construct()
{

}


  public function addMetodPagamento($_metodoPagamento){
    $this->metodiDiPagamento[] = $_metodoPagamento;
  }







  /**
   * Get the value of metodiDiPagamento
   */
  public function getMetodiDiPagamento()
  {
    return $this->metodiDiPagamento;
  }

  /**
   * Set the value of metodiDiPagamento
   */
  public function setMetodiDiPagamento($metodiDiPagamento): self
  {
    $this->metodiDiPagamento = $metodiDiPagamento;

    return $this;
  }
}


?>