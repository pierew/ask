<?php
/**
* Include all Functions for Results.
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/


function getResultOfQuestion($qid) {
    $result = queryDB("SELECT * FROM ask_result JOIN ask_question ON idask_question=ask_question_idask_question WHERE ask_question.idask_question='$qid';");
    return $result;
}

function getResultOfUser($username) {
    $result = queryDB("SELECT * FROM ask_result JOIN ask_user ON idask_user=ask_user_idask_user WHERE ask_user.username='$username';");
    return $result;
}

function getResultOfGroup($groupname) {
    $gid = getGroupID($groupname);
    $result = queryDB("SELECT * FROM ask_result JOIN ask_user ON idask_user=ask_user_idask_user WHERE ask_user.ask_group_idask_group='$gid';");
    return $result;
}

function resetResults() {
    queryDB("DELETE * FROM ask_result;");
}

function addResult($qid,$uid,$answer) {
    queryDB("INSERT INTO ask_result (ask_question_idask_question,ask_user_idask_user,answer) VALUES($qid,$uid,$answer)");
}

function genSurveyViewSuccess() {
    echo "<h2>Umfrage erfolgreich abgeschlossen</h2>";
    echo "<p>Du hast die Umfrage erfolgreich abgeschlossen, du wirst nun in 30 Sekunden automatisch ausgeloggt.</p>";
    echo '<meta http-equiv="refresh" content="30; URL=index.php?access_control=logout">';
}