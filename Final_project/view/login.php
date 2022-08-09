<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
<body>
  <div class="Main">
      <div class="naBar">
        <div class="Icon">
             <center>
            
    <h1  class="LOGO"> MSTS Airline</h1>
<div class="loginFORM">
    <center>
         <h2>LOGIN</h2> 
     </center> 
     <form action="../model/loginAc.php" method= "post" novalidate onsubmit=" return validate()">
    <input type="text" name="uname" id = "uname" placeholder="Enter your Username" ><br><br>
    <input type="password" name="pass" id = "pass" placeholder="Enter your Password" ><br><br>
   
    <p class="link"><a href="../view/forget.php">Forget Password</a><br><a href = "../view/registration.php">Registration</a> <a href="../controller/Home Page.php"> Home </a><br></p><br>
    
    <button type="submit" name="submit" class="btn">Log In</button>
</form>

   </div>

</div>
</div>
</div>

    <script>
     function validate()
     {
       var uname=document.getElementById('uname');
       var pass=document.getElementById('pass');
       if(uname.value.trim()=="" || pass.value.trim()=="")
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