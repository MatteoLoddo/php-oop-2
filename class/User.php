<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Cart.php";
class User {
  private $nome;
  private $cognome;
  public bool $registrato = false;
  public Carrello $cart;


  function __construct($_nome = null,$_cognome = null)

  {

    $this->cart = new Carrello();
    // se vengono passati nome e cognome, lutente e registrato
    // altrimenti no
    if(isset($_nome) && isset($_cognome)){
    $this->setRegistered($_nome,$_cognome);
    }
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
  private function setRegistrato($registrato): self
  {
    $this->registrato = $registrato;

    return $this;
  }

  public function setRegistered($_nome, $_cognome){
    $this->setNome($_nome);
      $this->setCognome($_cognome);
      $this->setRegistrato(true);

  }

}



?>