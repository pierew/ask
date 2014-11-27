<?php
include_once './includes/classes/classes.php';

$configfile = fopen("includes/settings-test.php","a");
    fwrite($configfile,'<?php'. PHP_EOL);
    fwrite($configfile,'$DB_host = "'.$mysqlhost.'";'. PHP_EOL);
    fwrite($configfile,'$DB_port = "'.$mysqlport.'";'. PHP_EOL);
    fwrite($configfile,'$DB_user = "'.$mysqluser.'";'. PHP_EOL);
    fwrite($configfile,'$DB_password = "'.$mysqlpasswd.'";'. PHP_EOL);
    fwrite($configfile,'$DB_name = "'.$mysqldb.'";'. PHP_EOL);
    fclose("includes/settings-test.php");
