<?php

// CART CHECKOUT
if (isset($_GET["cart"]) && $_GET["cart"]=="checkout"){
    $connection = dbConnect();
    if ($connection){
        if(isset($_SESSION['cart'])){
            if (checkoutCart($connection)){
                $messageDone = "Grazie mille. Acquisto completato.";
                echo "<script type='text/javascript'>alert('$messageDone');</script>";
                header("Location: ../view/master.php?cart=empty");
            } else {
                $messageError = "Errore. Alcuni articoli non sono più disponibili.";
                echo "<script type='text/javascript'>alert('$messageError');</script>";
            }
        }
        else {
            echo "<script type='text/javascript'>alert('Il carrello è vuoto.');</script>";
        }
    }
    mysqli_close($connection);
}

// CART EMPTY
if (isset($_GET["cart"]) && $_GET["cart"]=="empty"){
    if (isset($_SESSION['cart'])){
        $_SESSION['cart'] = NULL;
    }
}

?>