<?php  

include('dbconf.php');

$empid = $_POST['empid'];
$passwd = $_POST['passwd'];



$sql = "select passwd from emp where empid = '$empid';";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($passwd == $row['passwd']){
        echo "\n Correct password   ";
        // echo $passwd;
        // echo "  ";
        // echo $row['passwd'];
        $_SESSION['empid'] = $empid;
        header('location:profile.php');
}
else{
        echo "\nInvalid username or password\n";
}

?>