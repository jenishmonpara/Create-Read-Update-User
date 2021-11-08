<?php  

include('dbconf.php');

$empid = $_SESSION['empid'];

$sql = "query var";

if(isset($_POST['newmobileno'])){
        $newmobileno = $_POST['newmobileno'];
        echo $newmobileno;
        echo $empid;
        $sql = "update emp set mobileno = $newmobileno where empid = '$empid'";
        echo $sql;
}

if(isset($_POST['newemail'])){
        $newemail = $_POST['newemail'];
        $sql = "update emp set email = '$newemail' where empid = '$empid'";
        echo $sql;
}

echo mysqli_query($conn,$sql);


header('location:profile.php');

?>