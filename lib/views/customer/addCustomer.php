

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="jumbotron jumbotron-fluid" style="background-color:#5f5f5f">
                    <div class="container">
                        <h2 class="display-2" style="text-align:center;color:#fff">Enter Teacher Details</h2>
                        <hr class="my-2">
                        <div class="col-md-6 col-md-offset-3" id="form_section">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="userId" id="userId" class="form-control"
                                        placeholder="Enter your ID">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="userName" id="userName" class="form-control"
                                        placeholder="Enter your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="userMail" id="userMail" class="form-control"
                                        placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="userNIC" id="userNIC" class="form-control"
                                        placeholder="Enter your NIC">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="userTel" id="userTel" class="form-control"
                                        placeholder="Enter your Number">
                                </div>
                                <div class="form-group">
                                    <textarea name="userAdd" id="userAdd" cols="30" rows="3" class="form-control"
                                        placeholder="Enter your Address"></textarea>
                                </div>
                                <div class="form-group" id="result">
                                    <input type="submit" value="Save" id="btnSave" class="btn btn-primary btn-md" onclick="return false">
                                    <input type="reset" value="clear" class="btn btn-warning btn-md">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script>
    //  $(document).ready(function(){
    //     $("#btnSave").click(function(){
            //click function body
            // $userId=$("#userId").val();
            // $userName=$("#userName").val();
            // $userMail=$("#userMail").val();
            // $Nic=$("#userNIC").val();
            // $tel=$("#userTel").val();
            // $address=$("#userAdd").val();
            //using ajax method we can send relavant data without refresh the browser
            //methods of ajax
            //1 $.post
            //2 $.get
            //3 $.ajax
//             if($userId.length!=""||$userName.length!=""||$Nic.length!=""){
//                 $.post("../ajax/customer/addCustomer.php",
//                 {id:$userId,name:$userName,mail:$userMail,nic:$Nic,tel:$tel,address:$address},
//                 function(data){
//                     $("#result").html(data);
//                     $("#form_section").blur();
//                 })
//             }
//             else{   
//                 alert("Please fill all the input fileds");
//             }
//         })
//      })
</script>