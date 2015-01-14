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
        <title><?php echo getShortcode('title')." - Login"; ?></title>
        <link rel="stylesheet" type="text/css" href="./includes/css/login_style.css">
    </head>
    <body>
        <div id='login'>
            <h2><?php echo getShortcode('title')." - Login"; ?></h2>
        <form class='login_box' action='login.php' method='post'>
            <p class='login_username-box'><input type="text" name="username" placeholder='Benutzername' /></p>
            <p class='login_password-box'> <input type="password" name="password" placeholder="Kennwort" /></p>
            <p><input type="submit" value="Anmelden"/></p>
</form>
<?php 
if (file_exists('./setup/index.php')) {
    $msgtype = "notice";
    $msgreason = "setupfolder";
    echo "<div class='login_msgbox'>";
    displayMessage($msgtype,$msgreason);
    echo "</div>";
} else {
    if (isset($_GET['message_type']) && isset($_GET['message_reason'])) {
        $type = $_GET['message_type'];
        $reason = $_GET['message_reason'];
        echo "<div class='login_msgbox'>";
        displayMessage($type,$reason);
        echo "</div>";
    }
}

?></div>
<div id="footer">
    <p>Copyright &copy; <?php echo date("Y"); ?> by <a href="www.pierewoehl.de">Piere W&ouml;hl</a> und <a href="mailto:manuel.lampe@hotmail.de">Manuel Lampe</a> Projektseite <a href="http://www.screenmediacast.net/projekte/?p=56">www.screenmediacast.net</a></p>
</div>
