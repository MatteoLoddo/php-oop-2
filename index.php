
<?php
require_once "class/alimenti.php";
require_once "class/giochi.php";
require_once "class/User.php";
require_once "class/Prodotto.php";

$alimento = new Alimenti();
$gioco = new Giochi();
$user = new User();


$alimento->setNome("Crocchette")->setScadenza(1020222)->setMarca("PetsLover")->setPeso("2kg")->setAnimale("Cane")->setPrezzo("20$");
$gioco->setNome("Palla")->setTipo("divertimento")->setMarca("PetsLover")->setPeso("0.5kg")->setAnimale("Cane")->setPrezzo("5$");
$user->setNome("Mario")->setCognome("Rossi")->setRegistrato(true);

if($user->registrato == true){
  $alimento->sconto = 20;
  $gioco->sconto = 20;
}

var_dump($alimento, $gioco, $user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>