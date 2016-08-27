<?php

function checkoutCart($dbCon){
    mysqli_autocommit($dbCon, false);
    
    $cart = unserialize(serialize($_SESSION['cart']));
    
    foreach ($cart as $book) {
        $result = mysqli_query($dbCon, 'SELECT * FROM books WHERE id='.$book->id);
        if($result == FALSE){
            //Il libro NON è più disponibile
            mysqli_rollback($dbCon);
            mysqli_close($dbCon);
            return false;
        }
        
        $resultDelete = mysqli_query($dbCon, "DELETE FROM books WHERE id=".$book->id);
        if($resultDelete == FALSE){
            //Il libro NON è più disponibile o qualcosa è andato storto nell'eliminazione
            mysqli_rollback($dbCon);
            mysqli_close($dbCon);
            return false;
        }
    }
    //tutto ok, confermo la modifica del db
    mysqli_commit($dbCon);
    mysqli_autocommit($dbCon, true);
    return true;
}
?>