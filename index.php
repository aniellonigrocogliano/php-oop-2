<?php 
    require_once __DIR__ . "/class/prodotto.php";
    require_once __DIR__ . "/class/categoria.php";

    $osso= new Categoria (
        'Osso giocattolo',
        'Osso da masticare per cani',
        'https://m.media-amazon.com/images/I/81kM2Pq+KZL._AC_SY450_.jpg',
        19,
        'Cane',
    );
var_dump($osso->getNome());
var_dump($osso);
?>