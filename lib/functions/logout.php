<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-8660,'/');
}
session_destroy();
header('location:../../index1.php');

?>