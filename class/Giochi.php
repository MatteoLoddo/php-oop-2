<?php
require_once __DIR__ . "/prodotto.php";

class Giochi extends Prodotto{

private $tipo;

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
}
?>