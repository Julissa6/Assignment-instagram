<?php
include'conn.php';
$b=$_GET['b'];
$de=mysqli_query($con,"delete from user where user_id='$b'");
if($de){
    header("location:userform.php");
}
else{
header("location:userform.php");
}
    

?>