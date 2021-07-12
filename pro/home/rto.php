<?php
   session_start();
   $uname = $_SESSION['username'];
   $_SESSION['uname'] = $uname;
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
img {
  width: 120px;
  height: 120px;
}
.columnn {
  float: center;
  width: 49%;
  padding: 5px;
}
.column {
  float: left;
  width: 49%;
  padding: 5px;
}


h2 {
  text-align: center;
  color: white;
}
</style>
</head>
<body>
<center>
<h2>RTO Home</h2>
<div class="column">
<a href="/pro/profiles/profile.php"><img src="/pro/img/my_profile.png" alt="Profile"></a><br></br>
<label style="font-size:25px;color:white" >Profile</label>
</div>
<div class="column">
<a href="/pro/admin/admin_manage_registrations.php"><img src="/pro/img/mregistrations.jpg" alt="Manage Registrations"></a><br></br>
<label style="font-size:25px;color:white" >Manage Registartions</label>
</div>
<div class="column">
<a href="/pro/search/search.html"><img src="/pro/img/search.jpg" alt="search vehicles"></a><br></br>
<label style="font-size:25px;color:white" >Search Vehicles</label>
</div>
<div class="column">
<a href="/pro/admin/admin_manage_vehicles.html"><img src="/pro/img/mvehicles.png" alt="manage vehicles"></a><br></br>
<label style="font-size:25px;color:white" >Manage Vehicles</label>
</div>
<div class="column">
<a href="/pro/login.php"><img src="/pro/img/logout1.png" alt="logout"></a><br></br>
<label style="font-size:25px;color:white" >Logout</label>
</div>
</script>
</body>
</html>
