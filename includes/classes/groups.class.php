<?php
/**
* Include all functions for the Group Functionality
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getGroupList() {
    $result = queryDB_RAW("SELECT * FROM ask_group;");
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
    }
    return $data;
}

function getGroupMember($group) {
    $gid = getGroupID($group);
    $result = queryDB("SELECT * FROM ask_user WHERE ask_group_idask_group='$gid';");
    return $result;
}

function getGroupMemberNumber($group) {
    $result = count(getGroupMember($group));
    return $result;
}

function setGroupName($group,$newgroupname) {
    queryDB("UPDATE ask_group SET name='$newgroupname' WHERE name='$group'");
}

function deleteGroup($groupname) {
    queryDB("DELETE FROM ask_group WHERE name='$groupname';");
}

function addGroup($groupname) {
    queryDB("INSERT INTO ask_group (name) VALUES ('$groupname');");
}

function getGroupID($groupname) {
    $result = queryDB("SELECT idask_group WHERE name='$groupname'");
    return $result['idask_group'];
}

function getGroupName($gid) {
    $result = queryDB("SELECT name FROM ask_group WHERE idask_group='$gid';");
    return $result['name'];
}