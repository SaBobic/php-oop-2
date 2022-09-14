<?php

include_once __DIR__ . '/models/customer/Customer.php';
include_once __DIR__ . '/models/customer/CustomerWithAccount.php';
include_once __DIR__ . '/models/product/Food.php';
include_once __DIR__ . '/models/shopping/CreditCard.php';
include_once __DIR__ . '/models/shopping/Cart.php';
include_once __DIR__ . '/models/shipping/Address.php';

$user = new Customer();

$mastercard = new CreditCard('9345892849238', 1000, '2022-09-15');

$address = new Address('Via Bella', 'Roma', '59110', 'Italia');

$monge = new Food('Monge al salmone', 'Monge', 40, 'Cani', 'Croccantini', ['Salmone', 'Riso', 'Polpa di barbabietola'], ['Maggio', 'Giugno', 'Luglio', 'Agosto']);

$eucanuba = new Food('Eucanuba al formaggio', 'Eucanuba', 20, 'Cani', 'Croccantini', ['Salmone', 'Riso', 'Polpa di barbabietola'], ['Maggio', 'Giugno', 'Luglio', 'Agosto']);

$customer = new Customer();

$customer_with_account = new CustomerWithAccount('Michele', 'Rossi', 'michelerossi@gmail.com', 'Via Bella 95', $mastercard);

var_dump($mastercard->getBalance());

$customer_with_account->addToCart($monge);

echo '<hr>';

var_dump($customer_with_account->getCart());

echo '<hr>';

$customer_with_account->placeOrder();


var_dump($mastercard->getBalance());