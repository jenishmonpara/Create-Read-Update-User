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

<div class = "header"> <h2>LogIn</h2></div>

<form action = "loginserver.php" method = "post">
<div class="mb-3">
  <label for="empid" class="form-label">Employee ID</label>
  <input type="text" name = "empid" class="form-control" placeholder="example : jm" required>
</div>
<div class="mb-3">
  <label for="passwd" class="form-label">Password</label>
  <input type="password" name = "passwd" class="form-control" placeholder="Enter your password" required>
</div>
<button type = "submit" name = "loginsubmit">Submit</button>

</form>
</body>
</div>
</html>