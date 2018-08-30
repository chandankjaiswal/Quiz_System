<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color:green;">
		<!--span class="navbar-toggler-icon"></span-->
  <strong><a class="navbar-brand" href="http://localhost/Quiz_system/home.php">Home</a></strong>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <!--span class="navbar-toggler-icon"></span-->
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <strong><a class="nav-link" href="http://www.pondiuni.edu.in/department/department-computer-science">About</a></strong>
      </li>
      <li class="nav-item">
       <strong><a class="nav-link" href="#">Contact</a></strong>
      </li>
      <li class="nav-item">
        <strong><a class="nav-link" href="http://localhost/Quiz_system/login.php">Logout</a></strong>
      </li>
    </ul>

  </div>
  <img src="pondiuni.jpg" width="1100" height="150"/>
</nav>
	<div class="container" style="background-color:green; padding-top: 20px;">
		<h2 class="text-center text-primary">Welcome To Online Softcore Registration Portal</h2>
		<h2 class="text-center text-primary">(Department Of Computer Science)</h2>

		<hr>

<div class="row">
      <!--div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/hodmam.jpg"><br>
		<h4>Dr. T. Chithralekha</h4>
		<h4>Subject : IT Infrastructure Management</h4>
		<a href="login.php">Apply</a>
		</div>

		<div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/Subramaniansir.jpg"><br>
		<h4>Dr. R. Subramanian</h4>
		<h4>Subject : Robotics</h4>
		<a href="book1.html">Apply</a>
		</div-->
    
		<div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/Sathyamam.jpg"><br>
		<h4>M. Sathya</h4>
		<h4>Subject : Sensor Networks</h4>
		<a href="squiz.php">Apply</a>
		</div>
    
		 <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/umamam.jpg"><br>
		<h4>Dr. V. Uma</h4>
		<h4>Subject : Data Mining</h4>
		<a href="book1.html">Apply</a>
		</div>
		

		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/santibalamam.jpg"><br>
		<h4>Dr. P. Shanthi Bala</h4>
		<h4>Subject : Knowledge Engineering</h4>
		<a href="book1.html">Apply</a>
		</div>


		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/Nandhini.jpg"><br>
		<h4>Dr. M.Nandhini</h4>
		<h4>Subject : Software Engineering</h4>
		<a href="book1.html">Apply</a>
		</div>

		 <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/Kuppusamy.jpg"><br>
		<h4>Dr. K.S. Kuppusamy</h4>
		<h4>Subject : E-Commerce</h4>
		<a href="quiz.php">Apply</a>
		</div>

		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/sivasathya.jpg"><br>
		<h4>Dr. S. Sivasathya</h4>
		<h4>Subject : Bioinformatics</h4>
		<a href="book1.html">Apply</a>
		</div>

		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/ss1.jpg"><br>
		<h4>Dr. Pothula Sujatha</h4>
		<h4>Subject : Information retrieval</h4>
		<a href="book1.html">Apply</a>
		</div>

		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/josephsir.jpg"><br>
		<h4>Dr. K. Suresh Joseph</h4>
		<h4>Subject : Operating Systems</h4>
		<a href="book1.html">Apply</a>
		</div>

		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/sunitha.jpg"><br>
		<h4>Dr. R. Sunitha</h4>
		<h4>Subject : Compiler Design</h4>
		<a href="book1.html">Apply</a>
		</div>

		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/Vengattaraman.jpg"><br>
		<h4>Dr.T. Vengattaraman</h4>
		<h4>Subject : Web Services</h4>
		<a href="book1.html">Apply</a>
		</div>


		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/ravi.jpg"><br>
		<h4>Dr. S. Ravi</h4>
		<h4>Subject : Computer Architecture</h4>
		<a href="book1.html">Apply</a>
		</div>


		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/RPSEENIVASAN.jpg"><br>
		<h4>R.P. Seenivasan</h4>
		<h4>Subject : Information Technologies</h4>
		<a href="book1.html">Apply</a>
		</div>


		  <div class="col-sm-3 col-md-6 col-lg-4">
		<img src="Image/sivakumar.jpg"><br>
		<h4>T. Sivakumar</h4>
		<h4>Subject : Network Security</h4>
		<a href="book1.html">Apply</a>
		</div>
	</div>

	</div>



</body>
</html>