<?php
/**
* Process all DATA
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
include_once './includes/classes/classes.php';
checkLogin();

$type = $_POST['type'];
$option = $_POST['option'];
switch ($type) {
    case "survey":
        switch ($option) {
            case "":
                break:
        }
        break;
    case "user":
        switch ($option) {
            case "":
                break:
        }
        break;
    case "group":
        switch ($option) {
            case "":
                break:
        }
        break;
    case "system":
        switch ($option) {
            case "":
                break:
        }
        break;
    
}

?>