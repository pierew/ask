<?php
/**
* Put all classes together
*
* Long description for class (if any)...
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
include_once './includes/classes/classes.php';
checkLogin();

if (isset($_GET['message_type']) && isset($_GET['message_reason'])) {
$type = $_GET['message_type'];
$reason = $_GET['message_reason'];
displayMessage($type,$reason);
}

include_once './theme/header.php';
include_once './theme/content.php';
include_once './theme/footer.php';
?>
