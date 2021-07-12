<?php  
$flag = 0;   
if(isset($_POST['username'])){       
$server = "localhost";        
$usrnm = "root";        
$pswrd = "";        
$connection = mysqli_connect($server,$usrnm,$pswrd);       
if(!$connection){           
die("Database Connection Failed" . 
mysqli_connect_error());        
}
       
$username = $_POST['username'];        
$pass = $_POST['password'];
$roles = $_POST['roles'];

   session_start();
   $_SESSION['username'] = $username;

$password = md5($pass.$pass);

$query = "SELECT * FROM `vehicleregistration`.`user` WHERE `username`='$username' and `password`='$password' and `roles`='$roles'";
$result = mysqli_query($connection,$query);  
$count = mysqli_num_rows($result);        

if($count > 0){            
$flag = 1;
if($roles==admin){            
header("location: /pro/home/admin.php");      
}
if($roles==user){ 
header("location: /pro/home/user.php"); 
}
if($roles==agent){ 
header("location: /pro/home/agent.php");  
}
if($roles==rto){ 
header("location: /pro/home/rto.php");  
}
}
else        
{            
echo "<p class = 'msg'>Invalid Username or Password or Login Type.</p>";            
echo "<p class = 'msg'>Login Failed</p>";     
}                 
       
$connection->close();    
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
h1 {
  text-align: center;
  color: white;
}
.roles {
  -webkit-appearance: none;
  border: 0;
  text-align: center; 
  width: 100%;
  height: var(--select-height);
} 
#roles {
border-radius: 15px;
width:100px;
}
img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
</style>
</head>
<body>
<h1>VEHICLE REGISTRATION LOGIN PAGE</h1>
<form class="box" action="login.php" method="post">
<img src="\pro\img\img_avatar.png" alt="Avatar">
<input type="text" placeholder="Username" name="username" id="ip" required>
<input type="password" placeholder="Password" name="password" id="ip" required>
<select name="roles" id="roles">
<option> <label> ----login as----</label></option>
<option value="admin">ADMIN</option>
<option value="agent">AGENT</option>
<option value="user">USER</option>
<option value="rto">RTO</option>
</select><br></br>
<label style="color:white;"><input type="checkbox" checked="checked" name="remember"> Remember me</label><br><br>
<input type="submit" name="" value="Login"><br></br>
<span style="color:white;" class="link">Don't have an account <a style="color:red;" href="register_form.html">create here</a></span>
</form>
</body>
</html>