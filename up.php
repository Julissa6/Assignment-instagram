<?php
include'conn.php';
$d=$_GET['a'];
$g=mysqli_query($con,"SELECT * from user where user_id='$d'");
$y=mysqli_fetch_array($g);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
             User_name <br>
        <input type="text" name="n" value="<?php echo $y['username'];?>"> <br><br>
        Password <br>
        <input type="password" name="p" value="<?php echo $y['password'];?>"> <br><br>
        E_mail <br>
        <input type="email" name="email" value="<?php echo $y['email'];?>"><br>
        <button type="submit" name="sub">Update_user</button>
</form>
    <?php
    
if(isset($_POST['sub'])){
    $n=$_POST['n'];
    $p=$_POST['p'];
    $emai=$_POST['email'];
    $que=mysqli_query($con,"UPDATE user set username='$n',password='$p',email='$emai' where user_id='$d'");
    if($que){
        header("location:userform.php");
        echo"updated user";
    }
    else{
        echo"failed";
    }
}

    ?>

</body>
</html>