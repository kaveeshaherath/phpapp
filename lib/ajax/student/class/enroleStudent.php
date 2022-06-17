<?php
include_once('../../../functions/allFunctions.php');
$className=$_POST['className'];
$classGrade=$_POST['classGrade'];
$classYear=$_POST['year'];
$functionResult=studeSnt_enrole_class($className,$classGrade,$classYear);
echo($functionResult);

?>