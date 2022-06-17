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
    <title>Admin panel</title>
    <link rel="stylesheet" href="../../css/bootwatch.min.css">
    <link rel="stylesheet" href="../../css/cus.css">

    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Concert+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body  background="../../images/1m.jpg" style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 2rem ">

    <div class="container-fluid">
        <div class="row">
            <div id="navBar">
                <div class="navbar navbar-inverse navbar-fixed-left">
                    <a class="navbar-brand" href="#" id="a"  style="font-size: 50px">ereport</a>
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fas fa-book-reader"> Student</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="student" href="#">Add Student</a></li>
                                <li><a id="viewCus" href="#">Student Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class='fas fa-chalkboard-teacher'> Teacher</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="addCus" href="#">Teacher Details</a></li>
                                <li><a id="addTeacher" href="#">Add Teacher</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fas fa-book-open"> Report</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="addCus" href="#">Find Class Report</a></li>

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
                                <b>Welcome </b><?php echo($loginSession);?> (Admin)<br> <a href="../functions/logout.php" style="color:#fff;"> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="loadView"></div>
</body>
<script src="../../JS/jquery-3.1.1.min.js"></script>
<script src="../../JS/bootstrap.min.js"></script>
<!-- <script src="../../JS/addteacherdetails.js"></script> -->
<script src="../../JS/admin.js"></script>

</html>
<script>
$(document).ready(function(){
    $("#student").click(function(){
        $("#loadView").load("admin/EnterStudentDetails.php");
    })
})
</script>