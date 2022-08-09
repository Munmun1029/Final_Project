  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
</head>
<body>

  <?php
    
    session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") 
		{

			function test($data) {
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$fname = test($_POST['fname']);
			$lname = test($_POST['lname']);
			$uname = test($_POST['uname']);
			$mobno = test($_POST['mobno']);
			$email = test($_POST['email']);
			$dob = test($_POST['dob']);
			$nid = test($_POST['nid']);
			$pass = test($_POST['pass']);
			$confirmpass = test($_POST['confirmpass']);


		$fnameerr = $lnameerr = $unameerr = $mobnoerr = $emailerr = $doberr = $niderr = $passerr = $confirmpasserr = $matcherr = "";


        if (empty($_POST["fname"])) {
        $fnameerr = "First Name Required!";
        echo $fnameerr;
        }

		else if (empty($_POST["lname"])) {
		$lnameerr = "Last Name Required!";
		echo $lnameerr;
		}

	    else if(empty($_POST["uname"])){
	    $usernameerr = "Username Required!";
	    echo $unameerr;
		}

		else if(empty($_POST["mobno"])){
	    $mobnoerr = "Mobile Number Required!";
	    echo $mobnoerr;
		}

		else if(empty($_POST["email"])){
	    $emailerr = "Email Required!";
	    echo $emailerr;
		}

		else if(empty($_POST["dob"])){
	    $doberr = "Date of Birth Required!";
	    echo $doberr;
		}

		else if(empty($_POST["nid"])){
	    $niderr = "NID Number Required!";
	    echo $niderr;
		}

	    else if(empty($_POST["pass"])){
	    $passerr = "Password Required!";
	    echo $passerr;
		}

	    else if(empty($_POST["confirmpass"])){
	    $conpasserr = "Confirm Password Required!";
	    echo $confirmpasserr;
		}

	    else if(($_POST["confirmpass"]) !== ($_POST["pass"])){
	    $matcherr = "Password & Confirm Password Doesn't Match!";
	    echo $matcherr;
		}

			else 
			
			{ 

		   $servername = "localhost";
           $username = "root";
           $password = "";
           $database = "Pilots";

           $conn = new mysqli($servername, $username, $password, $database);

           if ($conn->connect_error) 
           {
              die("Connection failed: " . $conn->connect_error);
           }
            
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uname = $_POST["uname"];
			      $mobno = $_POST['mobno'];
			      $email = $_POST['email'];
			      $dob = $_POST['dob'];
			      $nid = $_POST['nid'];
            $pass = $_POST["pass"];

            $sql = "SELECT * FROM Pilot where uname = '$uname'";
            $result = $conn->query($sql);

           if ($result->num_rows == 1) 
           {
             echo "Use Different Username... This Username Already Exists!";
           } 

           else
           {  


   			$sql1 = "INSERT INTO pilot (fname, lname, uname, mobno, email, dob, nid, pass)
            VALUES ('$fname', '$lname' , '$uname' , '$mobno', '$email', '$dob', '$nid', '$pass')";

            if ($conn->query($sql1) === TRUE) 
            {
             echo "Registered Successfully";
            }


            else 
            {
             echo "Error: " . $sql1 . "<br>" . $conn->error;
            }

            $conn->close();
          }
		   }

		}
		
	    else 
	    {
		echo "No valid request";
	    }
    ?>

  <br><br>
	<a href=../view/registration.php><button>Go Back</button></a>
	<br><br>


</body>
</html>