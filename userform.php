<?php
include'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
        background: #fafafa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        width: 320px;
        padding: 25px;
        background: #fff;
        border: 1px solid #dbdbdb;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
    }

    form h2 {
        text-align: center;
        font-weight: 600;
        margin-bottom: 20px;
        color: #262626;
        font-size: 22px;
    }

    input {
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #dbdbdb;
        border-radius: 6px;
        background: #fafafa;
        font-size: 14px;
    }

    input:focus {
        outline: none;
        border-color: #a8a8a8;
    }

    button {
        background: #0095f6;
        color: white;
    }

    </style>
</head>
<body>
    <a href="index.php">BACT_TO_HOME</a>
    <form action="" method="POST">
        User_name <br>
        <input type="text" name="name" id=""> <br><br>
        Password <br>
        <input type="password" name="pass" id=""> <br><br>
        E_mail <br>
        <input type="email" name="email" id=""><br>
        
        <button type="submit"name="sub">Sign_Up</button>
        <a href="login.php">SIGN_IN</a>



    </form>
<?php
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $pas=$_POST['pass'];
    $emai=$_POST['email'];
    $selt=mysqli_query($con,"select * from user where password='$pas'");
    $fet=mysqli_fetch_array($selt);
    if(is_array($fet)){
    
        echo"Already exist!😭🙏🙏🙏😁";
    }
    else{
    $query=mysqli_query($con,"insert into user(username,password,email) values('$name','$pas','$emai')");
    if($query>0){
        echo"<script>alert('user created successful')</script>";
    }
    else{
        echo"<script>alert('failed to create user')</script>";

    }
    }
}


?>
<br><br><br><br><br><br><br>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
           <tr>
        <th>USER_ID</th>
        <th>User_name</th>
        <th>USER_password</th>
        <th>USER_Email</th>
        <th>action</th>
    </tr>
    
 <?php
    $sel=mysqli_query($con,"select * from user");
    while($f=mysqli_fetch_array($sel)){
    ?>
    
 
    <tr>
        <td><?php echo $f['user_id'];?></td>
        <td><?php echo $f['username']; ?></td>
        <td><?php echo $f['password'];?></td>
        <td><?php echo $f['email'];?></td>
<td>
    <a href="up.php?a=<?php echo $f['user_id'];?>">EDIT</a>
    <a href="delet.php?b=<?php echo $f['user_id'];?>">DELETE</a>
    </td>
    </tr>


<?php
    }
?>
</table>

</body>
</html>

   