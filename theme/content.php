<?php

if (isset($_GET['message_type']) && isset($_GET['message_reason'])) {
$msgtype = $_GET['message_type'];
$msgreason = $_GET['message_reason'];
echo "<div id='msgbox'>";
displayMessage($msgtype,$msgreason);
echo "</div>";
}
echo "<div id='content'>";
getView("$type","$role","$category","$action","$item");
echo "</div>";