<?php

//Gestione del Login
//Ricevo una REQUEST dal form
if (isset($_REQUEST["login"]) &&
        isset($_REQUEST["username"]) &&
        isset($_REQUEST["password"])) {
    echo 'Trying to login<br>';
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];    
    //Provo a connettermi al db
    $connection = mysqli_connect("localhost", "root", "davide", "amm15_ucchesuFederico") or die("Could not connect");
    // verifico la presenza di errori
    if (mysqli_connect_errno() != 0) {
        // gestione errore
        $idErrore = $mysqli->connect_errno;
        $msg = $mysqli->connect_error;
        error_log("Errore nella connessione al server $idErrore : $msg", 0);
        echo "Errore nella connessione $msg<br>";
    } else {
        // Connessione andata a buon fine
        $query = mysqli_query($connection, 'SELECT * FROM users WHERE username="' . $username . '" AND password="' . $password . '"');

        $numRows = mysqli_num_rows($query);
        if ($numRows == 1) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION["username"] = $username;
            $_SESSION["loggedIn"] = true;
            echo 'Logged as ' . $username.'<br>';
            header("Location:master.php?page=Descrizione");
            
        } else {
            echo 'Username or Password incorrect!<br>';
        }
    }
    mysqli_close($connection);
}

if(isset($_REQUEST["logout"])){
    logout();
    header("Location:master.php?page=Descrizione");
}

if(isset($_REQUEST["register"])){
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];    
    //Provo a connettermi al db
    $connection = mysqli_connect("localhost", "root", "davide", "amm15_ucchesuFederico") or die("Could not connect");
    // verifico la presenza di errori
    if (mysqli_connect_errno() != 0) {
        // gestione errore
        $idErrore = $mysqli->connect_errno;
        $msg = $mysqli->connect_error;
        error_log("Errore nella connessione al server $idErrore : $msg", 0);
        echo "Errore nella connessione $msg<br>";
    } else {
        // Connessione andata a buon fine
        // 1 Check username
        if(checkUsername($username, $connection)){
            //Registra nuovo utente
            registerNewUser($username, $password, $connection);
        }
        else {
            echo 'Username non disponibile.<br>';
            
        }
    }
    mysqli_close($connection);
}

function logout() {
    echo 'Trying to logout<br>';
    $_SESSION = array();
    if (session_id() != "" ||
            isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 2592000, '/');
    }
    session_destroy();
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

function registerNewUser($user, $psw, $dbCon){
    $sqlCommand = "insert into users values (null,'".$user."','".$psw."')";
    $esito = mysqli_query($dbCon, $sqlCommand);
    if($esito){
        echo 'Utente registrato con successo<br>';
    }
    else {
        'Errore nella registrazione<br>';
    }
}
?>