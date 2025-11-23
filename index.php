<?php
session_start();
if(isset($_SESSION['na'])){
    echo"welcome".$_SESSION['na'];
    }
    else{
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management System - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f9ff;
            color: #333;
            display: flex;
            flex-direction: column;
            
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 1rem 2rem;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: center;
            background: skyblue;
            padding: 0.8rem;
            position: relative;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1.2rem;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ffdd57;
        }

        .log {
            position: absolute;
            right: 0.5rem;
           
            background: #dc3545;
            color: white;
            padding: 0.5rem 0rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            text-align: center;
        }

        .log:hover {
            background: #b52a37;
        }

        .hero {
            background: url('k.jpg') no-repeat center/cover;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 2rem;
        }

        .hero h1 {
            font-size: 2.8rem;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 8px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-top: 1rem;
            background: rgba(0, 0, 0, 0.4);
            padding: 10px 20px;
            border-radius: 8px;
        }

        .content {
            flex: 1;
            padding: 3rem 10%;
            text-align: center;
        }

        .content h2 {
            color: #007BFF;
            margin-bottom: 1rem;
        }

        .content p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
        }

        footer span {
            color: #00b7ff;
            font-weight: bold;
        }
    </style>
</head>
<body>
   
    <header>
        <h1> EVENT MANAGEMENT SYSTEM 💕</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="insert.php">Events</a>
    <a href="userform.php">USER_Form</a>
        <a href="">About Us</a>
        <a href="report.php">Review_Event Us</a>

        <a href="#">Contact Us</a>
        <a href="login.php">LOGIN</a>
        <a href="userform.php">Sign_UP</a>
        <div class="log">
        <a href="logout.php">Logout</a>
        </div>
    </nav>
    

    <section class="hero">
        <h1>Welcome to the Event Management System</h1>
        <p>Plan, Manage, and Attend Events Easily and Efficiently!</p>
    </section>

    <div class="content">
        <h2>Our Mission</h2>
        <p>
            We aim to simplify the process of organizing and managing events. Whether you are planning a conference, concert, or workshop,
            our platform provides all the tools you need — from creating events to tracking registrations.
        </p>
    </div>

    <footer>
        <p>COPYRIGHT &copy; 2025 <span>JULISSA</span>. All Rights Reserved.</p>
    </footer>
</body>
</html>

