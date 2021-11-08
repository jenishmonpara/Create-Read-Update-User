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

<div class = "header"> <h2>Update</h2></div>

<form action = "updateserver.php" method="post">

<div class="mb-3">
  <label for="mobile" class="form-label">New Mobile Number</label>
  <input type="text" name = "newmobileno" class="form-control" placeholder="10 digit number" required>
</div>

<button type = "submit" class="btn btn-outline-primary" name = "mobileupdatesubmit">Update Mobile Number</button>

</form>

<form action = "updateserver.php" method = "post">

<div class="mb-3">
  <label for="Name" class="form-label">New Email</label>
  <input type="email" name = "newemail" class="form-control" placeholder="newexample@gmail.com"required>
</div>

<button type = "submit" class="btn btn-outline-primary" name = "emailupdatesubmit">Update Email ID</button>

</form>

</br>
<a href = "profile.php"><b>Cancel Update</b></a>
 
</body>

</div>
</html>