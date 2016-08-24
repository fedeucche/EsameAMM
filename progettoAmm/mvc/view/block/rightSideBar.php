
<div id='sidebarRight' class='sidebar'>
    <a href='master.php?page=Login' class="button">Login</a>
    <a href='master.php?page=Registration' class="button">Register</a>
    <form method="post" class='formLogout'>
        <input type="submit" name='logout' value="Logout" class="buttonFixed">
    </form>


<?php
    if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
?>
<div id="loggedLabel">
    <p>Logged in as 
<?php
        echo $_SESSION["username"]
                .'</p>'
                .'</div>';
    } else {
?>
<div id="loggedLabel">
    <p>You're not logged in</p>
</div>
<?php
    }
?>

    
</div>