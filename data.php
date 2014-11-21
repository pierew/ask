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
        case "results":
            switch ($action) {
                case "reset":
                    resetResults();
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=results">';
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
        case "question":
            switch ($action) {
                case "new":
                    addQuestion($_POST['newquestion']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=survey-control&message_type=add&message_reason=successfull-question">';
                    break;
                case "change":
                    changeQuestion($_POST['item'],$_POST['changequestion']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=survey-control&message_type=change&message_reason=successfull-question">';
                    break;
                
            }
            break;
        case "user":
            switch ($action) {
                case "new":
                    addUser($_POST['username'],md5($_POST['password']),$_POST['role'],$_POST['group']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=user-control&message_type=add&message_reason=successfull-user">';
                    break;
                case "change":
                    setUsername($_POST['item'],$_POST['username']);
                    setPassword($_POST['item'],md5($_POST['password']));
                    changeGroup($_POST['item'],$_POST['group']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=user-control&message_type=change&message_reason=successfull-user">';
                    break;
                case "generate":
                    autoCreateUser($_POST['amount'],$_POST['group']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=user-control">';
                    break;
            }
            break;
        case "group":
            switch ($action) {
                case "new":
                    addGroup($_POST['newgroup']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=group-control&message_type=add&message_reason=successfull-group">';
                    break;
                case "change":
                    setGroupName($_POST['item'],$_POST['changedgroup']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=group-control&message_type=change&message_reason=successfull-group">';
                    break;
            }
            break;
        case "system":
            switch ($action) {
                case "change":
                    updateSystem('title',$_POST['title']);
                    updateSystem('systemroot',$_POST['systemroot']);
                    echo '<meta http-equiv="refresh" content="0; URL=index.php?view_category=system-control">';
                    break;
            }
            break;
    
    }
}

?>