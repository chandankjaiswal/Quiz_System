
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	</nav>
	<div class="container" style="background-color:green; padding-top: 20px;">
		<h2 class="text-center text-success">Welcome To Online Softcore Registration Portal</h2>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-6">

 			<h2>Login form</h2>
 			<form action="validation.php" method="post">
 			 <div class="form-group">
 			 <label>Username</label>
 			 <input type="text" name="user" class="form-control">
 			 </div>	

 			 <div class="form-group">
 				<label>Password</label>
 				<input type="Password" name="password" class="form-control">
 			</div>	
             <button type="submit" class="btn btn-primary"> Login</button>
 			  </form>
 		
 			</div>


 			<div class="col-lg-6">
 			  <h2>SignUp form</h2>
 			  <form action="registration.php" method="post">
 			  <div class="form-group">
 				<label>Username</label>
 				<input type="text" name="user" class="form-control">
 			</div>

 			<div class="form-group">
 				<label>Reg_No</label>
 				<input type="text" name="reg" class="form-control">
 			</div>	

 			<div class="form-group">
 				<label>Dept</label>
 				<input type="text" name="dept" class="form-control">
 			</div>

 			 <div class="form-group">
 				<label>Email</label>
 				<input type="text" name="email" class="form-control">
 			</div>

 			 <div class="form-group">
 				<label>Mobile_No</label>
 				<input type="text" name="mobile" class="form-control">
 			</div>

 			 <!--div class="form-group">
 				<label>Gender</label>
 				<input type="text" name="gen" class="form-control">
 			</div-->
 			<div class="form-group">
 				<label>Gender</label>
 				<br>
 			<input type="radio" name="gender"
           <?php if (isset($gender) && $gender=="female") echo "checked";?>
              value="female">Female
              <input type="radio" name="gender"
           <?php if (isset($gender) && $gender=="male") echo "checked";?>
           value="male">Male

</div>

 			<div class="form-group">
 				<label>Password</label>
 				<input type="Password" name="password" class="form-control">
 			</div>	
             <button type="submit" class="btn btn-primary">New Student Registration >></button>
 			</form>
 		</div>
 		
 	</div>
 </div>


</body>
</html>