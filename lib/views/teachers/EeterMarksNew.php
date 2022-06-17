<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../../../JS/jquery.js"></script>
    <link rel="stylesheet" href="../../../style/bootwatch.min.css">
    <title>Enter Student Marks</title>
</head>
<body>
    <table>
        <tr>
            <th>sinhala</th>
            <th>Maths</th>
            <th>history</th>
            <th>Total</th>
        </tr>
       <tr>
       <td><input type="text" id="t1" class="marks"></td>
        <td><input type="text" id="t2" class="marks"></td>
        <td><input type="text" id="t3" class="marks"></td>
        <td><input type="text" id="total"></td>
      </tr>
    </table>
    <script>
        $(document).ready(function(){
            $("#total").click(function(){
                var sum=0;
                 var avg=0;
                $(".marks").each(function(){
                    sum+=parseFloat($(this).val());
                    avg=sum/3;
                })
                $("#total").val(avg);
            })
        })

        
$(document).ready(function(){
    $("#crtRep").click(function(){
        $("#loadView").load("teachers/EeterMarksNew.php");
    });
});
    </script> 
</body>
</html>
