<!DOCTYPE html>
  <head>
  	<title>Registration</title>
  	<link rel="stylesheet" type="text/css" href="registration.css">
  </head>
  <body>
  	<div class="main">
  		<div class="navigationBar">
  			<div class="icon">
             <center>
                <h2 class="logo">MSTS Airline</h2> 
             </center>   
  			
  			</div>
          <div class="content">
            <h1><span> Ticket Reservation system</span><br></h1><br><br>
            <p1>Use Our Smart Tools to Help you Find the Best Deals for All Your travel Plans! <br>! Find and Compare Top Deals on Cheap Flights. Book with Confidence No Change Fees.<br> Simple search filters. Flexible booking. No booking fees. </p1>
          </div>
          <div class=" form">
          <form action="../controller/registrationAction.php" method="post" novalidate onsubmit="return validate()">

    <!-- first name  -->
      <h3 align="center" style="color: orange;">Sign Up</h3>
    
    <input type="text" name="fname" id ="fname" placeholder="First name">

    <!-- last name  -->

     <input type="text" name="lname" id ="lname" placeholder="Last name">
    <!-- user name  -->
   
     <input type="text" name="uname" id = "uname" placeholder="username">

    <!-- mobile no  -->
    
        <!-- <input type="number" name="mobno" id = "mobno" placeholder="Mobile No: 01*********"> -->
        <input type="tel" id="mobno" name="mobno" pattern="[0]{1}[1]{1}[1-9]{9}"required placeholder="Mobile No: 01*********">
   
     <!-- nid  -->

   
        <input type="number" name="nid" id = "nid" placeholder="NID No">

     <!-- email  -->

    
        <input type="email" name="email" id = " email" placeholder=" Email">

    <!-- DOB  -->
    
    
        <input type="date" name="dob" id = "dob" placeholder="DOB: Date of Birth">

    <!-- password  -->

        <input type="password" name="pass" id = "pass"  placeholder="password">

   <!-- confirm password  -->
    
        <input type="password" name="confirmpass" id = " confirmpass" placeholder="confirm password">
    
     <button type="submit" class="btn">Confirm</button>

     </form>
 
     <p class="link">I have an account<br>
     <a href="../view/login.php">Login</a></p><br>

     
     </div>
        </div>
  		</div>

        <script>
     function validate()
     {
       var fname=document.getElementById('fname');
       var lname=document.getElementById('lname');
       var uname=document.getElementById('uname');
       var mobno=document.getElementById('mobno');
       var email=document.getElementById('email');
       var nid=document.getElementById('nid');
       var dob=document.getElementById('dob');
       var pass=document.getElementById('pass');
       var confirmpass=document.getElementById('confirmpass');

       if(fname.value.trim()=="" || lname.value.trim()=="" || uname.value.trim()=="" || mobno.value.trim()=="" || nid.value.trim()=="" || dob.value.trim()=="" || email.value.trim()=="" || pass.value.trim()=="" || confirmpass.value.trim()=="")
       {
          alert('Fill all the fields');
          return false;
       }
       else
          return true;
     }
   </script>

 </body>
  </html>