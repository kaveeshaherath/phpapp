<?php
session_start();

$loginSession=$_SESSION['user'];
//sesion validating 

if(empty($loginSession)){
    header("location:../../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clark panel</title>
    <link rel="stylesheet" href="../../css/bootwatch.min.css">
    <link rel="stylesheet" href="../../css/cus.css">
    <script src="../../JS/bootstrap.min.js"></script>
    <script src="../../JS/jquery-3.1.1.min.js"></script>



</head>

<body  background="../../images/1m.jpg" style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 2rem">
    <div class="container-fluid">
        <div class="row">
            <div id="navBar">
                <div class="navbar navbar-inverse navbar-fixed-left">
                    <a class="navbar-brand" href="#" id="a" style="font-size: 50px">ereport</a>
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fas fa-book-reader"> Student</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="student" id="addStudent" href="#">Add Student Details</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class='fas fa-chalkboard-teacher'>Teacher</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="addTeacher" class="teacher" href="#"> Add Teacher Details</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <span id="formResult" style="color:green;font-size:2rem;"></span>
                            </div>
                            <div class="well"
                                style="margin:3px;padding-left:3px;text-align:right;background-color:rgba(51, 153,255,.00);color:#fff">
                                <b>Welcome </b><?php echo($loginSession);?> (clark) <br> <a href="../functions/logout.php"
                                    style="color:#fff;">
                                    Logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loadViewOne"></div>
        </div>

    </div>
</body>
<script src="../../JS/jquery-3.1.1.min.js"></script>
<script src="../../JS/bootstrap.min.js"></script>
<script src="../../JS/clark.js"></script>



</html>