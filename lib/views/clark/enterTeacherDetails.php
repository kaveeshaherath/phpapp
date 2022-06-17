<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="col-md-6" id="classDetails">
                <div class="jumbotron">
                    <div class="container">
                        <h4>Enter User's Details</h4>
                        <div class="col-md-12">
                            <form id="techer_data">
                                <div class="form-group">
                                    NIC Number: <input type="text" name="nic" data_validation="required">
                                </div>
                                <div class="form-group">
                                    User Pass Word: <input type="text" name="pw" data_validation="required">
                                </div>

                                <div class="form-group">
                                    Address: <input type="text" name="add" data_validation="required">
                                </div>

                                <div class="form-group">
                                    Mr: <input type="radio" name="m" data_validation="required" value='Mr' checked> Ms:
                                    <input type="radio" name="m" value='Ms' data_validation="required">
                                </div>
                                <div class="form-group">
                                    First Name: <input type="text" name="fname" data_validation="required">
                                </div>
                                <div class="form-group">
                                    Middle Name: <input type="text" name="mname" data_validation="required">
                                </div>
                                <div class="form-group">
                                    Last Name: <input type="text" name="lname" data_validation="required">
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="add" class="btn btn-info" id="btnSave" name="btnSave"
                                        onclick="return false">
                                    <input type="reset" value="clear" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    //for form validation 
    // $.validate({
    //     modules : 'location, date, security, file',

    // });

    $(document).ready(function () {
        $("#btnSave").click(function () {
            $.ajax({
                url: "../ajax/teacher/addteacher.php",
                type: "POST",
                data: $("#techer_data").serialize(),
                success: function (data) {
                    alert(data);
                }
            })



        })
    })
</script>