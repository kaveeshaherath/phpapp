<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/cuss/bootstrap.min.css">
<style>

.h1 {
  border-left: 6px solid green;
  background-color: lightgrey;
  border-radius: 20px;
}

    /* table style */
    #report {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 25%;
}

#report td, #report th {
  border: 1px solid #ddd;
  padding: 8px;
}

#report tr:nth-child(even){background-color: #f2f2f2;}

#report tr:hover {background-color: #ddd;}

#report th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}










/* form style */

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 60%;
  padding: 10px;
  border: 1.5px solid #ccc;
  border-radius: 20px;
  resize: vertical;
}

label {
  padding: 10px 10px 10px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.col-55 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


/* .row:after {
  content: "";
  display: table;
  clear: both;
} */

/* 
@media screen and (max-width: 600px) {
  .col-25, .col-75,.col-55, input[type=submit] {
    width: 100%;
    margin-top: 0;
  } */
}
</style>
</head>
<body>
<div class="h1">
<center>
<h2>Student Proggress Report</h2>
</center>
</div>



<!-- form -->
<center>
<div class="container">
  <form action="">

  <div class="row">
    <div class="col-25">
      <label for="stname">Student Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="stname" name="Student Name:" placeholder="Your name..">
    </div>
  </div>



  <div class="row">
    <div class="col-25">
      <label for="admissionnumber:">admission number</label>
    </div>
    <div class="col-75">
      <input type="text" id="admissionnumber" name="Admission Number:" placeholder="Your Admission number">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="Class:">Class</label>
    </div>
    <div class="col-75">
      <input type="text" id="Class" name="Class:" placeholder="Your Class.">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="Year:">year</label>
    </div>
    <div class="col-75">
      <input type="text" id="year" name="Year:" placeholder="Year">
    </div>
  </div>



  <div class="row">
    <div class="col-25">
      <label for="Term:">Term</label>
    </div>
    <div class="col-75">
      <input type="text" id="Term" name="Term:" placeholder="Your Term:">
    </div>
  </div>

  <table id="report">
  <tr>
    <th>Subject</th>
    <th>Marks</th>
    
  </tr>
  <tr>
    <td>Science</td>
    <td>78</td>
  
  </tr>
  <tr>
    <td>sinhala</td>
    <td>58</td>
   
  </tr>
  <tr>
    <td>English</td>
    <td>85</td>
  
  </tr>
  <tr>
    <td>Maths</td>
    <td>85</td>
    
  </tr>
  <tr>
    <td>Music</td>
    <td>89</td>
  
  </tr>

  <tr>
    <td>Civics</td>
    <td>90</td>
  
  </tr>

  <tr>
    <td>Helth</td>
    <td>25</td>
  
  </tr>
 
</table>

















<!-- after table -->


  <div class="row">
    <div class="col-25">
      <label for="Total">Total</label>
    </div>
    <div class="col-55">
      <input type="text" id="Total" name="Total" placeholder="Your total marks">
    </div>
  </div>



  <div class="row">
    <div class="col-25">
      <label for="Average">Average</label>
    </div>
    <div class="col-55">
      <input type="text" id="Average" name="Average" placeholder="Your Average:">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="Rank">Rank</label>
    </div>
    <div class="col-55">
      <input type="text" id="Rank" name="Rank" placeholder="Your Rank:">
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="Numofstu">Number of students</label>
    </div>
    <div class="col-55">
      <input type="text" id="Numofstu" name="Numofstu" placeholder="Number of students">
    </div>
  </div>




 

  <div class="row">
    <div class="col-25">
      <label for="Comments">Comments</label>
    </div>
    <div class="col-75">
      <textarea id="comments" name="comments" placeholder="comment" style="height:200px"></textarea>
    </div>
  </div>
  <br>


  <div class="row col-md-offset-8 col-md-3">
    <input type="submit" value="Print">
  </div>
  </form>
</div>
</center>
</body>
</html>