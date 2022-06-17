
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
                            <h4>Enter Student Details</h4>
                            <div class="col-md-12">
                                <form style=color:black id="student_data" method="post" > 
                                    <div class="form-group">
                                        First Name: <input type="text" name="fname" data-validation="required">
                                    </div>
                                    <div class="form-group">
                                        Mid Name: <input type="text" name="mname"  data-validation="required">
                                    </div>
                                    <div class="form-group">
                                        Last Name: <input type="text" name="lname"  data-validation="required">
                                    </div>

                                    <div class="form-group">
                                        Gender: Male <input type="radio" name="gender" value="male" checked> Female <input type="radio" name="gender" value="female"> 
                                    </div>
                                    <div class="form-group">
                                        Addmition Number: <input type="text" name="addno" data-validation="required">
                                    </div>
                                    <div class="form-group" $(dob).datepick();>
                                        Birthday: <input type="date" name="dob" data-validation="required" id="dob">
                                    </div>
                                    <div class="form-group">
                                        Entry Date: <input type="date" name="entrydate" data-validation="required" id="entryDate">
                                    </div>
                                    <div class="form-group">
                                        Parent Name: <input type="text" name="parentname" data-validation="required">
                                    </div>
                                    <div class="form-group">
                                        Contact Number: <input type="text" name="connumber" data-validation="required">
                                    </div>
                                    <div class="form-group">
                                        Address: <input type="text area" name="address" data-validation="required">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">

                                            <input type="submit" value="add" class="btn btn-info" id="btnSave" name="btnSave">
                                            <input type="reset" value="clear"class="btn btn-danger" >
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8" id="enterStudentDetails">

                </div>
            </div>
        </div>
    </div>

    <script>
        //for form validation 
        $.validate({
            modules : 'location, date, security, file',
            
        });

        function validate(){
            $.validate({
                modules : 'location, date, security, file',
            });
        }


      

        $(document).ready(function(){
            $("#btnSave").click(function(e){
                $.ajax({
                    url:"../ajax/student/addStudent.php",
                    type:"POST",
                    data:$("#student_data").serialize(),
                    success:function(data){
                        alert(data);
                    }
                    

                })
                e.preventDefault();
               
            })
        })

        
    </script>