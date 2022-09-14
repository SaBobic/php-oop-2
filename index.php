<?php

include_once __DIR__ . '/models/customer/Customer.php';
include_once __DIR__ . '/models/customer/CustomerWithAccount.php';
include_once __DIR__ . '/models/product/Food.php';
include_once __DIR__ . '/models/shopping/CreditCard.php';
include_once __DIR__ . '/models/shopping/Cart.php';

$user = new Customer();

$mastercard = new CreditCard('9345892849238', 25000, '03/27');

$account = new CustomerWithAccount('Michele', 'Rossi', 'michelerossi@gmail.com', '08/09/1996', 'Via Bella 95', 'Via Bella 95', 'Micheletto95', 'passwordpotente', $mastercard);

$monge = new Food('Monge al salmone', 'Monge', 40, 'Cani', 290, 'Croccantini', ['Salmone', 'Riso', 'Polpa di barbabietola'], ['Maggio', 'Giugno', 'Luglio', 'Agosto']);
$eucanuba = new Food('Eucanuba al formaggio', 'Eucanuba', 20, 'Cani', 290, 'Croccantini', ['Salmone', 'Riso', 'Polpa di barbabietola'], ['Maggio', 'Giugno', 'Luglio', 'Agosto']);

$customer = new Customer();

$customer->addToCart($monge);