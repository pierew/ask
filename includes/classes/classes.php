<?php
/**
* A Main Import Class
*
* Diese Klassenimportdatei sorgt für den richtigen Import mit den richtigen Abhängigkeiten
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
session_start();
require_once 'database.class.php';
require_once 'general.class.php';
require_once 'message.class.php';
require_once 'view.class.php';
require_once 'user.class.php';
require_once 'groups.class.php';
require_once 'question.class.php';
require_once 'result.class.php';
require_once 'login.class.php';