<?php

include_once('../../functions/allFunctions.php');

$sid=$_POST['sid'];
$sname=$_POST['sname'];
$functionResult=addSubjectDetails($sid,$sname);
 echo($functionResult);


?>