<?php
/**
* Organize Message Display
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/

function displayMessage($type,$reason) {
    switch ($type) {
        case "login":
            echo "Anmeldung: ";
            switch ($reason) {
                case "password":
                    echo "Dein Passwort ist nicht korrekt.";
                    break;
                case "notlogin":
                    echo "Sie sind nicht eingeloggt.";
                    break;
                case "logout":
                    echo "Sie wurden erfolgreich ausgeloggt.";
                    break;
                case "successfull":
                    echo "Erfolgreich Eingeloggt";
                    break;
                case "deactivate":
                    echo "Ihr Benutzerkonto ist deaktiviert";
                    break;
            } 
            break;
        case "delete":
            echo "Entfernt: ";
            switch ($reason) {
                case "del-question":
                    echo "Wenn sie diese These l&ouml;schen, werden alle damit verbundenen Antworten ebenfalls gel&ouml;scht, wollen sie das wirklich ?";
                    break;
                case "del-answers":
                    echo "Wollen sie diese Antwort/en wirklich l&ouml;schen";
                    break;
                case "del-user":
                    echo "Wenn sie diesen Benutzer l&ouml;schen, werden alle mit ihm Verbunden Antworten gel&ouml;scht, wollen sie das wirklich?";
                    break;
                case "del-group":
                    echo "Wenn sie diese Gruppe l&ouml;schen, werden alle mit dieser verbundenen Antworten und Benutzer ebenfalls gel&ouml;scht!";
            }
            
            break;
        case "add":
            echo "Hinzugef&uuml;gt: ";
            switch ($reason) {
                case "successfull-user":
                    echo "Der Benutzer wurde erfolgreich Hinzugef&uuml;gt";
                    break;
                case "successfull-group":
                    echo "Die Gruppe wurde erfolgreich Hinzugef&uuml;gt";
                    break;
                case "successfull-question":
                    echo "Die These wurde erfolgreich Hinzugef&uuml;gt";
                    break;
                case "successfull-user-to-group":
                    echo "Der Benutzer wurde erfolgreich der Gruppe Hinzugef&uuml;gt";
            } 
            
            break;
        case "change":
            echo "&Auml;nderung: ";
            switch ($reason) {
                case "successfull-user":
                    echo "Der Benutzer wurde erfolgreich ge&auml;ndert";
                    break;
                case "successfull-group":
                    echo "Der Gruppe wurde erfolgreich ge&auml;ndert";
                    break;
                case "successfull-question":
                    echo "Der These wurde erfolgreich ge&auml;ndert";
                    break;
            }
        case "notice":
            echo "Notiz: ";
            switch ($reason) {
                case "setupfolder":
                    echo "Der Setup Ordner sollte aus Sicherheitsgr&uuml;nden unbedingt entfernt werden";
                    break;
                
            }
            break;
    }
}