<?php

require_once 'dbSettings.php';
require_once 'dbConnection.php';

function checkUsername($user, $dbCon){
    $query = mysqli_query($dbCon, 'SELECT * FROM users WHERE username="'. $user .'"');
    $numRows = mysqli_num_rows($query);
        if ($numRows == 0) {
            // USERNAME DISPONIBILE
            return 1;
        }
        else {
            // USERNAME NON DISPONIBILE
            return 0;
        }
}

if(isset($_REQUEST['username'])){
    $connection = dbConnect();

    echo checkUsername($_REQUEST['username'], $connection);

    mysqli_close($connection);
}



?>