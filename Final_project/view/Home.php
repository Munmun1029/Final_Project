<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pilot Home Page</title>
	<link rel="stylesheet" type="text/css" href="Home.css"> 
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:../model/loginAc.php');
	die();
}
?>
	<div class="main">

    <br>
    <div class="sidebar">
    	<header>MSTS Airline</header>
    	<ul>

        <li><a href="../view/FSchedule.php"> <button>Flight Schedule</button> </a></li>
        <li><a href="#"> <button>Update Information</button></a> </a></li>
        <li><a href="#"><button>Notification</button> </a></li>
        <li><a href="#"> <button>Leave Application</button> </a></li>
        <li><a href="../controller/logout.php"><button>Logout</button></a></li>

        </ul>
   </div>

<div class="info">
  <ul>
    <li>Pilot Name: Farhana Yeasmin Munmun</li>
    <br>
    <li>Username: Mun </li>
    <br>
    <li>Mobile: 01234567891</li>
    <br>
    <li>Email: mun@gmail.com</li>
    <br>
    <li>Date of Birth: 30/07/2000</li>
  </ul>
</div>

 </div>
</body>
</html>

