<?php 
/*var_dump($_GET);
var_dump($_GET['sentence']);
var_dump($_GET['word']);*/

$sentenceToCensor = $_POST['sentence'];
$wordToFind = $_POST['word'];
var_dump($sentenceToCensor , $wordToFind);
echo 'Original sentence:' . $sentenceToCensor;
echo '<br>';
echo 'Original sentence lenght:' . strlen($sentenceToCensor);
echo '<br>';
//var_dump (str_ireplace("$wordToFind" , "***" , "$sentenceToCensor" ));
$censorSentence = (str_ireplace("$wordToFind" , "***" , "$sentenceToCensor" ));
echo 'Censored Sentence:' . $censorSentence;
echo '<br>';
echo 'Censored sentence lenght:' . strlen($censorSentence); 