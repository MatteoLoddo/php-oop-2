<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto
{

private $tipo;
private $materiale;


public function __construct($_nome, $_prezzo, $_tipo , $_materiale)
{
  
  
  parent::__construct($_nome, $_prezzo);
  
  $this->setTipo($_tipo);
  $this->setMateriale($_materiale);
}
/**
 * Get the value of tipo
 */
public function getTipo()
{
return $this->tipo;
}

/**
 * Set the value of tipo
 */
public function setTipo($tipo): self
{
$this->tipo = $tipo;

return $this;
}

/**
 * Get the value of materiale
 */
public function getMateriale()
{
return $this->materiale;
}

/**
 * Set the value of materiale
 */
public function setMateriale($materiale): self
{
$this->materiale = $materiale;

return $this;
}
}
?>