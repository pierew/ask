<?php
/**
* View Controller
*
* Controles the Output
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
* @author     Manuel Lampe
*/
function getView($type, $role, $category) {
    switch($role) {
        case "user":
            getUserView($type, $category);
            break;
        case "administrator":
            getAdminView($type, $category);
            break;
        
    }
}

function getUserView($type, $category) {
    switch($type) {
        case "nav":
            break;
        case "content":
            switch ($category) {
                default:
                    break;
            }
            break;
        case "logout":
            logout();
            break;
    }
}

function getAdminView($type, $category) {
    switch($type) {
        case "nav":
            break;
        case "content":
            switch ($category) {
                case "survey-control":
                    break;
                case "user-control":
                    break;
                case "group-control":
                    break;
                case "role-control":
                    break;
                case "system-control":
                    break;
                default:
                    break;
            }
            break;
        case "logout":
            logout();
            break;
    }
}
