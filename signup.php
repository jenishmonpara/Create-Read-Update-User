<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<div class = "container">
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class = "header"> <h2>SignUp</h2></div>

<form action = "signupserver.php" method="post">

<div class="mb-3">
  <label for="empid" class="form-label">Emp ID</label>
  <input type="text" name = "empid" class="form-control" placeholder="[Initial of firstname][Initial of Lastname]" required>
</div>

<div class="mb-3">
  <label for="Name" class="form-label">Name</label>
  <input type="text" name = "name" class="form-control" placeholder="firstname lastname"required>
</div>
<div class="mb-3">
  <label for="doj" class="form-label">Date of Joining</label>
  <input type="date" name = "doj" class="form-control"required>
</div>
<div class="mb-3">
  <label for="salary" class="form-label">Salary</label>
  <input type="number" name= "salary" class="form-control" placeholder="Enter a positive number"required>
</div>
<div class="mb-3">
  <label for="department" class="form-label">Department</label>
  <input type="text" name = "department" class="form-control" placeholder="Example : Human Resource" required>
</div>
<div class="mb-3">
  <label for="mobileno" class="form-label">Mobile Number</label>
  <input type="number" name = "mobileno"class="form-control" placeholder="10 digit number"required>
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" name="email"class="form-control" placeholder="example@gmail.com" required>
</div>
<div class="mb-3">
  <label for="passwd" class="form-label">Password</label>
  <input type="password" name="passwd" class="form-control" placeholder="Minimum 6 char long"required>
</div>
<div class="mb-3">
  <label for="passwd" class="form-label">Confirm Password</label>
  <input type="password" name="confpasswd" class="form-control" placeholder="Re Enter password"required>
</div>

<button type = "submit" class="btn btn-outline-primary" name = "signupsubmit">Submit</button>

</form>
<p>Already a user? <a href = "login.php"><b>Login</b></a></p>
 
</body>
</div>

</html>