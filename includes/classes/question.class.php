<?php
/**
* Include all functions for Questions
*
* 
*
* @author     Piere Woehl <woehlpiere@googlemail.com>
*/
function getQuestionList() {
    $result = queryDB_RAW("SELECT idask_question,text FROM ask_question;");
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
    }
    return $data;
}

function getQuestionText($qid) {
    $result = queryDB("SELECT text from ask_question WHERE idask_question='$qid';");
    return $result['text'];
}

function addQuestion($questionText) {
    queryDB("INSERT INTO ask_question (text) VALUES ('$questionText');");
}

function deleteQuestion($qid) {
    queryDB("DELETE FROM ask_result WHERE ask_question_idask_question='$qid'");
    queryDB("DELETE FROM ask_question WHERE idask_question='$qid';");
}

function changeQuestion($qid,$questionText) {
    queryDB("UPDATE ask_question SET text='$questionText' WHERE idask_question='$qid'");
}
