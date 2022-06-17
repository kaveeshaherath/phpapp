<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enter students marks</title>
    <link rel="stylesheet" href="../../../style/bootwatch.min.css">
    <style>
        body {
            background-image: url(../../../images/Image-01.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class='jumbotron'>
            <div class="row">
                <div class="col-md-8" style="padding-top:20px;">
                    <h1 class="disply-3" style="text-align:center;padding-bottom:30px;">Enter the students marks</h1>

                    <form action="">
                        <div>
                            <p>
                                <fieldset>

                                <label for="Term">Term:</label>
                                <select id="term" id="marks_data">
                                    <option value="1">1<sup>st</sup></option>
                                    <option value="2">2<sup>nd</sup></option>
                                    <option value="3">3<sup>rd</sup></option>
                                </select>
                                </fieldset>
                            </p>
                        </div>
                    </form>
                    <form id="form-data">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Student Index No</th>
                                    <th scope="col">Sinhala</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Maths</th>
                            <th scope="col">Science</th>
                            <th scope="col">English</th>
                            <th scope="col">History</th>
                            <th scope="col">Geography</th>
                            <th scope="col">Civcs</th>
                            <th scope="col">P.T.S</th>
                            <th scope="col">Tamil</th>
                            <th scope="col">Health</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Avarage</th>
                            <th scope="col">Rank</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><input type="text" name="Sinhala" id="Sinhala" class="form-control prc"></td>
                                    <td><input type="text" name="History" id="History" class="form-control prc"></td>
                                    <td><input type="text" name="Total" id="Total" class="form-control prc"></td>
                                </tr>
                                <?php
                     
                          echo("<tr>");                  
                          echo('<th > <input type="text" name="StudentID" id="StudentID"" class="form-control prc"></th>');
                          echo('<td><input type="text" name="Sinhala" id="Sinhala" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Religion" id="Religion" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Maths" id="Maths" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Science" id="Science" class="form-control prc"></td>');
                          echo('<td><input type="text" name="English" id="English" class="form-control prc"></td>');
                          echo('<td><input type="text" name="History" id="History" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Geography" id="Geography" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Civcs" id="Civcs" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Music" id="Music" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Art" id="Art" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Dancing" id="Dancing" class="form-control prc"></td>');
                          echo('<td><input type="text" name="P.T.S" id="P.T.S" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Tamil id="Tamil" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Health" id="Health" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Total" id="Total" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Avarage" id="Avarage" class="form-control prc"></td>');
                          echo('<td><input type="text" name="Rank" id="Rank" class="form-control prc"></td>');

                          echo("</tr>");
                      
                     
                     ?>
                            </tbody>
                        </table>

                       <div class="form-group">  
                     <input type="button" class="btn btn-primary " value="save"> -->
                         <input type="submit" class="btn btn-warning " id="crerep" value="Create report">  
                    </div> 
                        <div class="form-group">
                            <button class="btn btn-info" id="btnSave" onclick="return false">Create Report</button>
                            <button class="btn btn-danger" id="#" value="clear">clear</button> 
                        </div>

                </form> 
                         
                            
                        <div>
                <form action="">
                         <p>   <fieldset> 

                        <label for="Term"></label>
                    <select id = "term">
                    <option value = "1"> EDit My class Students </option>
                    <option value = "1">Add Students</option>
                    <option value = "2">Delete Students</option> 

                        </select>
                        </fieldset>
                        </p>

                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<script>
    //for form validation 
    $.validate({
        modules: 'location, date, security, file',

    });



    $(document).ready(function () {
        $("#btnSave").click(function () {
            $.ajax({
                url: "../ajax/marks/addMarks.php",
                type: "POST",
                data: $("#marks_data").serialize(),
                success: function (data) {
                    alert(data); -->
                }


            })
        })
    })
</script>
<script src="../../../JS/jquery.min.js"></script>
<!-- new part -->
<script>
    $('.form-group').on('input', '.prc', function () {
        var totalSum = 0;
        $('.form-group .prc').each(function () {
            var inputVal = $(this).val();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#Total').val(totalSum);
    });
</script>