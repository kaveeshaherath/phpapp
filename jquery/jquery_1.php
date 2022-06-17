<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
   <script src="../JS/jquery-3.1.1.min.js"></script>
   <!-- <script src="../JS/bootstrap.min.js"></script> -->
</head>
<body>
    
<button id="test">Click Me</button>

<span id="result"></span>

    <script>
        $(document).ready(function(){
            $("#test").click(function(){
               $("#result").html("Done");
            })
        })
    
    </script>
</body>
</html>