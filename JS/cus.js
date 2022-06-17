$(document).ready(function(){
    

    $("#createClass").click(function(){
        $("#loadView").load("teachers/enterClassInformation.php");
    })

    $("#viewCus").click(function(){
        $("#loadView").load("../ajax/customer/viewCustomers.php");
    })

    // $("#addStudent").click(function(){
    //     $("#loadViewOne").load("clark/EnterStudentDetails.php");
    // })

    $("#stdDet").click(function(){
        $("#loadView").load("teachers/searchStudentDetails.php");       
    })
    $("#serBtn").click(function(){
        var x=$("#search2").val();
        $("#loadSubView").load("teachers/showStudentDetails.php?no="+x);
        
    })
    $("#crtRep").click(function(){
        $("#loadView").load("teachers\EeterMarksNew.php");       
    })
    $("#addSubject").click(function(){
        $("#loadView").load("clark/EnterStudentDetails.php");       
    })
})