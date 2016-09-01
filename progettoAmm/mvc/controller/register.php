<?php
require_once 'login.php';

if(isset($_REQUEST["username"]) && isset($_REQUEST["password"])){
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    //Provo a connettermi al db
    $connection = dbConnect();
    if ($connection){
        // Connessione andata a buon fine
        // Check username
        if(checkUsername($username, $connection)){
            //Registra nuovo utente
            registerNewUser($username, $password, $connection);
//            echo "<script type='text/javascript'>alert('Registrazione completata. Login in corso.');</script>";
            login($username, $password, $connection);
        } else {
//          echo "<script type='text/javascript'>alert('Username non disponibile.');</script>"; 
        }
    }
    mysqli_close($connection);
}

function registerNewUser($user, $psw, $dbCon){
    $sqlCommand = "INSERT INTO users VALUES (null,'".$user."','".$psw."')";
    $esito = mysqli_query($dbCon, $sqlCommand);
    if($esito){
        echo 'Utente registrato con successo<br>';
    }
    else {
        echo 'Errore nella registrazione<br>';
    }
}

function checkUsername($user, $dbCon){
    $query = mysqli_query($dbCon, 'SELECT * FROM users WHERE username="'. $user .'"');
    $numRows = mysqli_num_rows($query);
        if ($numRows == 0) {
            return true;
        }
        else {
            return false;
        }
}

?>