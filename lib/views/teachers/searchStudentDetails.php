<div class="container" id="siba">
    <div class="row">
        <div class="jumbotron">
            <div class="container">
                <h3>Find Student Details</h3>
                <div id="classDetails">
                
                </div>
                
                    <form>
                        <div class="col-md-8" id="data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search.." name="search2" id="search2">
                                </div>
                            </div>
                            <div class="col-md-2">
                            <div class="form-group">
                           <a href="printStudentDetails.php" ><button class="btn btn-info" id="serBtn" onclick="return false">Search Student</button></a>

                            
                        </div>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
<script src="../../JS/jquery-3.1.1.min.js"></script>
<script src="../../JS/bootstrap.min.js"></script>
<script src="../../JS/cus.js"></script>
<script>
     $(document).ready(function(){
         
         $newClassName = $className + "" + $classGrade;

         $("#Name").val($newClassName);
         $("#year").val($classYear);
     })
</script>

