<?php 
    require_once __DIR__ . "/class/prodotto.php";
    require_once __DIR__ . "/class/categoria.php";
    require_once __DIR__ . "/class/tipologia.php";
    include_once __DIR__ . "/header.html";
    
    $prodotti = [
        new Tipologia('Osso giocattolo', 'Osso da masticare per cani', 'https://m.media-amazon.com/images/I/51SuafgIOUL._AC_.jpg', 19, 'Cane', 'Gioco'),
        new Tipologia('Palla giocattolo', 'Palla di gomma per cani', 'https://m.media-amazon.com/images/I/51CGNosQF5L._AC_.jpg', 12, 'Cane', 'Gioco'),
        new Tipologia('Corda giocattolo', 'Corda per cani da mordere', 'https://m.media-amazon.com/images/I/41OhktYgzFL._AC_.jpg', 15, 'Cane', 'Gioco'),
        new Tipologia('Micio Gioco', 'Topolino giocattolo per gatti', 'https://m.media-amazon.com/images/I/71h0pIyUmvL._AC_.jpg', 8, 'Gatto', 'Gioco'),
        new Tipologia('Cuccia morbida', 'Cuccia confortevole per cani', 'https://m.media-amazon.com/images/I/31z4RABvBNL._AC_.jpg', 35, 'Cane', 'Cucce'),
        new Tipologia('Cuccia da esterno', 'Cuccia resistente per cani da esterno', 'https://m.media-amazon.com/images/I/711th08YS-L._AC_SL1500_.jpg', 50, 'Cane', 'Cucce'),
        new Tipologia('Cuccia per gatti', 'Cuccia comoda per gatti', 'https://m.media-amazon.com/images/I/412YnpGJ2yL._AC_SR160,160_.jpg', 30, 'Gatto', 'Cucce'),
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
        new Tipologia('Gioco per gatti con piume', 'Gioco con piume per gatti', 'https://m.media-amazon.com/images/I/81eMTkSNRML._AC_SL1500_.jpg', 10, 'Gatto', 'Gioco'),
        new Tipologia('Tappetino refrigerante', 'Tappetino refrigerante per cani', 'https://m.media-amazon.com/images/I/71u9FrLZApL._AC_SL1500_.jpg', 25, 'Cane', 'Accessori'),
        new Tipologia('Tappetino autoriscaldante', 'Tappetino autoriscaldante per gatti', 'https://m.media-amazon.com/images/I/81hBzE5Oq4L._AC_SL1500_.jpg', 30, 'Gatto', 'Accessori'),
        new Tipologia('Cuccia pieghevole', 'Cuccia pieghevole per cani', 'https://m.media-amazon.com/images/I/81nv59FxbGL._AC_SL1500_.jpg', 40, 'Cane', 'Cucce'),
        new Tipologia('Cuccia per radiatori', 'Cuccia per gatti da montare sui radiatori', 'https://m.media-amazon.com/images/I/81vIoTfw23L._AC_SL1500_.jpg', 35, 'Gatto', 'Cucce'),
        new Tipologia('Zaino per gatti', 'Zaino trasportino per gatti', 'https://m.media-amazon.com/images/I/81A7gBlsKxL._AC_SL1500_.jpg', 45, 'Gatto', 'Accessori'),
        new Tipologia('Gioco interattivo per cani', 'Gioco interattivo per cani', 'https://m.media-amazon.com/images/I/81BGovCHbHL._AC_SL1500_.jpg', 30, 'Cane', 'Gioco'),
        new Tipologia('Gioco interattivo per gatti', 'Gioco interattivo per gatti', 'https://m.media-amazon.com/images/I/81fjXQWxouL._AC_SL1500_.jpg', 25, 'Gatto', 'Gioco'),
        new Tipologia('Snack premio per cani', 'Snack premio per cani', 'https://m.media-amazon.com/images/I/71IFXqD8RvL._AC_SL1500_.jpg', 15, 'Cane', 'Cibo'),
        new Tipologia('Snack premio per gatti', 'Snack premio per gatti', 'https://m.media-amazon.com/images/I/81uW5od7orL._AC_SL1500_.jpg', 12, 'Gatto', 'Cibo'),
        new Tipologia('Tiragraffi con palline', 'Tiragraffi con palline per gatti', 'https://m.media-amazon.com/images/I/91HGQ3NzFLL._AC_SL1500_.jpg', 50, 'Gatto', 'Accessori'),
        new Tipologia('Letto rialzato per cani', 'Letto rialzato per cani', 'https://m.media-amazon.com/images/I/81fYjF4VBkL._AC_SL1500_.jpg', 50, 'Cane', 'Cucce'),
        new Tipologia('Fontana per gatti', 'Fontana per gatti', 'https://m.media-amazon.com/images/I/71LRK8EYzhL._AC_SL1500_.jpg', 35, 'Gatto', 'Accessori'),
        new Tipologia('Fontana per cani', 'Fontana per cani', 'https://m.media-amazon.com/images/I/81kP6BV6JEL._AC_SL1500_.jpg', 40, 'Cane', 'Accessori'),
        new Tipologia('Cuscino ortopedico per cani', 'Cuscino ortopedico per cani', 'https://m.media-amazon.com/images/I/91y5QzS2DPL._AC_SL1500_.jpg', 45, 'Cane', 'Cucce'),
        new Tipologia('Casetta per gatti', 'Casetta per gatti', 'https://m.media-amazon.com/images/I/81-mqylz6OL._AC_SL1500_.jpg', 50, 'Gatto', 'Cucce'),
        new Tipologia('Gioco laser per gatti', 'Gioco laser per gatti', 'https://m.media-amazon.com/images/I/61rX1QCyVLL._AC_SL1500_.jpg', 20, 'Gatto', 'Gioco'),
        new Tipologia('Gioco galleggiante per cani', 'Gioco galleggiante per cani', 'https://m.media-amazon.com/images/I/61uD6pD1W7L._AC_SL1500_.jpg', 15, 'Cane', 'Gioco'),
        new Tipologia('Kit toelettatura per gatti', 'Kit toelettatura per gatti', 'https://m.media-amazon.com/images/I/81Q8lcvT7zL._AC_SL1500_.jpg', 35, 'Gatto', 'Accessori'),
        new Tipologia('Kit toelettatura per cani', 'Kit toelettatura per cani', 'https://m.media-amazon.com/images/I/81UezL4BzlL._AC_SL1500_.jpg', 40, 'Cane', 'Accessori'),
    ];
    ?>
    
      
    

