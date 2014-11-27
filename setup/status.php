<?php
$mysqlhost = $_POST['mysqlhost'];
$mysqluser = $_POST['mysqluser'];
$mysqlpasswd = $_POST['mysqlpasswd'];
$mysqldb = $_POST['mysqldb'];
$mysqlport = $_POST['mysqlport'];
$adminuser = $_POST['adminuser'];
$adminpasswd = md5($_POST['adminpasswd']);
$title = $_POST['title'];

$file_shortcodes = "./sql/ask_shortcodes.sql";
$file_group = "./sql/ask_group.sql";
$file_roles = "./sql/ask_roles.sql";
$file_question = "./sql/ask_question.sql";
$file_user = "./sql/ask_user.sql";
$file_result = "./sql/ask_result.sql";

$ask_shortcodes = fopen($file_shortcodes, "r") or die("Datenbankkonfigurationsdatei nicht gefunden!");
$ask_group = fopen($file_group, "r") or die("Datenbankkonfigurationsdatei nicht gefunden!");
$ask_roles = fopen($file_roles, "r") or die("Datenbankkonfigurationsdatei nicht gefunden!");
$ask_question = fopen($file_question, "r") or die("Datenbankkonfigurationsdatei nicht gefunden!");
$ask_user = fopen($file_user, "r") or die("Datenbankkonfigurationsdatei nicht gefunden!");
$ask_result = fopen($file_result, "r") or die("Datenbankkonfigurationsdatei nicht gefunden!");

$sql_ask_shortcodes = fread($ask_shortcodes,filesize($file_shortcodes));
$sql_ask_group = fread($ask_group,filesize($file_group));
$sql_ask_roles = fread($ask_roles,filesize($file_roles));
$sql_ask_question = fread($ask_question,filesize($file_question));
$sql_ask_user = fread($ask_user,filesize($file_user));
$sql_ask_result = fread($ask_result,filesize($file_result));


$db_connection = @new mysqli($mysqlhost, $mysqluser, $mysqlpasswd, $mysqldb, $mysqlport);
    if ($db_connection->connect_error) {
        die('Connect Error: ' . $db_connection->connect_error);
    }
$mysqlversion = $db_connection->server_version;
function queryDB($SQL) {
    $result = $db_connection->query($SQL, MYSQLI_USE_RESULT);
    return $result;
}
function setupAction($action,$SQL) {
    $result = queryDB($SQL);
    echo "<tr>"
    echo "<td>". $action ."</td>";
    echo "<td>". if(!$result) {echo "Fehlgeschlagen"} else {echo "Erfolgreich"} ."</td>";
    echo "</tr>";
}
function createConfigFile(){
    $configfile = fopen("../includes/settings.php","a");
    fwrite($configfile,'<?php'. PHP_EOL);
    fwrite($configfile,'$DB_host = "'.$mysqlhost.'";'. PHP_EOL);
    fwrite($configfile,'$DB_port = "'.$mysqlport.'";'. PHP_EOL);
    fwrite($configfile,'$DB_user = "'.$mysqluser.'";'. PHP_EOL);
    fwrite($configfile,'$DB_password = "'.$mysqlpasswd.'";'. PHP_EOL);
    fwrite($configfile,'$DB_name = "'.$mysqldb.'";'. PHP_EOL);
    fclose("../includes/settings.php");
    echo "<tr>"
    echo "<td>Erstelle Konfigurationsdatei</td>";
    echo "<td></td>";
    echo "</tr>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Installationskript - @$k</title>
    </head>
    <body>
        <h1>Installationskript - @$k</h1>
        <p>
            <h2>Anforderungen</h2>
            <table>
                <tr>
                    <th>Name:</th>
                    <th>Vorhanden</th>
                </tr>
                <tr>
                    <td>PHP 5.5 oder h&ouml;her | <?php echo phpversion() ; ?></td>
                    <td><?php if (version_compare(phpversion(), '5.5.0', '>=')) {echo "True";} else {echo "False";} ?></td>
                </tr>
                <tr>
                    <td>MySQL 5.6 oder h&ouml;her | <?php echo $mysqlversion; ?></td>
                    <td><?php if ($mysqlversion contains "5.6") {echo "True";} else {echo "False"; $run = false;} ?> </td>
                </tr>
            </table>
        </p>
        <p>
        <table>
            <tr>
                <th>Aktion</th>
                <th>Status</th>
            </tr>
            <?php 
            createConfigFile();
            setupAction("Erstelle Tabelle - ask_shortcodes",$sql_ask_shortcodes);
            setupAction("Erstelle Tabelle - ask_group",$sql_ask_group);
            setupAction("Erstelle Tabelle - ask_roles",$sql_ask_roles);
            setupAction("Erstelle Tabelle - ask_question",$sql_ask_question);
            setupAction("Erstelle Tabelle - ask_user",$sql_ask_user);
            setupAction("Erstelle Tabelle - ask_result",$sql_ask_result);
            setupAction("Erstelle Administratorkonto","INSERT INTO ask_user (username,password,ask_group_idask_group,ask_roles_idask_roles,status) VALUES ('$adminuser','$adminpasswd','1','1','1')");
            setupAction("Konfiguriere Titel","INSERT INTO ask_shortcodes (name,text) VALUES('title','$title')");
            ?>
        </table>
        </p>
    </body>
</html>
<?php
fclose($ask_shortcodes);
fclose($ask_group);
fclose($ask_roles);
fclose($ask_question);
fclose($ask_user);
fclose($ask_result);
?>