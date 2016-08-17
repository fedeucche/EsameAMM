<?php
if(isset($_POST['login'])){
    require 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysql_query($con, 'SELECT * FROM ACCOUNT WHERE USERNAME="'.$username.'" AND PASSWORD="'.$password.'"');
    if(mysql_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header('Location: ../index.php');
    }
    else{
        echo 'Account is not valid.';
    }
}
?>