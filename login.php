<?php
/**
* Login File to do the login
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
include_once './includes/classes/classes.php';
if(isset($_POST['username']) && isset($_POST['password'])) {
    checkUserLogin($_POST['username'],$_POST['password']);
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action='login.php' method='post'>
            <p>Benutzername: <input type="text" name="username"/></p>
            <p>Passwort: <input type="password" name="password"/></p>
            <p><input type="submit"/></p>
        </form>
    </body>
</html>