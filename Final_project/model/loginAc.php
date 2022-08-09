<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Action</title>
</head>
<body>

</body>
</html>

<?php

    session_start();

    if (isset($_POST['submit'])) 
        {

            function test($data) {
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $uname = test($_POST['uname']);
            $pass = test($_POST['pass']);


        $unameerr = $passerr = "";


        if(empty($_POST["uname"])){
        $unameerr = "Username Required!";
        echo $unameerr;
        }

        else if(empty($_POST["pass"])){
        $passerr = "Password Required!";
        echo $passerr;
        }

        else{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "Pilots";

     $conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];

$sql = "SELECT * FROM pilot where uname = '$uname' and pass = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows == 1) 
{

    $_SESSION['IS_LOGIN']='yes';
    header('location:../view/Home.php');
    die();
} 

else 
{
  echo "Please Enter Correct Username or Password!";
}

$conn->close();

}
}

        else 
        {
        echo "No valid request";
        }

?> 

    <br><br>
    <a href="../view/login.php"><button>Go Back</button></a>
    <br><br>
