<?php
/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare
uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once 'classes/Customer.php';
require_once 'classes/CreditCard.php'; 

$customer = new Customer('Marco','Leali',false);
$credit_card = new CreditCard('1234-1234-1234-1234',$customer->getNameComplete(),'02/02/2022','000');
$customer->setCreditCard($credit_card);
var_dump($customer);

?>