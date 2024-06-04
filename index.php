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
        new Tipologia('Pettorina per cani', 'Pettorina regolabile per cani', 'https://m.media-amazon.com/images/I/714E1pdaaML._AC_SL1500_.jpg', 25, 'Cane', 'Accessori'),
        new Tipologia('Collare per gatti', 'Collare con campanellino per gatti', 'https://m.media-amazon.com/images/I/51guQSink5L._AC_.jpg', 10, 'Gatto', 'Accessori'),
        new Tipologia('Guinzaglio', 'Guinzaglio retrattile per cani', 'https://m.media-amazon.com/images/I/714AeiLwbtL._AC_SX450_.jpg', 20, 'Cane', 'Accessori'),
        new Tipologia('Tiragraffi', 'Tiragraffi per gatti', 'https://m.media-amazon.com/images/I/515z85Uh+ZL._AC_.jpg', 45, 'Gatto', 'Accessori'),
        new Tipologia('Cibo secco per cani', 'Cibo secco nutriente per cani', 'https://m.media-amazon.com/images/I/41G8vdZnBoL._AC_SR160,160_.jpg', 60, 'Cane', 'Cibo'),
        new Tipologia('Cibo umido per cani', 'Cibo umido delizioso per cani', 'https://m.media-amazon.com/images/I/41HQq-YGfYL._AC_.jpg', 55, 'Cane', 'Cibo'),
        new Tipologia('Cibo secco per gatti', 'Cibo secco nutriente per gatti', 'https://m.media-amazon.com/images/I/51tsfQT+3RL._AC_SR160,160_.jpg', 50, 'Gatto', 'Cibo'),
        new Tipologia('Cibo umido per gatti', 'Cibo umido delizioso per gatti', 'https://m.media-amazon.com/images/I/51rQPnEurNL._AC_SR320,320_.jpg', 45, 'Gatto', 'Cibo'),
        new Tipologia('Spazzola per cani', 'Spazzola per la toelettatura dei cani', 'https://m.media-amazon.com/images/I/71nsgTsR%2BIL.__AC_SY300_SX300_QL70_ML2_.jpg', 15, 'Cane', 'Accessori'),
        new Tipologia('Spazzola per gatti', 'Spazzola per la toelettatura dei gatti', 'https://m.media-amazon.com/images/I/41ug9ukVLXL._AC_SR100,100_.jpg', 12, 'Gatto', 'Accessori'),
        new Tipologia('Lettiera per gatti', 'Lettiera igienica per gatti', 'https://m.media-amazon.com/images/I/31UfgzAC-2L._AC_.jpg', 25, 'Gatto', 'Accessori'),
        new Tipologia('Ciotola per cani', 'Ciotola in acciaio inox per cani', 'https://m.media-amazon.com/images/I/41IEJJtJO0L._AC_SR160,160_.jpg', 10, 'Cane', 'Accessori'),
        new Tipologia('Ciotola per gatti', 'Ciotola in ceramica per gatti', 'https://m.media-amazon.com/images/I/418pfM4dKPL._AC_SR100,100_.jpg', 12, 'Gatto', 'Accessori'),
        new Tipologia('Pasticche vitaminiche per cani', 'Integratori vitaminici per cani', 'https://m.media-amazon.com/images/I/51MS8TV2WNL._AC_SR160,160_.jpg', 20, 'Cane', 'Cibo'),
        new Tipologia('Pasticche vitaminiche per gatti', 'Integratori vitaminici per gatti', 'https://m.media-amazon.com/images/I/61pwwvKs9aL._AC_SL1100_.jpg', 18, 'Gatto', 'Cibo'),
        new Tipologia('Gioco per cani con suono', 'Gioco sonoro per cani', 'https://m.media-amazon.com/images/I/61tJS34k0wL._AC_SY450_.jpg', 14, 'Cane', 'Gioco'),
        new Tipologia('Gioco per gatti con piume', 'Gioco con piume per gatti', 'https://m.media-amazon.com/images/I/41U02zmwctL._AC_SR320,320_.jpg', 10, 'Gatto', 'Gioco'),
    ];
    ?>
    
      
    

<div class="container text-center">
  <div class="row gy-5">
    <?php foreach ($prodotti as $prodotto) { ?>
    <div class="col-3">
    <div class="card p-2" style="width: 18rem;">
    <img src="<?php echo $prodotto->getImage(); ?>" class="card-img-top" alt="<?php echo $prodotto->getNome(); ?>" style="max-height:250px;">
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

<?php 
try {
  $oggettoeccezione = new Tipologia('Gioco percriceti', 'Gioco percriceti', 'https://m.media-amazon.com/images/I/41U02zmwctL._AC_SR320,320_.jpg', 10, 'Criceti', 'Gioco');
} catch (Exception $e) {
  echo "<br>Eccezzione: " . $e->getMessage();
}
?>