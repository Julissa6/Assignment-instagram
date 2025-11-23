<?php
include"conn.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background: #fafafa;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

fieldset {
    width: 18rem;
    padding: 20px;
    border: 1px solid #dbdbdb;
    background: #fff;
    border-radius: 8px;
}

legend {
    font-weight: bold;
    color: #262626;
}

form {
    display: flex;
    flex-direction: column;
}

input {
    padding: 10px;
    margin: 6px 0 12px;
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
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
    font-size: 14px;
}

button:hover {
    background: #007cd1;
}

</style>
</head>
<body> <h1>Instagram</h1>
    <fieldset style="width:15rem; height: 50%;">
        <legend>Login_Form</legend>
    <form action=""method="POST">
        User_name <br>
        <input type="text" name="na" required><br>
        Pass_word <br>
        <input type="password" name="pass" id="" required><br>
       
         <button type="submit" name="sub">LOGIN</button>
         <a href="userform.php">Sign_UP</a>

    </form>
    </fieldset>
    
    <?php
    if(isset($_POST['sub'])){
        $user=$_POST['na'];
        $pa=$_POST['pass'];
        $selt=mysqli_query($con,"select * from user where username='$user' and password='$pa'");
        $fetch=mysqli_fetch_array($selt);
        if(is_array($fetch)){
            $_SESSION['na']=$_POST['na'];
            $_SESSION['pass']=$_POST['pass'];
            if(isset($_POST['na'])){
                setcookie("na",$user, time()+(86400*7));
            }
            header("location:index.php");


        }
else{
    echo"Invalid username and password";
}
    }


    ?>
</body>
</html>