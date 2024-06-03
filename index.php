<?php 
    require_once __DIR__ . "/class/prodotto.php";
    require_once __DIR__ . "/class/categoria.php";
    require_once __DIR__ . "/class/tipologia.php";
    include_once __DIR__ . "/header.html";

    $prodotti = [
        new Tipologia('Osso giocattolo', 'Osso da masticare per cani', 'https://m.media-amazon.com/images/I/81kM2Pq+KZL._AC_SY450_.jpg', 19, 'Cane', 'Gioco'),
        new Tipologia('Palla giocattolo', 'Palla di gomma per cani', 'https://m.media-amazon.com/images/I/71q5OTSV3LL._AC_SL1500_.jpg', 12, 'Cane', 'Gioco'),
        new Tipologia('Corda giocattolo', 'Corda per cani da mordere', 'https://m.media-amazon.com/images/I/61z1z5gPxdL._AC_SL1500_.jpg', 15, 'Cane', 'Gioco'),
        new Tipologia('Micio Gioco', 'Topolino giocattolo per gatti', 'https://m.media-amazon.com/images/I/71w-2OzbXrL._AC_SL1500_.jpg', 8, 'Gatto', 'Gioco'),
        new Tipologia('Cuccia morbida', 'Cuccia confortevole per cani', 'https://m.media-amazon.com/images/I/81vT0cVSaiL._AC_SL1500_.jpg', 35, 'Cane', 'Cucce'),
        new Tipologia('Cuccia da esterno', 'Cuccia resistente per cani da esterno', 'https://m.media-amazon.com/images/I/81b5Ez2VwSL._AC_SL1500_.jpg', 50, 'Cane', 'Cucce'),
        new Tipologia('Cuccia per gatti', 'Cuccia comoda per gatti', 'https://m.media-amazon.com/images/I/71K5D9Z4G+L._AC_SL1500_.jpg', 30, 'Gatto', 'Cucce'),
        new Tipologia('Pettorina per cani', 'Pettorina regolabile per cani', 'https://m.media-amazon.com/images/I/81jI9k7RVLL._AC_SL1500_.jpg', 25, 'Cane', 'Accessori'),
        new Tipologia('Collare per gatti', 'Collare con campanellino per gatti', 'https://m.media-amazon.com/images/I/81j+qfHDtUL._AC_SL1500_.jpg', 10, 'Gatto', 'Accessori'),
        new Tipologia('Guinzaglio', 'Guinzaglio retrattile per cani', 'https://m.media-amazon.com/images/I/81VjwG3PZ7L._AC_SL1500_.jpg', 20, 'Cane', 'Accessori'),
        new Tipologia('Tiragraffi', 'Tiragraffi per gatti', 'https://m.media-amazon.com/images/I/71d9YcHTsLL._AC_SL1500_.jpg', 45, 'Gatto', 'Accessori'),
        new Tipologia('Cibo secco per cani', 'Cibo secco nutriente per cani', 'https://m.media-amazon.com/images/I/71w-XBpDDQL._AC_SL1500_.jpg', 60, 'Cane', 'Cibo'),
        new Tipologia('Cibo umido per cani', 'Cibo umido delizioso per cani', 'https://m.media-amazon.com/images/I/71ntE8p3ajL._AC_SL1500_.jpg', 55, 'Cane', 'Cibo'),
        new Tipologia('Cibo secco per gatti', 'Cibo secco nutriente per gatti', 'https://m.media-amazon.com/images/I/81D48FhzTYL._AC_SL1500_.jpg', 50, 'Gatto', 'Cibo'),
        new Tipologia('Cibo umido per gatti', 'Cibo umido delizioso per gatti', 'https://m.media-amazon.com/images/I/81sx2U2hI5L._AC_SL1500_.jpg', 45, 'Gatto', 'Cibo'),
        new Tipologia('Spazzola per cani', 'Spazzola per la toelettatura dei cani', 'https://m.media-amazon.com/images/I/81+H9Q0F0oL._AC_SL1500_.jpg', 15, 'Cane', 'Accessori'),
        new Tipologia('Spazzola per gatti', 'Spazzola per la toelettatura dei gatti', 'https://m.media-amazon.com/images/I/81OcYYkwhuL._AC_SL1500_.jpg', 12, 'Gatto', 'Accessori'),
        new Tipologia('Lettiera per gatti', 'Lettiera igienica per gatti', 'https://m.media-amazon.com/images/I/71SZCkIfVLL._AC_SL1500_.jpg', 25, 'Gatto', 'Accessori'),
        new Tipologia('Ciotola per cani', 'Ciotola in acciaio inox per cani', 'https://m.media-amazon.com/images/I/71BWTX8Gm5L._AC_SL1500_.jpg', 10, 'Cane', 'Accessori'),
        new Tipologia('Ciotola per gatti', 'Ciotola in ceramica per gatti', 'https://m.media-amazon.com/images/I/81rcPIwnqxL._AC_SL1500_.jpg', 12, 'Gatto', 'Accessori'),
        new Tipologia('Pasticche vitaminiche per cani', 'Integratori vitaminici per cani', 'https://m.media-amazon.com/images/I/71shb4m+a2L._AC_SL1500_.jpg', 20, 'Cane', 'Cibo'),
        new Tipologia('Pasticche vitaminiche per gatti', 'Integratori vitaminici per gatti', 'https://m.media-amazon.com/images/I/71oPOhDTDBL._AC_SL1500_.jpg', 18, 'Gatto', 'Cibo'),
        new Tipologia('Gioco per cani con suono', 'Gioco sonoro per cani', 'https://m.media-amazon.com/images/I/81o87g3ZZkL._AC_SL1500_.jpg', 14, 'Cane', 'Gioco'),
        new Tipologia('Gioco per gatti con piume', 'Gioco con piume per gatti', 'https://m.media-amazon.com/images/I/81eMTkSNRML._AC_SL1500_.jpg', 10, 'Gatto', 'Gioco')
    ];
    
    foreach ($prodotti as $prodotto) {
        var_dump($prodotto->getNome());
        var_dump($prodotto);
    }
?>