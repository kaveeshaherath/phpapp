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
    <title>Teacher panel</title>
    <link rel="stylesheet" href="../../css/bootwatch.min.css">
    <link rel="stylesheet" href="../../css/cus.css">
    <link rel="stylesheet" type="text/css" href="../../css/flip.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Concert+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- new styles******** -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootwatch.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body background="../../images/1m.jpg" style="font-family: 'Alegreya Sans SC', sans-serif;font-size: 2rem" onload="hello">
    <div class="container-fluid">
        <div class="row">
            <div id="navBar">
                <div class="navbar navbar-inverse navbar-fixed-left">
                    <a class="navbar-brand" href="#" id="a" style="font-size: 50px">ereport</a>
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fas fa-book-reader"> Create new class</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" id="createClass">Create class</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class='fas fa-chalkboard-teacher'> Student Details</i><span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" id="stdDet">Student Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fas fa-book-open"> Report</i><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a id="crtRep" href="#">Create Report</a></li>

                            </ul>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-8">
                                    <span id="formResult" style="color:green;font-size:2rem;"></span>


                                </div>

                                <div class="well"
                                    style="margin:3px;padding-left:3px;text-align:right;background-color:rgba(51, 153,255,.00);color:#fff">
                                    <b>Welcome </b><?php echo($loginSession);?> (teacher)<br> <a
                                        href="../functions/logout.php" style="color:#fff;">
                                        Logout</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="loadView"></div>
                <div id="loadSubView"></div>
                

            </div>

        </div>

</body>
<script src="../../JS/jquery-3.1.1.min.js"></script>
<script src="../../JS/bootstrap.min.js"></script>
<script src="../../JS/cus.js"></script>

<script>
   $("#loadView").load("greetingWindow.php");
</script>

</html>