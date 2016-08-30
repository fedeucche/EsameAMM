
<div id='sidebarLeft' class='sidebar'>
    <a href='master.php?page=Homepage' class="button">Homepage</a>
    <a href='master.php?page=Chisiamo' class="button">Chi siamo</a>
    <a href='master.php?page=Orario' class="button">Orario</a>
    <a href='master.php?page=Descrizione' class="button">Descrizione</a>

<?php

if (isset($_SESSION["role"])) {
    $role = $_SESSION["role"];
    switch ($role) {
        case 'customer':
            echo "<a href='master.php?page=Cliente' class='button'>Cerca un libro</a>";
            echo "<a href='master.php?page=Carrello' class='button'>Carrello</a>";
            break;
        
        case 'owner':
            echo "<a href='master.php?page=Venditore' class='button'>Aggiungi un libro</a>";
            break;

        default:
            break;
    }
}

?>

</div>