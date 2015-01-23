<?php
$userResults = getResultOfUser($_GET['username']);
echo "Ergebnisse f&uuml;r Benutzer: <b>".$_GET['username']." <br></b>";
for ($i = 0; $i < sizeof($userResults); $i++) {
    
    
    if($userResults[$i]['answer'] < 5)
    {
        $zustimmung = "(Stimmt weniger zu)";
    }
    else if($userResults[$i]['answer'] == 5)
    {
        $zustimmung = "(Neutral)";
    }
    else if($userResults[$i]['answer'] == 6)
    {
        $zustimmung = "(Neutral)";
    }
    else if($userResults[$i]['answer'] > 6)
    {
        $zustimmung = "(Stimmt mehr zu)";
    }
    echo "<br>" . $userResults[$i]['ask_question_idask_question'] . ". " . getQuestionText($userResults[$i]["ask_question_idask_question"])  . " | Antwort: " . $userResults[$i]['answer'] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $zustimmung ;
}
