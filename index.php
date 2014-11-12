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
displayError($type,$reason);
include_once './theme/header.php';
include_once './theme/content.php';
include_once './theme/footer.php';
?>
