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
require_once 'classes/Product.php'; 

try
{

    $customer = new Customer('Marco','Leali',true);
    $credit_card = new CreditCard('1234-1234-1234-1234',$customer->getNameComplete(),'04/02/2022','000');
    $customer->setCreditCard($credit_card);
    var_dump($customer);
    
    $cuccia = new Product('Cuccia',25,'Cuccia per cani e gatti 25X25','Accessori',4.1);
    $crocchette = new Product('Crocchette',9.80,'Gustose crocchette per il tuo cane','Alimentazione',4.5);
    $palla = new Product('Palla',11.20,'Pallina in lana per divertire il tuo gatto','Giochi',4.9);
    $shampoo = new Product('Shampoo',7.30,'Uno shampoo delicato per far splendere il pelo del tuo cane','Accessori',4.3);
    
    var_dump($shampoo);
    var_dump($palla);
    var_dump($crocchette);
    var_dump($cuccia);
    
    $response_shampoo = $customer->addProducts($shampoo);
    $response_palla = $customer->addProducts($palla);
    $response_crocchette = $customer->addProducts($crocchette);
    $response_cuccia = $customer->addProducts($cuccia);
    
    
    var_dump($customer);
}
catch(Exception $e) {
    echo 'Error: ' .$e->getMessage();
}
    ?>