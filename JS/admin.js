
$(document).ready(function(){

    $("#viewCus").click(function(){
        $("#loadView").load("admin/searchStudentDetails.php");       
    })
    $("#serBtn").click(function(){
        var x=$("#search2").val();
        $("#loadView").load("admin/showStudentDetails.php?no="+x);
        
    })
    $("#crtRep").click(function(){
        $("#loadView").load("teachers\EnterMarksNew.php");       
    })
 
    $("#student").click(function(){
        $("#loadView").load("admin/showStudentDetails.php");
    })
    $("#serBtn").click(function(){
        var y=$("#search2").val();
        $("#loadView").load("admin/showTeacherDetails.php?no="+y);      
    })

    $("#addCus").click(function(){
        $("#loadView").load("admin/searchStudentDetails.php");      
    })
})