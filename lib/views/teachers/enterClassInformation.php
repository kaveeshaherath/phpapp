<div class="container-fluid" id="siba">
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-4" id="classDetails">
                <div class="jumbotron">
                    <div class="container">
                        <h4>Enter Class Information</h4>
                        <div class="col-md-12">
                            <form id="createClass">
                                <div class="form-group">
                                    <!-- <label for="">Select Your Class</label> -->
                                    <select name="classGrade" id="classGrade" class="form-control">
                                        <option value="0">Select Grade</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <!-- <label for="">Select Your Grade</label> -->
                                    <select name="className" id="className" class="form-control">
                                        <option value="0">Select Class</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Select Your Year</label>
                                    <select name="classYear" id="classYear" class="form-control">
                                        <option value="0">Select one</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info" id="classCreateBtn" onclick="return false"
                                        style="display:none">Save Class Room</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8" id="searchStudent">

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $("#classYear").change(function () {
            $className = $("#className").val();
            $classGrade = $("#classGrade").val();
            $classYear = $("#classYear").val();
            if ($className != "0" && $classGrade != "0" && $classYear != "0") {
                $("#classCreateBtn").show();

            }

            $("#classCreateBtn").click(function () {
                $("#searchStudent").load("teachers/searchStudentDetails1.php");
                $.post("../ajax/student/class/createClass.php",{name:$className,grade:$classGrade},function(data){
                    alert(data);
                })
            //e.preventDefault();

            })
        })




    })
</script>