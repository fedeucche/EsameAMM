
<div id='sidebarLeft' class='sidebar'>
    <a href='master.php?page=Homepage' class="button">Homepage</a>
    <a href='master.php?page=Descrizione' class="button">Descrizione</a>
    <a href='master.php?page=Orario' class="button">Orario</a>

<?php

if (isset($_SESSION["role"])) {
    $role = $_SESSION["role"];
    switch ($role) {
        case 'customer':
            echo "<a href='master.php?page=Cliente' class='button'>Cerca<br>un libro</a>";
            echo "<a href='master.php?page=Cart' class='button'>Carrello</a>";
            break;
        
        case 'owner':
            echo "<a href='master.php?page=Venditore' class='button'>Aggiungi<br>un libro</a>";
            break;

        default:
            break;
    }
}

?>

</div>