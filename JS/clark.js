$(document).ready(function(){
    $(".student").click(function(){
        $linkName=$(this).attr('id');
        if($linkName=="addStudent"){
            $("#loadViewOne").load("clark/EnterStudentDetails.php");
        }
        
    });



    $(".teacher").click(function(){
        $linkName=$(this).attr('id');
        if($linkName=="addTeacher"){
            $("#loadViewOne").load("clark/enterTeacherDetails.php");
        }
        
    });

    $(".subject").click(function(){
        $linkName=$(this).attr('id');
        if($linkName=="addSubject"){
            $("#loadViewOne").load("clark/enterSubjectDetails.php");
        }
        
    });
});