<div class="container text-center">
  <div class="row gy-5">
    <?php foreach ($prodotti as $prodotto) { ?>
    <div class="col-3">
    <div class="card p-2" style="width: 18rem;">
    <img src="<?php echo $prodotto->getImage(); ?>" class="card-img-top" alt="<?php echo $prodotto->getNome(); ?>">
    <div class="card-body">
    <h5 class="card-title"> <?php echo $prodotto->getNome(); ?></h5>
    <p class="card-text"><i class="fa-solid fa-paw"></i> Adatto per <?php echo $prodotto->getCategoria(); if($prodotto->getCategoria()==="Cane"){echo " <i class=\"fa-solid fa-dog\"></i>";}else{echo " <i class=\"fa-solid fa-cat\"></i>";} ?></p>
    <p class="card-text"><i class="fa-solid fa-basket-shopping"></i> Categoria: <?php echo $prodotto->getTipologia(); ?></p>
    <p class="card-text"><i class="fa-solid fa-book-open"></i> Descrizione: <?php echo $prodotto->getDescrizione(); ?></p>
    <p class="card-text"><i class="fa-solid fa-tag"></i> Prezzo: <?php echo $prodotto->getPrezzo(); ?> €</p>
    
  </div>
</div>
  </div>
  <?php  
}
?>

<?php ?>