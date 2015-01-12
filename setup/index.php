<!DOCTYPE html>
<html>
    <head>
        <title>Installationskript - @$k</title>
    </head>
    <body>
        <h1>Installationskript - @$k</h1>
        <p>Bitte stellen sie sicher das alle Dateien im Besitz des Webserver Dienste Kontos ist.<br>
        Unter Linux Systemen ist dies bei SSH Zugriff mit "chown -R apache Pfad zum Hauptordner/*" machbar,<br>
        Auf anderen Systemen die Ordner- und Datei-Rechte "777" f&uuml;r die Ordner Setup und Includes erteilen, danach k&ouml;nnen diese Rechte ihren W&uuml;nschen angepasst werden
        </p>
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
                    <td>MySQL 5.6 oder h&ouml;her | </td>
                    <td></td>
                </tr>
            </table>
            <h2>MySQL Datenbank</h2>
            <form action='status.php' method='post'>
                <p>Datenbankserver:&nbsp;<input type="text" name="mysqlhost"/></p>
                <p>Datenbankserverport:&nbsp;<input type="text" name="mysqlport"/></p>
                <p>Datenbankbenutzer:&nbsp;<input type="text" name="mysqluser"/></p>
                <p>Datenbankkennwort:&nbsp;<input type="password" name="mysqlpasswd"/></p>
                <p>Datenbank:&nbsp;<input type="text" name="mysqldb"/></p>
            <h2>Administratorkonto</h2>
                <p>Administratorbenutzer:&nbsp;<input type="text" name="adminuser"/></p>
                <p>Administratorkennwort:&nbsp;<input type="password" name="adminpasswd"/></p>
            <h2>Allgemeine Informationen</h2>
                <p>System-Titel:&nbsp;<input type="text" name="title"/></p>
                <input type="submit"/>
            </form>
        </p>
    </body>
</html>