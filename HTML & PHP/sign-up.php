<html><head> 
  <title>signup form</title> 
  <?php include 'styles.php'; ?>
 </head> 
 <body> 
  <script src="sign-up.js"></script> 
  <!--this is for user information sign up--> 
  <br> 
  <div class="iformWrap"> 
   <form class="imyForm" action="0"> 
    <h1>Welcome!</h1> 
    <h3>Sign Up</h3> 
    <table> 
     <tbody> 
      <tr> 
       <td> Firstname </td> 
       <td> <input type="text" id="firstname" onblur="firstName();" placeholder="Enter firstname"> <span id="message1"></span> </td> 
      </tr> 
      <tr> 
       <td>Lastname </td> 
       <td> <input type="text" id="lastname" onblur="lastName();" placeholder="Enter lastname"> <span id="message2"></span> </td> 
      </tr> 
      <tr> 
       <td>Gender</td> 
       <td><input type="radio" id="female" value="Female" name="gender">Female <input type="radio" id="male" value="Male" name="gender">Male 
        <!--  <input type="radio" id="others" value="Others" name="gender" onblur="gender();">Prefer not to say</td> 
     --> </td> 
      </tr> 
      <tr> 
       <td>Birthday</td> 
       <td><input type="date" id="birthday" name="birthday"></td> 
      </tr> 
      <!-- optional
      <tr> 
       <td> Age: </td> 
       <td><input type="number" id="age" onblur="AGE();"><span id="message5"></span></td> 
      </tr> --> 
     </tbody> 
    </table> 
   </form> 
  </div> 
  <p>already have an account? <a href="content://com.paprbit.dcoder.fileprovider/files/temp.html">Sign in.</a></p> 
 
  <input type="button" value="next" onclick="next();" class="button"> 
 
</body></html>