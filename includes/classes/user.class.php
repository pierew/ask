<?php
/**
* Include all functions for the User & Roles
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getUserID($username) {
    $result = queryDB("SELECT idask_user FROM ask_user WHERE username='$username'");
    return $result['idask_user']
}

function getUserGroup($username) {
    $result = queryDB("SELECT ask_group.name FROM ask_user JOIN ask_group ON ask_user.ask_group_idask_group=ask_group.idask_group WHERE ask_user.username = '$username';");
    return $result['ask_group.name'];
}

function getUserRole($username) {
    $result = queryDB("SELECT ask_roles.name FROM ask_user JOIN ask_roles ON ask_user.ask_roles_idask_roles=ask_roles.idask_roles WHERE ask_user.username = '$username';");
    return $result['ask_roles.name'];
}

function setPassword($username,$password) {
    queryDB("UPDATE ask_user SET password='$password' WHERE username='$username';");
}

function setUsername($username,$newusername) {
    queryDB("UPDATE ask_user SET username='$username' WHERE username='$username';");
}

function activateUser($username) {
    queryDB("UPDATE ask_user SET status='1' WHERE username='$username';");
}

function deactivateUser($username) {
    queryDB("UPDATE ask_user SET status='0' WHERE username='$username';");
}

function deleteUser($username) {
    queryDB("DELETE FROM ask_user WHERE username='$username';");
}

function setUserRole($username,$role) {
    $roleid = getRoleID($role);
    queryDB("UPDATE ask_user SET ask_roles_idask_roles='$roleid' WHERE username='$username';");
}

function changeGroup($username,$group) {
    $groupid = getGroupID($role);
    queryDB("UPDATE ask_user SET ask_group_idask_group='$groupid' WHERE username='$username';");
}

function addUser($usernamename,$password,$roleid,$groupid) {
    queryDB('INSERT INTO ask_user (username,password,ask_roles_idask_roles,ask_group_idask_group) VALUES ("$usernamename","$password","$roleid","$groupid");'):
}

function autoCreateUser($amount,$gid) {
    $getGroupName = queryDB("SELECT name FROM ask_group WHERE idask_group = '$gid';");
    $group = $getGroupName['name'];
    for ($i = 1;$i == $amount;$i++) {
        $usernamename = $group. '_' . (rand()*time());
        $password = md5(generate_password());
        addUser($usernamename,$password,'3',$gid);
    }
}

function getRoleID($rolename) {
    $result = queryDB("SELECT idask_roles WHERE name='$rolename';");
    return $result['idask_roles'];
}

function getRoleName($rid) {
    $result = queryDB("SELECT name WHERE idask_roles='$rid';");
    return $result['name'];
}