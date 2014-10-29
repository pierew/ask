<?php
/**
* Include all functions for the User
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getUserGroup($user) {
    
}

function getUserRole($user) {
    
}

function setPassword($user,$password) {
    
}

function setUsername($user,$newusername) {
    
}

function activateUser($user) {
    
}

function deactivateUser($user) {
    
}

function deleteUser($user) {
    
}

function setUserRole($user) {
    
}

function changeGroup($user,$group) {
    
}

function addUser($username,$password,$roleid,$groupid) {
    queryDB('INSERT INTO ask_user (username,password,ask_roles_idask_roles,ask_group_idask_group) VALUES ("$username","$password","$roleid","$groupid");'):
}

function autoCreateUser($amount,$groupid) {
    $getGroupName = queryDB('SELECT name FROM ask_group WHERE idask_group = "$groupid"');
    $group = $getGroupName['name'];
    for ($i = 1;$i == $amount;$i++) {
        $username = $group. '_' . (rand()*time());
        $password = md5(generate_password());
        addUser($username,$password,'3',$groupid);
    }
}