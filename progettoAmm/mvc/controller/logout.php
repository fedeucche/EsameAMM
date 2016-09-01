<?php

if(isset($_REQUEST["logout"])){
    logout();
    header("Location:master.php?page=Homepage");
}

function logout() {
//    echo 'Trying to logout<br>';
    $_SESSION = array();
    if (session_id() != "" ||
            isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 2592000, '/');
    }
    session_destroy();
}

?>