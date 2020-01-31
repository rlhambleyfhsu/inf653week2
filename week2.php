<?php
// Author Robert Hambley
// INF653 - week 2
  if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])){
  
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $fullname = $firstname.' '.$lastname;

    echo "Hello, my name is $fullname.";
    $age = $_GET['age'];
    //check the age for voting eligibility
    if ($age < "18") {
      echo "I am $age years old and I am not old enough to vote in the United States.";
    }
    else {
      echo "I am $age years old and I am  old enough to vote in the United States.";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Week 2 GET Assignment</title>
</head>
<body>
  <form method="GET" action="week2.php">
      <div>
          <label>First Name</label><br>
          <input type="text" name="firstname">
      </div>
      <div>
          <label>Last Name</label><br>
          <input type="text" name="lastname">
      </div>
      <div>
          <label>Age</label><br>
          <input type="text" name="age">
      </div>
      <input type="submit" value="Submit">
  </form>
</body> </html>
