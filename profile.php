<?php

include("dbconf.php");

$empid = $_SESSION['empid'];
$GLOBALS['empid'] = $empid;

$sql = "select * from emp where empid = '$empid'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$mobileno = $row['mobileno'];
$email = $row['email'];
$salary = $row['salary'];
$mobileno = $row['mobileno'];
$doj = $row['doj'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class = "container">
<body>

<div class="container">
<div class="header">
	<h2> Profile </h2>
</div>

<table class="table table-dark table-hover">
  <thead>
     <tr>
      <th scope="col">Field</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table">
      <th scope="row">Empoyee ID: </th>
      <td><?php echo $GLOBALS['empid']; ?></td>
    </tr>
    <tr class="table">
      <th scope="row">Password: </th>
      <td><?php echo $row["passwd"]; ?></td>
    </tr>
    <tr class="table">
      <th scope="row">Empoyee Name: </th>
      <td><?php echo $row["empname"]; ?></td>
    </tr>
    <tr class="table">
      <th scope="row">Date of Joining: </th>
      <td><?php echo $row["doj"]; ?></td>
    </tr>
    <tr class="table">
      <th scope="row">Salary: </th>
      <td><?php echo $row["salary"]; ?></td>
    </tr>
    <tr class="table">
      <th scope="row">Department: </th>
      <td><?php echo $row["department"]; ?></td>
    </tr>
    <tr class="table">
      <th scope="row">Mobile No.: </th>
      <td><?php echo $row["mobileno"]; ?></td>
    </tr>
    
    <tr class="table">
      <th scope="row">Email ID: </th>
      <td><?php echo $row["email"]; ?></td>
    </tr>
  </tbody>
</table>
</div>

<form action = "update.php" method = "post">
<button type = "submit" class="btn btn-outline-primary" name = "updatesubmit">Update</button>
</form>


<a href = "signup.php">
<button type = "button" class="btn btn-outline-primary" name = "logout" >
        Logout
</button>
</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>

</div>

</html