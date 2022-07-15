
<?php
require_once "class/alimenti.php";
require_once "class/giochi.php";
require_once "class/User.php";
require_once "class/Prodotto.php";

$alimento = new Alimenti();
$gioco = new Giochi();
$user = new User();


$alimento->setNome("Crocchette")->setPeso(2 . "Kg")->setPrezzo(15 )->setScadenza("10/05/2023");
$gioco->setNome("Palla")->setPeso(0.3 . "Kg")->setPrezzo(5 );
$user->setRegistered("Mario","Rossi");





var_dump($user);
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