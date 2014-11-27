<?php
/**
* View Controller
*
* Controles the Output
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getView($type, $role, $category, $action, $item) {
    switch($role) {
        case "user":
            getUserView($type, $category);
            break;
        case "administrator":
            getAdminView($type, $category, $action, $item);
            break;
        
    }
}

function getUserView($type, $category) {
    switch($type) {
        case "nav":
            echo "<ul>";
            echo "<li><a href='index.php'>Startseite</a></li>";
            echo "<li><a href='index.php?view_category=survey'>Umfrage durchführen</a></li>";
            echo "<li><a href='index.php?access_control=logout'>Logout</a></li>";
            echo "</ul>";
            break;
        case "content":
            switch ($category) {
                default:
                    break;
                case "survey":
                    break;
            }
            break;
    }
}

function getAdminView($type, $category, $action, $item) {
    switch($type) {
        case "nav":
            echo "<ul>";
            echo "<li><a href='index.php'>Startseite</a></li>";
            echo "<li><a href='index.php?view_category=survey'>Umfrage durchf&uuml;hren</a></li>";
            echo "<li><a href='index.php?view_category=results'>Ergebnisverwaltung</a></li>";
            echo "<li><a href='index.php?view_category=survey-control'>Thesenverwaltung</a></li>";
            echo "<li><a href='index.php?view_category=user-control'>Benutzerverwaltung</a></li>";
            echo "<li><a href='index.php?view_category=group-control'>Gruppenverwaltung</a></li>";
            echo "<li><a href='index.php?view_category=system-control'>Systemkonfiguration</a></li>";
            echo "<li><a href='index.php?access_control=logout'>Logout</a></li>";
            echo "</ul>";
            break;
        case "content":
            switch ($category) {
                case "survey":
                    
                    break;
                case "results": 
                    echo "<h2>Ergebnisverwaltung</h2>";
                    echo "<a href='index.php?view_category=results&type=edit&action=reset'>Ergebnisse zur&uuml;cksetzen</a>";
                    include_once '../../results.php';
                    break;
                case "survey-control":
                    echo "<h2>Thesenverwaltung</h2>";
                    echo "<a href='index.php?view_category=survey-control&type=edit&action=new'>Neue These</a>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>These</th>";
                    echo "<th>Aktionen</th>";
                    echo "</tr>";
                    $question = getQuestionList();
                    for ($i = 0; $i < sizeof($question); $i++) {
                        echo "<tr>";
                        echo "<td>". $question[$i]['idask_question'] ."</td>";
                        echo "<td>". $question[$i]['text'] ."</td>";
                        echo "<td><a href='index.php?view_category=survey-control&type=edit&action=change&item=". $question[$i]['idask_question'] ."'>&Auml;ndern</a>&nbsp;<a href='index.php?view_category=survey-control&type=edit&action=delete&item=". $question[$i]['idask_question'] ."'>L&ouml;schen</a></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    break;
                case "user-control":
                    echo "<h2>Benutzerverwaltung</h2>";
                    echo "<a href='index.php?view_category=user-control&type=edit&action=new'>Neuer Benutzer</a>&nbsp;<a href='index.php?view_category=user-control&type=edit&action=generate'>Benutzer generieren</a>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Benutzername</th>";
                    echo "<th>Gruppe</th>";
                    echo "<th>Rolle</th>";
                    echo "<th>Status</th>";
                    echo "<th>Aktionen</th>";
                    echo "</tr>";
                    $user = getUserList();
                    for ($i = 0; $i < sizeof($user); $i++) {
                        echo "<tr>";
                        echo "<td>". $user[$i]['username'] ."</td>";
                        echo "<td>". getGroupName($user[$i]['ask_group_idask_group']) ."</td>";
                        echo "<td>". getRoleName($user[$i]['ask_roles_idask_roles']) ."</td>";
                        echo "<td>". $user[$i]['status'] ."</td>";
                        echo "<td><a href='index.php?view_category=user-control&type=edit&action=change&item=". $user[$i]['idask_user'] ."'>&Auml;ndern</a>&nbsp;<a href='index.php?view_category=user-control&type=edit&action=delete&item=". $user[$i]['idask_user'] ."'>L&ouml;schen</a>&nbsp;";
                        if ($user[$i]['status'] == "0") {
                            echo "<a href='data.php?type=user&action=activate&item=". $user[$i]['idask_user'] ."'>Aktivieren</a></td>";    
                        } else {
                            echo "<a href='data.php?type=user&action=deactivate&item=". $user[$i]['idask_user'] ."'>Deaktivieren</a></td>";    
                        }
                        
                        echo "</tr>";
                    }
                    echo "</table>";
                    break;
                case "group-control":
                    echo "<h2>Gruppenverwaltung</h2>";
                    echo "<a href='index.php?view_category=group-control&type=edit&action=new'>Neue Gruppe</a>";
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Aktionen</th>";
                    echo "</tr>";
                    $group = getGroupList();
                    for ($i = 0; $i < sizeof($group); $i++) {
                        echo "<tr>";
                        echo "<td>". $group[$i]['idask_group'] ."</td>";
                        echo "<td>". $group[$i]['name'] ."</td>";
                        if ($group[$i]['name'] != "system") {
                        echo "<td><a href='index.php?view_category=group-control&type=edit&action=change&item=". $group[$i]['idask_group'] ."'>&Auml;ndern</a>&nbsp;<a href='index.php?view_category=group-control&type=edit&action=delete&item=". $group[$i]['idask_group'] ."'>L&ouml;schen</a></td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    break;
                case "system-control":
                    echo "<h2>Systemkonfiguration</h2>";
                    echo "<form action='data.php' method='post'>";
                    echo "<input type='hidden' name='type' value='system'>";
                    echo "<input type='hidden' name='action' value='change'>";
                    echo "<p>Titel:&nbsp;<input type='Text' value='". getShortcode("title") ."' name='title'></p>";
                    echo "<p>Hauptverzeichnis:&nbsp;<input type='Text' value='". getShortcode("systemroot") ."' name='systemroot'></p>";
                    echo "<p><input type='submit'></p>";
                    echo "</form>";
                    break;
                default:
                    echo "<h2>Administrationsbereich</h2>";
                    echo "<p>Herzlich Willkommen im Administrationsbereich</p>";
                    echo "<p>Wenn sie sich auf den folgenden Seiten bewegen haben sie vollst&auml;ndigen Zugriff auf alle Daten, seien sie Vorsichtig in der Verwendung des Systems</p>";
                    echo "<p>Wir w&uuml;nschen ihnen Viel Spa&szlig; mit diesem System</p>";
                    break;
            }
            break;
        case "edit":
            switch ($category) {
                case "results": 
                    echo "<h2>Ergebnisverwaltung</h2>";
                    switch ($action) {
                        case "reset":
                            echo "<h3>Ergebnisse zur&uuml;cksetzen</h3>";
                            displayMessage('delete','del-answers');
                            echo "<p><a href='data.php?type=results&action=reset'>Wirklich zur&uuml;cksetzen</a>&nbsp;<a href='index.php?view_category=results'>Nicht zur&uuml;cksetzen</a></p>";
                            break;
                        }
                    break;
                case "survey-control":
                    echo "<h2>Thesenverwaltung</h2>";
                    switch ($action) {
                        case "new":
                            echo "<h3>Neue These</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='question'>";
                            echo "<input type='hidden' name='action' value='new'>";
                            echo "<p><input type='Text' name='newquestion' size='100'></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        case "change":
                            echo "<h3>Bearbeite These</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='question'>";
                            echo "<input type='hidden' name='action' value='change'>";
                            echo "<input type='hidden' name='item' value='". $item ."'>";
                            echo "<p><input type='Text' name='changequestion' value='". getQuestionText($item) ."' size='100'></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        case "delete":
                            echo "<h3>L&ouml;schen These</h3>";
                            displayMessage('delete','del-question');
                            echo "<p><a href='data.php?type=question&action=delete&item=". $item ."'>Wirklich L&ouml;schen</a>&nbsp;<a href='index.php?view_category=survey-control'>Nicht L&ouml;schen</a></p>";
                            break;
                    }
                    break;
                case "user-control":
                    echo "<h2>Benutzerverwaltung</h2>";
                    switch ($action) {
                        case "new":
                            echo "<h3>Neuer Benutzer</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='user'>";
                            echo "<input type='hidden' name='action' value='new'>";
                            echo "<p>Benutzername: <input type='Text' name='username' size='50'></p>";
                            echo "<p>Passwort: <input type='Password' name='password' size='50'></p>";
                            echo "<p>Rolle: <select name='role' size='1'>";
                            echo "<option value='". getRoleID("user") ."'>Benutzer</option>";
                            echo "<option value='". getRoleID("administrator") ."'>Administrator</option>";
                            echo "</select></p>";
                            echo "<p>Gruppe: <select name='group' size='1'>";
                            $group = getGroupList();
                            for ($i = 0; $i < sizeof($group); $i++) {
                                echo "<option value='". $group[$i]['idask_group'] ."'>". $group[$i]['name'] ."</option>";
                            }
                            echo "</select></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        case "change":
                            echo "<h3>Benutzer bearbeiten</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='user'>";
                            echo "<input type='hidden' name='action' value='change'>";
                            echo "<input type='hidden' name='item' value='". $item ."'>";
                            echo "<p>Benutzername: <input type='Text' name='username' value='". getUserName($item) ."' size='50'></p>";
                            echo "<p>Passwort: <input type='Password' name='password' size='50'></p>";
                            echo "<p>Rolle: <select name='role' size='1'>";
                            if ("1" == getUserRoleID($item)) {
                                echo "<option value='". getRoleID("user") ."'>Benutzer</option>";
                                echo "<option value='". getRoleID("administrator") ."' selected>Administrator</option>";
                            } else {
                                echo "<option value='". getRoleID("user") ."' selected>Benutzer</option>";
                                echo "<option value='". getRoleID("administrator") ."'>Administrator</option>";
                            }
                            echo "</select></p>";
                            echo "<p>Gruppe: <select name='group' size='1'>";
                            $group = getGroupList();
                            
                            for ($i = 0; $i < sizeof($group); $i++) {
                                if ($group[$i]['idask_group'] == getUserGroupID($item)) {
                                    echo "<option value='". $group[$i]['idask_group'] ."'selected>". $group[$i]['name'] ."</option>";    
                                } else {
                                    echo "<option value='". $group[$i]['idask_group'] ."'>". $group[$i]['name'] ."</option>";    
                                }
                                
                            }
                            echo "</select></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        case "delete":
                            echo "<h3>Benutzer l&ouml;schen</h3>";
                            displayMessage('delete','del-user');
                            echo "<p><a href='data.php?type=user&action=delete&item=". $item ."'>Wirklich L&ouml;schen</a>&nbsp;<a href='index.php?view_category=user-control'>Nicht L&ouml;schen</a></p>";
                            break;
                        case "generate":
                            echo "<h3>Benutzer generieren</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='user'>";
                            echo "<input type='hidden' name='action' value='generate'>";
                            echo "Menge: <input type='Text' name='amount'>";
                            echo "<p>Gruppe: <select name='group' size='1'>";
                            $group = getGroupList();
                            for ($i = 0; $i < sizeof($group); $i++) {
                                echo "<option value='". $group[$i]['idask_group'] ."'>". $group[$i]['name'] ."</option>";
                            }
                            echo "</select></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        }
                    break;
                case "group-control":
                    echo "<h2>Gruppenverwaltung</h2>";
                    switch ($action) {
                        case "new":
                            echo "<h3>Neue Gruppe</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='group'>";
                            echo "<input type='hidden' name='action' value='new'>";
                            echo "<p><input type='Text' name='newgroup' size='50'></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        case "change":
                            echo "<h3>Gruppe bearbeiten</h3>";
                            echo "<form method='post' action='data.php'>";
                            echo "<input type='hidden' name='type' value='group'>";
                            echo "<input type='hidden' name='action' value='change'>";
                            echo "<input type='hidden' name='item' value='". $item ."'>";
                            echo "<p><input type='Text' name='changedgroup' value='". getGroupName($item) ."' size='50'></p>";
                            echo "<p><input type='submit'></p>";
                            echo "</form>";
                            break;
                        case "delete":
                            echo "<h3>Gruppe l&ouml;schen</h3>";
                            displayMessage('delete','del-group');
                            echo "<p><a href='data.php?type=group&action=delete&item=". $item ."'>Wirklich L&ouml;schen</a>&nbsp;<a href='index.php?view_category=group-control'>Nicht L&ouml;schen</a></p>";
                            break;
                    }
                    break;
                }
            break;
    }
}
