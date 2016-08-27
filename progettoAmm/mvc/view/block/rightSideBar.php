
<div id='sidebarRight' class='sidebar'>
    
<?php
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
        //User loggato
?>
<div id="loggedLabel">
    <p>Benvenuto 
<?php
    echo $_SESSION["username"];
?>
    </p>
</div>
<form method="post" class='formLogout'>
    <input type="submit" name='logout' value="Logout" class='buttonFixed'>
</form>
    
<?php
    } else {
        //User non loggato
?>        
<a href='master.php?page=Login' class="button">Accedi</a>
<a href='master.php?page=Registration' class="button">Registrati</a>

<?php
    }
?>

    
</div>