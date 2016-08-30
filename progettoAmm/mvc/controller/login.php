<?php
include_once 'dbSettings.php';

if (!session_id()) {
            session_start();
            echo 'Session ID: **'.session_id().'**<br>';
}

//Gestione del Login
//Ricevo una REQUEST(POST) dal form
if(isset($_REQUEST["login"]) && isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
    
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];    
    
    //Provo a connettermi al db
    $connection = dbConnect();
    if ($connection){
        // Connessione andata a buon fine
        //LOGIN
        login($username, $password, $connection);
    }
    mysqli_close($connection);
}

if(isset($_REQUEST["logout"])){
    logout();
    header("Location:master.php?page=Homepage");
}

//if(isset($_REQUEST["register"])){
//    $username = $_REQUEST["username"];
//    $password = $_REQUEST["password"];    
//    //Provo a connettermi al db
//    $connection = dbConnect();
//    if ($connection){
//        // Connessione andata a buon fine
//        // Check username
//        if(checkUsername($username, $connection)){
//            //Registra nuovo utente
//            registerNewUser($username, $password, $connection);
//            login($username, $password, $connection);
//        } else {
//            echo 'Username non disponibile.<br>'; 
//        }
//    }
//    mysqli_close($connection);
//}

function login($username, $password, $connection) {
    $query = mysqli_query($connection, 'SELECT * FROM users WHERE username="' . $username . '" AND password="' . $password . '"');
    $numRows = mysqli_num_rows($query);
    if ($numRows == 1) {
        if (!session_id()) {
            session_start();
            echo 'Session ID: **'.session_id().'**<br>';
        }
        $_SESSION["username"] = $username;
        $_SESSION["loggedIn"] = true;
        echo 'Logged as ' . $username . '<br>';
        
        //RUOLO PROPRIETARIO
        if($username == 'admin'){
            echo 'The user is the owner!';
            $_SESSION["role"] = 'owner';
        }
        //RUOLO CLIENTE
        else{
            echo 'The user is a customer!';
            $_SESSION["role"] = 'customer';
        }
        
        header("Location:master.php?page=Homepage");
    }
    else{
        echo 'Username o password errati.<br>';
    }
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

//function checkUsername($user, $dbCon){
//    $query = mysqli_query($dbCon, 'SELECT * FROM users WHERE username="'. $user .'"');
//    $numRows = mysqli_num_rows($query);
//        if ($numRows == 0) {
//            return true;
//        }
//        else {
//            return false;
//        }
//}

function registerNewUser($user, $psw, $dbCon){
    $sqlCommand = "INSERT INTO users VALUES (null,'".$user."','".$psw."')";
    $esito = mysqli_query($dbCon, $sqlCommand);
    if($esito){
        echo 'Utente registrato con successo<br>';
    }
    else {
        'Errore nella registrazione<br>';
    }
}
?>