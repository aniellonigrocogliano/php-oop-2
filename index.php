<?php 
    require_once __DIR__ . "/class/prodotto.php";

    $osso= new Prodotto (
        'Osso giocattolo',
        'Osso da masticare per cani',
        'https://m.media-amazon.com/images/I/81kM2Pq+KZL._AC_SY450_.jpg',
        19.99,
    );
var_dump($osso->getNome());
?>