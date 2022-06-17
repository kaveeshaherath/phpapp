<script src="../../JS/jquery-3.1.1.min.js"></script>
<script src="../../validation/jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
<script type="text/javascript" src="../../../datapicker/js/jquery.plugin.js"></script> 
<script type="text/javascript" src="../../../datapicker/js/jquery.datepick.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-6" id="classDetails">
                    <div class="jumbotron">
                        <div class="container">
                            <h4>Enter Subject Details</h4>
                            <div class="col-md-12">
                                <form style=color:black id="subject_data"> 
                                    <!-- <div class="form-group">
                                        Subject ID: <input type="text" name="sid" data-validation="required" >
                                    </div> -->
                                    <div class="form-group">
                                        Subject Name: <input type="text" name="sname"  data-validation="required">
                                    </div>
                             
                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-info" id="btnensub" >Add</button>
                                            <!-- <button class="btn btn-danger" id="#" value="clear">Clear</button> -->
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8" id="enterSubjectDetails">

                </div>
            </div>
        </div>
    </div>

    <script>
        //for form validation 
        $.validate({
            modules : 'location, date, security, file',
            
        });

      

        $(document).ready(function(){
            $("#btnensub").click(function(){

               // alert("ok add sub");
              $.ajax({
                  url:"../ajax/subject/addSubject.php",
                  type:"POST",
                  data:$("#subject_data").serialize(),
                  success:function(data){
                     alert(data);
                 }
                    

             })
            })
        })
    </script>