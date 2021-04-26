function firstName() {

  var fName = document.getElementById("firstname").value; 
 
  if (fName.length > 1 && fName.length < 99){
    
    document.getElementById("message1").style.color="green";
    document.getElementById("message1").innerHTML="ok";
    return true;
 } 
  else{
   document.getElementById("message1").style.color="red";
    document.getElementById("message1").innerHTML="invalid";
   return false;
   }
  }
function lastName() {

  var lName = document.getElementById("lastname").value; 
 
  if (lName.length > 1 && lName.length < 99){
    
    document.getElementById("message2").style.color="green";
    document.getElementById("message2").innerHTML="ok";
    return true;
 } 
  else{
    document.getElementById("message2").style.color="red";
    document.getElementById("message2").innerHTML="invalid";
   return false;
   }
  }
  
function userName() {
  
  var uName = document.getElementById("username").value; 
 
  if (uName.length > 2 && uName.length < 99){
    
    document.getElementById("message3").style.color="green";
    document.getElementById("message3").innerHTML="ok";
    return true;
 } 
  else{
   
   document.getElementById("message3").style.color="red";
    document.getElementById("message3").innerHTML="invalid";
   return false;
   }
  }      

function passW() {
  
  var pName = document.getElementById("passWord").value; 
 
  if (pName.length > 2 && pName.length < 8){
    document.getElementById("message4").style.color="red";
    document.getElementById("message4").innerHTML="too short";
   return false;
 } 
 if (pName.length > 5 && pName.length < 8){
   
   document.getElementById("message4").style.color="green";
   document.getElementById("message4").innerHTML="medium";
   return true;
 }
 if (pName.length > 8){
   
   document.getElementById("message4").style.color="green";
   document.getElementById("message4").innerHTML="strong";
   return true;
   }
  else{
   
   document.getElementById("message4").style.color="red";
    document.getElementById("message4").innerHTML="Enter password";
   return false;
   }
  }
/*function AGE() { optional
  
  var agE = document.getElementById("age").value; 
 
  if (agE == ""){
    document.getElementById("message5").style.color="red";
    document.getElementById("message5").innerHTML="Please enter age";
   return false;
 }
  else{
   
    document.getElementById("message5").style.color="green";
    document.getElementById("message5").innerHTML="ok";
   return true;
   }
  }*/
function conPass(){
  
  var passName = document.getElementById("passWord").value; 
  var conName = document.getElementById("confirmPass").value;
  
  if (conName.length == 0){
    document.getElementById("message6").style.color="red";
    document.getElementById("message6").innerHTML="Re-type password";
   return false;
   }
   if (passName != conName){
    document.getElementById("message6").style.color="red";
    document.getElementById("message6").innerHTML="NOT MATCHED";
   return false;
 } 
   
 else{

    document.getElementById("message6").style.color="green";
    document.getElementById("message6").innerHTML="MATCHED";
    return true;
 }

} 
function Submit() {
  var fname = firstName();
  var lname = lastName();
  var uname = userName();
  var pasW = passW();
  var Age = AGE();
  
  if(fname == false || Age == false || lname == false || uname == false || pasW == false){
    
    alert("Fill out everything correctly!");
     return false;
     }

  else{
    location.replace("content://com.paprbit.dcoder.fileprovider/files/temp.html")
  return true;
  }
 }