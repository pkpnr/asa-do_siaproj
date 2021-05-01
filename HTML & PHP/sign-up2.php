<html><head> 
  <title>signup form</title>
  <?php 
    $pgFileNm = 'sign-up2.php';
    include 'styles.php'; 
  ?>

 </head> 
 <body> 
  <!--this is for user name and password sign up-->
  <script src="../JS/signup.js"></script>
<div class="iformWrap"> 
  




<!--PAUSAB KO ANI RYLEEE PLS, DLI RECOMMENDED MAG-FORMAT UG CONTENTS THORUGH TABLES, DAPAT MAG-GAMIT UG CSS INSTEAD, THANKYOUUUU-->


 <form class="myForm" action="proc_signup.php" method="POST"> 
    <h3>Sign Up</h3> 
    <table> 
     <tbody class="tbody"> 
      <tr>
       <td>Student ID </td> 
       <td> <input type="number" id="studentID" name="StudentID" onblur="studentID();" placeholder="Enter student ID"> <span id="message7"></span> </td> 
      </tr> 
      <tr>
       <td>Email </td> 
       <td> <input type="email" id="email" name="Email" onblur="email();" placeholder="Enter email"> <span id="message8"></span> </td> 
      </tr> 
      <tr>
       <td>Username </td> 
       <td> <input type="text" id="username" name="Username" onblur="userName();" placeholder="Enter username"> <span id="message3"></span> </td> 
      </tr> 
      <tr> 
       <td> Passwrord </td> 
       <td><input type="password" id="passWord" name="Pwd" onblur="passW();" placeholder="Enter password"> <span id="message4"></span> </td> 
      </tr> 
      <tr> 
       <td> Confirm Passwrord </td> 
       <td><input type="password" id="confirmPass" name=re_Pwd onblur="conPass();" placeholder="Re-type password"> <span id="message6"></span> </td> 
      </tr> 
       </tbody> 
    </table>



    <!--PAUSAB KO ANI RYLEEE PLS, DLI RECOMMENDED MAG-FORMAT UG CONTENTS THORUGH TABLES, DAPAT MAG-GAMIT UG CSS INSTEAD, THANKYOUUUU-->








    

    <td><input type="submit" name="submit" value="Register" class="btn" onclick="Button();"></td>
   </form> 

   <?php
    if (isset($_GET["invalid"])) //error messages
    {
      if ($_GET["invalid"] == "noInp")
      {
        echo "<p>Please fill up all required fields.</p>";
      }
      else if ($_GET["invalid"] == "wrongSID")
      {
        echo "<p>Invalid Student ID. Please check again.</p>";
      }
      else if ($_GET["invalid"] == "wrongEmail")
      {
        echo "<p>E-mail address enetered is invalid. Please check again.</p>";
      }
      else if ($_GET["invalid"] == "wrongUsername")
      {
        echo "<p>Please choose a more suitable username.</p>";
      }
      else if ($_GET["invalid"] == "PwdNoMatch")
      {
        echo "<p>Passwords entered do not match. Please try again.</p>";
      }
      else if ($_GET["invalid"] == "UNameAlreadyTaken")
      {
        echo "<p>Username entered is already used by another student.</p>";
      }
      else if ($_GET["invalid"] == "stmtFail")
      {
        echo "<p>Something went wrong. Please try again.</p>";
      }
      else if ($_GET["invalid"] == "none")
      {
        echo "<p>You have signed up succesfully.</p>";
      }
    }
  ?>
  </div> 

 
</body></html>