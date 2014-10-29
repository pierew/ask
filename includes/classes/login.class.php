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
    $result = queryDB("SELECT username,password,ask_roles_idask_roles,ask_group_idask_group FROM ask_user WHERE username = '$user';");
    if ($result['password'] == $encrypted_password) {
        $_SESSION['login'] = 'true';
        $_SESSION['username'] = $user;
        $_SESSION['role'] = $result['role'];
        $_SESSION['group'] = $result['group'];
        header('Location: index.php');
    } else {
        $_SESSION['login'] = 'false';
    }
}

function checkLogin() {
    if ($_SESSION['login'] == 'false') {
        header('Location: login.php');
    }
}

function logout() {
        $_SESSION['login'] = 'false';
        session_destroy();
        header('Location: login.php');
    
}