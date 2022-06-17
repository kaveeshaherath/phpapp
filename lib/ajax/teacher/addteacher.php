<?php

include_once('../../functions/allFunctions.php');

$Pass=$_POST['pw'];
$newPass=md5($Pass);
$functionResult=addUserDetails($_POST['nic'],$newPass,$_POST['add'],$_POST['m'],$_POST['fname'],$_POST['mname'],$_POST['lname']);
echo($functionResult);

?>