<?php

include_once __DIR__ . '/models/User.php';
include_once __DIR__ . '/models/Account.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/PaymentMethod.php';

$user = new User('Carlo', 'Bianchi', 'carlobianchi@gmail.com', '08/09/1973', 'Via Brutta 23', 'Via Brutta 23');

$account = new Account('Michele', 'Rossi', 'michelerossi@gmail.com', '08/09/1996', 'Via Bella 95', 'Via Bella 95', 'Micheletto95', 'passwordpotente', 'Mastercard');

$mastercard = new PaymentMethod(25000, '03/27');

$monge_description = "Le crocchette di Monge Salmone e Riso All Breeds Adult sono un alimento completo per cani adulti di tutte le taglie formulato con un'unica fonte proteica: il salmone. Il cibo secco Monge Superpremium Salmone è stato sviluppato pensando al benessere del tuo amico a quattro zampe, grazie alla presenza di sostanze nutritive di qualità frutto della ricerca Made in Italy. Il tuo cane ha delle sensibilità alimentari e non sai quali crocchette scegliere per garantire il suo benessere? Il cibo secco Monge Adult Salmone non solo rinforza il sistema immunitario del tuo cane ma favorisce anche la salute gastrointestinale. Vivete una vita felice, insieme! Il prodotto è disponibile nel formato da 12 KG. Offri al tuo cane un’ottima salute, benessere nutrizionale e tanto gusto: scegli Monge Salmone e Riso All Breeds Adult!";

$monge_all_breeds = new Food('Monge All Breeds Adult Salmone e Riso', 'Monge', $monge_description, 45.90, 0, 195, 'Cani', 290, 'Croccantini', ['Salmone', 'Riso', 'Polpa di barbabietola'], ['Maggio', 'Giugno', 'Luglio', 'Agosto'], 'Adult', 'Tutte le stazze');

var_dump($mastercard);
echo '<hr>';
$account->buyProduct($mastercard, $monge_all_breeds);
var_dump($mastercard);