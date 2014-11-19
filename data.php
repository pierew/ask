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

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $action = $_GET['action'];
    $item = $_GET['item'];
    switch ($type) {
        case "question":
            switch ($action) {
                case "delete":
                    deleteQuestion($item);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=survey-control">';
                    break;
            }
            break;
        case "user":
            switch ($action) {
                case "delete":
                    deleteUser($item);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=user-control">';
                    break;
                case "activate":
                    activateUser($item);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=user-control">';
                    break;
                case "deactivate":
                    deactivateUser($item);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=user-control">';
                    break;
            }
            break;
        case "group":
            switch ($action) {
                case "delete":
                    deleteGroup($item);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=group-control">';
                    break;
            }
            break;
    }
}

if (isset($_POST['type'])) {
    $type = $_POST['type'];
    $action = $_POST['action'];
    $item = $_GET['item'];
    switch ($type) {
        case "survey":
            switch ($action) {
                case "":
                    break;
            }
            break;
        case "user":
            switch ($action) {
                case "":
                    break;
            }
            break;
        case "group":
            switch ($action) {
                case "":
                    break;
            }
            break;
        case "system":
            switch ($action) {
                case "":
                    break;
            }
            break;
    
    }
}

?>