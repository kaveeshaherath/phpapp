<?php
include_once('../../../functions/allFunctions.php');
$className=$_POST['name'];
$classGrade=$_POST['grade'];
$functionResult=createclass($className,$classGrade);
echo($functionResult);

?>