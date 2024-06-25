
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
background-color: aquamarine;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(315deg, rgb(55, 73, 112) 60%, rgb(51, 102, 96) 100%);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
.form{
    margin: auto;
    height: 70%;
    width: 50%;
}

button {
  background-color: #04AA6D;
  /* background: linear-gradient(90deg, rgba(9, 112, 9, 0.473),green); */
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: auto;
}

img.avatar {
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
p{
color:red;
font-sign:12px;
text-align:center;
}
</style>
 <script type="text/javascript">
            function func_user(){
                var name=document.getElementById("uname").value;
                var reg=/^[a-zA-Z0-9]{8,}$/;
                if(!reg.test(name)){
                    if(name.length<8){
                         document.getElementById("uname").style.border="2px solid red";
                    document.getElementById("text1").innerHTML="Username should contain atlest 8 character";
                    }
                    else{
                        document.getElementById("uname").style.border="2px solid red";
                    document.getElementById("text1").innerHTML="Username should not contain any special character";
                    
                    }
                    
                }
                else{
                     document.getElementById("uname").style.border="2px solid green";
                    document.getElementById("text1").innerHTML="";
                }
            }
        function func_passw(){
          var psw=document.getElementById("pwd").value;
          var reg1=/^(?=.*[0-9])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
          var reg2=/^(?=.*[a-z])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
          var reg3=/^(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
          var reg4=/^(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/;
         if(psw.length<8){
             document.getElementById("pwd").style.border="3px solid red";
           document.getElementById("text2").innerHTML="password must contain minimum 8 characters!!!";
         }
         else if(psw.length>20){
             document.getElementById("pwd").style.border="3px solid red";
             document.getElementById("text2").innerHTML="password must contain maximum of 20 characters!!!";
         }
         else if(!reg1.test(psw)){
             document.getElementById("pwd").style.border="3px solid red";
           document.getElementById("text2").innerHTML="password must contain one digit(0-9)!!!";
         }
         else if(!reg2.test(psw)){
             document.getElementById("pwd").style.border="3px solid red";
           document.getElementById("text2").innerHTML="password must contain one lowercase letter!!!";
         }
         else if(!reg3.test(psw)){
             document.getElementById("pwd").style.border="3px solid red";
           document.getElementById("text2").innerHTML="password must contain one uppercase letter!!!";
         }
         else if(!reg4.test(psw)){
             document.getElementById("pwd").style.border="3px solid red";
           document.getElementById("text2").innerHTML="password must contain one special character(!@#$%^&*)!!!";
         }
         else{
         
                   document.getElementById("pwd").style.border="3px solid green";
                 document.getElementById("text2").innerHTML="";
             
         }
     
            }
</script>
</head>
<body>

<h2 style="text-align: center;">Login Form</h2>
<div class="form">
    
<form action="validate_login.php" method="post">
  <div class="imgcontainer">
    <img src="reception.png" height="150px" width="150px" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Employee ID</b><b style="color:red;">*</b></label>
    <input type="text" placeholder="Enter Employee ID" name="uname" id ="uname" value="<?php if(isset($_COOKIE["username"])) { 
                                    echo $_COOKIE["username"]; } ?>" onchange="func_user()" required><p id="text1"></p>

    <label for="psw"><b>Password</b><b style="color:red;">*</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="pwd" value="<?php if(isset($_COOKIE["password"])) { 
                                               echo $_COOKIE["password"]; } ?>"
                                               onchange="func_passw()" required><p id="text2"></p>
        
    <button type="submit" name="submit" >Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
 
    <a href="reset.php">forget password?</a>
  <div class="container" style="background-color: aquamarine;">
    <button type="button" class="cancelbtn" onclick="document.location='firstpage.html'">Cancel</button><br>
   
  </div>

</div>
</body>
</html>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>