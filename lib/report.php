<?php

roo price <input type="text">












?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        function sum() {
            var Room_pr = document.getElementById('Room_pr').value;
            var Date = document.getElementById('Date').value;
            var food = document.getElementById('food').value;
            var med = document.getElementById('med').value;
            var resul = 0;
            var resul1 = 0;
            var resul2 = 0;
            var result = parseFloat(Room_pr) * parseFloat(Date) + parseFloat(food) + parseFloat(med);
            var result1 = parseFloat(result) * 0.25;
            var result2 = parseFloat(result1) + parseFloat(result);
            if (!isNaN(result2)) {
                document.getElementById('Total').value = result2;
            }
        }

    </script>




    ?>