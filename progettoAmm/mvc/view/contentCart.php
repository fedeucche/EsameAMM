<div class="content">

<?php

require_once '../controller/dbTransaction.php';

$connection = dbConnect();
if ($connection){
    if(isset($_GET['id'])){
        //DEVO AGGIUNGERE UN LIBRO AL CARRELLO
        $result = mysqli_query($connection,'SELECT * FROM books WHERE id='.$_GET["id"]);
        $item = mysqli_fetch_object($result);
    
        $book = new Book();
        $book->setId($item->id);
        $book->setTitle($item->title);
        $book->setPrice($item->price);
        
        //Aggiungo il libro selezionato al carrello di sessione
        $_SESSION['cart'][] = $book;
    }
}
mysqli_close($connection);

if(isset($_SESSION['cart'])){
    showCart();
    
    //Aggiungo un pulsante di checkout
    echo "<a onclick='return confirm(\"Confermi?\")' href='master.php?page=Homepage&cart=checkout' class='contentButton'>Checkout<br></a>";
    
    //Aggiungo un pulsante per svuotare il carrello
    echo "<a onclick='return confirm(\"Sicuro di voler svuotare il carrello?\")' href='master.php?page=Homepage&cart=empty' class='contentButton'>Svuota il carrello<br></a>";
}
else{
    echo '<h2>Il carrello è vuoto.</h2>';
}

function showCart(){
    $cart = unserialize(serialize($_SESSION['cart']));
    //Mostro tutto il carrello
    echo '
            <table id="booksTab">
            <tbody>';
    echo '<tr><th>Titolo</th><th>Prezzo</th></tr>';
    foreach ($cart as $b) {
        echo '<tr><td>'. $b->title .'</td><td>'. $b->price .'</td></tr>';
    }
    echo '</tbody></table>';
}

?>
    
    <!--Aggiungo un pulsante per tornare alla lista dei libri-->
    <a href='master.php?page=Cliente' class="contentButton">Torna allo shop<br></a>
</div>