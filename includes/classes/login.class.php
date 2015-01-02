<?php
/**
* Include all functions for Login
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function checkUserLogin($user,$password) {
    
    $encrypted_password = md5($password);
    $result = queryDB("SELECT * FROM ask_user WHERE username = '$user';");
    $status = "0";
    if ($result['password'] == $encrypted_password) {
        if ($result['status'] == "1") {
        $_SESSION['login'] = 'true';
        $_SESSION['username'] = $user;
        $_SESSION['role'] = getRoleName($result['ask_roles_idask_roles']);
        $_SESSION['group'] = getGroupName($result['ask_group_idask_group']);
        echo '<meta http-equiv="refresh" content="0; URL=index.php?message_type=login&message_reason=successfull">';
        } else {
            $_SESSION['login'] = 'false';
            session_destroy();
            echo '<meta http-equiv="refresh" content="0; URL=login.php?message_type=login&message_reason=deactivate">';
        }
    } else {
        $_SESSION['login'] = 'false';
        session_destroy();
        echo '<meta http-equiv="refresh" content="0; URL=login.php?message_type=login&message_reason=password">';
    }
}

function checkLogin() {
    if (!isset($_SESSION['login'])) {
        echo '<meta http-equiv="refresh" content="0; URL=login.php?message_type=login&message_reason=notlogin">';
    }
    if ($_SESSION['login'] == 'false') {
        echo '<meta http-equiv="refresh" content="0; URL=login.php?message_type=login&message_reason=notlogin">';
    }
}

function logout() {
        $_SESSION['login'] = 'false';
        session_destroy();
        echo '<meta http-equiv="refresh" content="0; URL=login.php?message_type=login&message_reason=logout">';
    
}
