<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

.header {
  padding: 30px;
  text-align: center;
  background-image: url('./download.jpeg');
  color: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
input#billamt {
    padding: 14px;
}

input#Name {
    padding: 14px;
}
/* Name */
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}
.amt {
    margin-top: 28px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
  <?php	
$x=$_POST['unitcurrect'];
$n=$_POST['name'];
$sum=$x+$y;

if ($x < 50) {
   $sum=$x*9;
} elseif ($x < 100) {
    $y=($x-50)*12;
    $sum=450+$y;
} else {
    $y=($x-100)*15;
    $sum=1050+$y;
    
}

// <?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("Electricity bill", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
// if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into students(name,bill ) values ('$n',' $x')");

}
mysql_close($connection); // Closing Connection with Server
// ?>

?>

<div class="header">
  <h1>Electicity Bill Calculator</h1>
  <p>Calculate your Electricity Bill in one Go...</p>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;text-align: center;">
        <form method="post">
        <input type="text" placeholder="Enter  Name" id="Name" name="name">
        <input type="text" placeholder="Enter Electricity Units" id="billamt" name="unitcurrect">
        <input type="text" value="<?php echo @$sum;?>"/><hr/>
      <div class="amt">
        <input type="submit" class="btn btn-primary">Calculate Amount</button>      </div>
      </div>
    </form>
      <!-- <p>Some text..</p> -->
      <!-- <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
    </div>
    <div class="card">
      <h2 id="welcome">Billing Info</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg bhbuj" style="height:200px;" id="discription">
      <p id="ownerName">For The First 50 Unit Electicity : 9 Rs/unit</p>
      <p id="billAmoumt">For The Next 50 Unit Electicity : 12 Rs/unit</p>
      <p id="blank">and above it :15 Rs/unit</p>
      <!-- <span id="">cd</span></div> -->
      <!-- <div  id="discrResult">Image</div> -->
    </div>
  </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <!-- <h2>About Me</h2> -->
      <div class="fakeimg" style="height:100px; background-image: url('./images.jpeg');" ></div>
      <!-- <p>Some text about me in culpa qui officia deserunt mollit anim..</p> -->
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p><img style="width: 20vw;" src="./Save-Electricity-Slogans.jpg"></p></div>
      <!-- <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div> -->
    </div>
    <!-- <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div> -->
  </div>
</div>
<!-- </div> -->
<!-- 
<div class="footer">
  <h2>Footer</h2>
</div> -->




</body>
</html>