<?php
require_once '../controller/login.php';

require_once 'block/head.php';
require_once 'block/leftSideBar.php';
require_once 'block/rightSideBar.php';


?>

<div>
    
<?php
if (isset($_REQUEST["addBook"])) {
    //Provo a connettermi al db
    
    $connection = mysqli_connect(Settings::$db_host,
                                Settings::$db_user,
                                Settings::$db_password,
                                Settings::$db_name)
                  or die("Could not connect");
    // verifico la presenza di errori
    if (mysqli_connect_errno() != 0) {
        // gestione errore
        $idErrore = $mysqli->connect_errno;
        $msg = $mysqli->connect_error;
        error_log("Errore nella connessione al server $idErrore : $msg", 0);
        echo "Errore nella connessione $msg<br>";
    } else {
        $title = $_REQUEST["title"];
        $price = $_REQUEST["price"];
        addBook($connection,$title,$price);
    }
    mysqli_close($connection);
}

function addBook($dbCon,$title,$price){
    $sqlCommand = "INSERT INTO books VALUES ('".$title."','".$price."')";
    $esito = mysqli_query($dbCon, $sqlCommand);
    if($esito){
        echo 'Libro aggiunto con successo<br>';
    }
    else {
        'Errore nel caricamento<br>';
    }
}

// Dynamic pages controller

if (isset($_GET["page"])) {
    $p = $_GET["page"];
    $page = "content" . $p . ".php";
    if (file_exists($page)) {
        include "$page";
    } else {
        echo 'Error! Missing file.';
    }
} else {
    include "contentHomepage.php";
}
?>

</div>

</head>
</html>