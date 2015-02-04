<?php
/**
* Include all Functions for Results.
*
* Die Resultklasse bearbeitet alle Ergebnisorientierten Aufgaben.
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/


function getResultOfQuestion($qid) {
    $result = queryDB_RAW("SELECT * FROM ask_result JOIN ask_question ON idask_question=ask_question_idask_question WHERE ask_question.idask_question='$qid';");
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
    }
    return $data;
}

function getResultOfUser($username) {
    $result = queryDB_RAW("SELECT ask_question_idask_question,answer FROM ask_result JOIN ask_user ON idask_user=ask_user_idask_user WHERE ask_user.username='".$username."';");
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
    }
    return $data;
}

function getResultOfGroup($gid) {
    $result = queryDB_RAW("SELECT * FROM ask_result JOIN ask_user ON idask_user=ask_user_idask_user WHERE ask_user.ask_group_idask_group='$gid';");
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
    }
    return $data;
}

function resetResults() {
    queryDB("TRUNCATE TABLE ask_result;");
}

function addResult($qid,$uid,$answer) {
    queryDB("INSERT INTO ask_result (ask_question_idask_question,ask_user_idask_user,answer) VALUES($qid,$uid,$answer)");
}

function genSurveyViewSuccess() {
    echo "<h2>Umfrage erfolgreich abgeschlossen</h2>";
    echo "<p>Du hast die Umfrage erfolgreich abgeschlossen, du wirst nun in 30 Sekunden automatisch ausgeloggt.</p>";
    echo '<meta http-equiv="refresh" content="30; URL=index.php?access_control=logout">';
}

/**
* Include all Functions for Results.
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/