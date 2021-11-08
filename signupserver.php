<?php  

include('dbconf.php');

$empid = $_POST['empid'];
$email = $_POST['email'];
$name = $_POST['name'];
$mobileno = $_POST['mobileno'];
$doj = $_POST['doj'];
$passwd = $_POST['passwd'];
$confpasswd = $_POST['confpasswd'];
$salary = $_POST['salary'];
$department = $_POST['department'];

if($passwd != $confpasswd){
        echo "         !!Re-entered password does not match. Please enter again.";
        sleep(3);
        header('location:signup.php');
}

$sql = "insert into emp values('$empid','$passwd','$name','$doj','$salary','$department','$mobileno','$email')";

$result = mysqli_query($conn,$sql);

echo '\nQuery execution status: ' + $result;


?>