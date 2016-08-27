<?php

function dbConnect(){

    $connection = mysqli_connect(Settings::$db_host,
                                Settings::$db_user,
                                Settings::$db_password,
                                Settings::$db_name);
    // verifico la presenza di errori
    if (mysqli_connect_errno() != 0) {
        // gestione errore
//        $idErrore = mysqli_errno($connection);
        $msg = mysqli_connect_error();
//        error_log("Errore nella connessione al server $idErrore : $msg", 0);
        $errorMessage = "Errore nella connessione $msg<br>";
        echo "<script type='text/javascript'>alert('$errorMessage');</script>";
        return false;
    } else {
        return $connection;
    }
}

?>