
<?php
require_once "class/alimenti.php";
require_once "class/giochi.php";
require_once "class/User.php";
require_once "class/Prodotto.php";
require_once "class/metodoPagamento.php";
require_once "class/CartePagamento.php";




$user = new User("mario", "Rossi");

$prodotti =[
  new Alimento("Pate di Tonno" , 5.95 , "10/05/2023"),
  new Alimento("crocchette" , 15.50 , "10/05/2023" ),
  new Gioco("palla", 5.99 , "Svago" , "Cemento")
];
$user->cart->addCarrello($prodotti[0]);
$user->cart->addCarrello($prodotti[2]);

$metodiDiPagamento = [
  new CartaDiCredito("1243124379812445" ,"20-12-2022" , "mario"),
  new CartaDiCredito("2344631243243124" ,"10-05-2022" , "mario"),
];

$user->metodiPagamento->addMetodPagamento($metodiDiPagamento[0]);
$user->metodiPagamento->addMetodPagamento($metodiDiPagamento[1]);








var_dump($user);

$user->checkout();
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