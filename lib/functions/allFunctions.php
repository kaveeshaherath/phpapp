<?php

session_start();

include_once("dbConn.php");

//check login
function checkLogin($userName,$userPass){
    //create connection
    $dbConn=connection();
    //sql select 
    $getLoginInfo="SELECT * FROM ereportuser WHERE NIC='$userName';";
    //fetch the data from the connection
    $result=mysqli_query($dbConn,$getLoginInfo);
    //check the number of rows
    $nor=mysqli_num_rows($result);
    //if number of rows>0 it will execute
    if($nor>0){
        //fetching data from the database like associative array
        $rec=mysqli_fetch_assoc($result);
        //create new enc password
        $newPass=md5($userPass);
        if($rec['pass_word']==$newPass){
            if($rec['status']==1){
                if($rec['usertype']=="admin"){
                    //create a session and cookie 
                    $_SESSION['user']=$rec['fname'];
                    setcookie("checkLogin",$rec['NIC'],time()+60*60,'/');
                    //redirect to the admin page
                    header("location:lib/views/admin.php");
                }elseif ($rec['usertype']=="teacher") {
                    //create a session and cookie 
                    $_SESSION['user']=$rec['fname'];
                    setcookie("checkLogin",$rec['NIC'],time()+60*60,'/');
                    //redirect to the teacher page
                    header("location:lib/views/teacher.php");                
                }elseif ($rec['usertype']=="clark") {
                    //create a session and cookie 
                    $_SESSION['user']=$rec['fname'];
                    setcookie("checkLogin",$rec['NIC'],time()+60*60,'/');
                    //redirect to the clark page
                    header("location:lib/views/clark.php");                
                }
            }
            else{
                echo("<div class='col-md-4 col-md-offset-4' style='padding-top:50px'>");
                echo("<div class='alert alert-danger'>"."your account has been deactivated"."</div>");
                echo("</div>");
            }
        }
        else{
            echo("<div class='col-md-4 col-md-offset-4' style='padding-top:50px'>");
            echo("<div class='alert alert-danger'>"."check your password and NIC"."</div>");
            echo("</div>");
        }
    }
    else{
        
    }

}
    function addStudentDetails($addno,$fname,$mname,$lname,$gender,$dob,$entrydate,$parentname,$address,$connumber){
       // create connection
        $dbConn=connection();
        if(empty($addno && $fname && $mname && $lname && $gender && $dob && $entrydate && $parentname && $address && $connumber)){
               return "please enter required filds";
        }else{
             //upload new data into the database
             $sqlInsert="INSERT INTO student(addno,fname,mname,lname,gender,dob,entrydate,parentname,address,connumber) VALUES('$addno','$fname','$mname','$lname','$gender','$dob','$entrydate','$parentname','$address','$connumber')";
                $sqlResult=mysqli_query($dbConn,$sqlInsert);
                return "Success";


        }
    
    

    }

    function addUserDetails($nic,$pw,$add,$title,$fname,$mname,$lname){
          // create connection
          $dbConn=connection();
          if(empty($nic && $pw && $add && $fname && $mname && $lname)){
                 return "please enter required filds";
          }else{
               //upload new data into the database
               $sqlInsert="INSERT INTO ereportuser(NIC,pass_word,usertype,useraddress,status,title,fname,mname,lname) VALUES('$nic','$pw','teacher','$add',1,'$title','$fname','$mname','$lname')";
  
                  $sqlResult=mysqli_query($dbConn,$sqlInsert);
                  
                  if($sqlResult>0){
                    return "Success";
                  }else{
                      return"error";
                  }
                

  
          }
      
     }



function showStudentDetails($no){
    $dbConn=connection();

    $checkSQL="SELECT addno,fname,mname,lname,gender,dob,entrydate,parentname,address,connumber FROM student WHERE addno='$no'";

    $selectResult=mysqli_query($dbConn,$checkSQL);

    $rec=mysqli_fetch_assoc($selectResult);

    $nm=$rec['fname']." ".$rec['mname']." ".$rec['lname'];
  
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid" style="background-color:#ffffff">
                <div class="container">
                    <h2 class="display-2" style="text-align:center;color:#fff">Student Details</h2>
                    <hr class="my-2">
                    <div class="col-md-6 col-md-offset-3" id="">

                        <div class="">
                            Student Name: <?php  echo $nm; ?>
                        </div>
                        <div class="">
                            Gender: <?php echo $rec['gender'] ; ?>
                        </div>
                        <div class="">
                            Addmition Number: <?php echo $rec['addno'] ; ?>
                        </div>
                        <div class="">
                            Entry Date: <?php echo $rec['entrydate'] ; ?>
                        </div>
                        <div class="">
                            Parent Name: <?php echo $rec['parentname'] ; ?>
                        </div>
                        <div class="">
                            Contact Number: <?php echo $rec['connumber'] ; ?>
                        </div>
                        <div class="">
                            Address: <?php echo $rec['address'] ; ?>
                        </div>
                        <form>
                            <div class="form-group" id="result">

                                <input type="submit" value="print" onclick="myFunction()" id="print"
                                    class="btn btn-primary btn-md" onclick="return false">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- print function -->
    <script>
        function myFunction() {
            window.print();
        }
    </script>

    <?php
    }
    function addSubjectDetails($sid,$sname){
        // create connection
         $dbConn=connection();
         
         if(empty($sname)){
            return "please enter required filds";
     }else{
          //upload new data into the database
          $sqlInsert="INSERT INTO subject(subjectname) VALUES('$sname')";
           echo $sqlInsert;
           $sqlResult=mysqli_query($dbConn,$sqlInsert);
             return "Success";
      
     }
     
        
         }
 

         function createclass($className,$classGrade){
             $user=$_SESSION['user'];
             $dbConn=connection();
             $uid="SELECT uid FROM ereportuser WHERE fname='$user' ;";
             $nationalIc="SELECT nic FROM ereportuser WHERE fname='$user' ;";
             $sqlResult=mysqli_query($dbConn,$uid);
             $rec=mysqli_fetch_assoc($sqlResult);
             $sqlResult_nic=mysqli_query($dbConn,$nationalIc);
             $rec_nic=mysqli_fetch_assoc($sqlResult_nic);
             $nic = $rec_nic['nic'];
             $user_id = $rec['uid'];
            
            $sqlInsert="INSERT INTO class_create_user(classname,grade,uid, nic) VALUES('$className',$classGrade,$user_id,'$nic')";
           
           $sqlResult=mysqli_query($dbConn,$sqlInsert);
           if($sqlResult>0){
              return "Success";
          }else{
              return"error";
          }
         }


    ?>
    <?php
    function student_enrole_class($className,$classGrade,$classYear){
        $dbConn=connection();
        $sqlInsert="INSERT INTO student_enrole_class(classname,grade,year) VALUES('$className',$classGrade,$classYear)";
        $sqlResult=mysqli_query($dbConn,$sqlInsert);
        if($sqlResult>0){
           return "Success";
       }else{
           return"error";
       }
    }

    ?>
    <?php
    //search dropdown
//     function enrolStudent(){

// $dbconn=connection();
// $sql_get="SELECT student FROM fname;";
// $result=mysqli_query($dbconn,$sql_get);
// $nor=mysqli_num_rows($result);

// if($nor>0){
//     while ($rec=mysqli_fetch_assoc($result)){
//       echo("<option value=>".$rec["student"]."</option>");
//     };
// }

// }
?>