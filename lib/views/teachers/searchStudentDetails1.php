<link rel="stylesheet" href="../../css/searchStudentDetails1.css">
<div class="container" id="siba">
    <div class="row">
        <div class="jumbotron">
            <div class="container">
                <h3>Enrole Students</h3>
                <div id="classDetails">
                </div>
                    <form id=enroleStudent>
                        <div class="col-md-8" id="data">
                                
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="Name" id="Name" class="form-control" readonly  require>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                 <input type="text" name="year" id="year" class="form-control" readonly require>
                                </div>
                            </div>
                            <br> <br> 
                            <div class="col-md-4">
                            <div class="search-box">
                            <input type="text" autocomplete="off" placeholder="SEARCH STUDENTS...." />
                             <div class="result"></div>
                                 </div>
                                 <br>
                                 <br>
                                 <div class="col-md-2">
                            <div class="form-group">
                              <!-- ........... -->
                                <!-- <div name="classGrade" id="classGrade"></div>
                                <div name="className" id="className"></div> -->

                              <!-- ........... -->
                            <button class="btn btn-info" id="classCreateBtn">Enroll</button>
                        </div>
                            </div>
                       
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>

<script src="../../JS/jquery-1.12.4.min"></script>
<script type="text/javascript">
     $(document).ready(function(){
         
         $newClassName = $classGrade + "" + $className;

         $("#Name").val($newClassName);
         $("#year").val($classYear);
        //  $("#classGrade").val($classGrade);
        //  $("#className").val($className);
     
     $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("../views/teachers/backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});

// $(document).ready(function(){
//             $("#classCreateBtn").click(function(e){
//                 $.ajax({
//                     url:"../../ajax/student/class/enroleStudent.php",
//                     type:"POST",
//                     data:$("#enroleStudent").serialize(),
//                     success:function(data){
//                         alert(data);
//                     }
                    

//                 })
//                 e.preventDefault();
               
//             })
//         })


</script>
