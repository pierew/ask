<?php
/**
* Include all functions for the User & Roles
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getUserList() {
    $result = queryDB_RAW("SELECT * FROM ask_user ORDER BY ask_group_idask_group ASC;");
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
    }
    return $data;
}

function getUserName($uid) {
    $result = queryDB("SELECT username FROM ask_user WHERE idask_user='$uid';");
    return $result['username'];
}
function getUserGroupID($uid) {
    $result = queryDB("SELECT ask_group_idask_group FROM ask_user where idask_user = '$uid';");
    return $result['ask_group_idask_group'];
}

function getUserRoleID($uid) {
    $result = queryDB("SELECT ask_roles_idask_roles FROM ask_user WHERE idask_user = '$uid';");
    return $result['ask_roles_idask_roles'];
}

function setPassword($uid,$password) {
    queryDB("UPDATE ask_user SET password='$password' WHERE idask_user='$uid';");
}

function setUsername($uid,$username) {
    queryDB("UPDATE ask_user SET username='$username' WHERE idask_user='$uid';");
}

function activateUser($uid) {
    queryDB("UPDATE ask_user SET status='1' WHERE idask_user='$uid';");
}

function deactivateUser($uid) {
    queryDB("UPDATE ask_user SET status='0' WHERE idask_user='$uid';");
}

function deleteUser($uid) {
    queryDB("DELETE FROM ask_user WHERE idask_user='$uid';");
}

function setUserRole($uid,$role) {
    $roleid = getRoleID($role);
    queryDB("UPDATE ask_user SET ask_roles_idask_roles='$roleid' WHERE idask_user='$uid';");
}

function changeGroup($uid,$group) {
    $groupid = getGroupID($role);
    queryDB("UPDATE ask_user SET ask_group_idask_group='$groupid' WHERE idask_user='$uid';");
}

function addUser($username,$password,$roleid,$groupid) {
    queryDB("INSERT INTO ask_user (username,password,ask_roles_idask_roles,ask_group_idask_group) VALUES ('$username','$password','$roleid','$groupid');");
}

function autoCreateUser($amount,$gid) {
    $group = getGroupName($gid);
    $array = array();
    for ($i = 1;$i <= $amount;$i++) {
        $un = rand()*time();
        $username = $group. '_' .$un;
        $password = md5(generate_password());
        addUser($username,$password,"2",$gid);
        array_push($array,array($username,$password));
    }
    return $array;
}

function getMultiUserPrintView($array) {
    foreach($array as $item) {
    echo "<p>";
    echo "Dein Benutzename: ". $item[0];echo "</p>";
    echo "<p>";
    echo "Dein Passwort:".$item[1];
    echo "</p>";
    echo "<p>Hinweis: Dieser Schl&uuml;ssel verf&auml;llt, nach dem durchf&uuml;hren der Umfrage, er kann jederzeit vom Administrator reaktiviert werden</p>";
    echo "<hr>";
    }
}

function getRoleID($rolename) {
    $result = queryDB("SELECT idask_roles FROM ask_roles WHERE name='$rolename';");
    return $result['idask_roles'];
}

function getUserID($username) {
    $result = queryDB("SELECT idask_user FROM ask_user WHERE username='$username';");
    return $result['idask_user'];
}

function getRoleName($rid) {
    $result = queryDB("SELECT name FROM ask_roles WHERE idask_roles='$rid';");
    return $result['name'];
}