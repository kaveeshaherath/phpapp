<?php
    if(isset($_POST['btnLogin'])){
        include_once("lib/functions/allFunctions.php");

        checkLogin($_POST['userName'],$_POST['userPass']);
    }

?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="css/bootwatch.min.css">
    </head>

<body  class="img-responsive" style="background:url('images/henry-be--Pg63JThyCg-unsplash.jpg');background-size:cover;background-position:center center">
    <div class="container">
        <div class="row">
    
             <div class="col-md-5 col-md-offset-3" style="background-color:rgba(0,0,0,.6);padding-left:50px;padding-top:50px;padding-bottom:50px;margin-top:70px;">
                    <h3  style="font-size:70px;text-align:center;font-weight:100;color:#fff;font-family:oswald"><B>Login</b></h3>
                    <form method="post" action="<?php  echo($_SERVER['PHP_SELF']); ?>">
                    <br><br>
                    <div class="form-group">
                            <input tuye="text" class="form-control" id="userName" name=userName placeholder="Enter your ID">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="userpass" name=userPass placeholder="Enter your Password">

                        </div>
                        <br>


                        <div class="form-group">

                            <input type="submit" value="Login" class="btn btn-outline-default btn btn-info" style="background-color:#3385ff;color:#fff" name="btnLogin">
                        </div>
                    </form>
                </div>
             
        </div>
    </div>


    



</html>