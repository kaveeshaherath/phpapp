<?php

include_once('../../functions/allFunctions.php');

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$addno=$_POST['addno'];
$dob=$_POST['dob'];
$entrydate=$_POST['entrydate'];
$parentname=$_POST['parentname'];
$connumber=$_POST['connumber'];
$address=$_POST['address'];

//$fname=7899;

$functionResult=addStudentDetails($addno,$fname,$mname,$lname,$gender,$dob,$entrydate,$parentname,$address,$connumber);

///echo $fname."-".$mname."-".$lname."-".$gender."-".$addno."-".$dob;

echo($functionResult);


?>