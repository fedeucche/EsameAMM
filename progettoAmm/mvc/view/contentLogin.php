<?php
require '../controller/login.php';
?>
<div id="formLogin">
    <h1>Login</h1>
    <form method="post">
        <br/>
        <input type="text" id="username" name="username" placeholder="Username">
        <br/>
        <input type="password" id="password" name="password" placeholder="Password">
        <br/>
        <input type="submit" name="login" value="Login">
    </form>
</div>