<?php
    
    function connection(){
    
        $server="localhost";
        $user="root";
        $pass="";
        $db="report";
        
        $conn=mysqli_connect($server,$user,$pass,$db);
        $serverErroer=mysqli_connect_error($conn);
        
        if(empty($serverError)){
            return $conn;
        }
        else{
            return null;
        }
    }
?>