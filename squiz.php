<?php
 session_start();
if(!isset($_SESSION['username'])){	
}

$con= mysqli_connect('localhost','root');


mysqli_select_db($con, 'quizdbase'); 

?>


<!DOCTYPE html>
<html>
<head>
	<title>quiz</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boot strap/4.1.3/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color:blue;">
 
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    
    </ul>

  </div>
  <img src="pondiuni.jpg" width="1000" height="150"/>
</nav>
	<div class="container">
	
<br> <h1 class="text-center text-primary">Welcome to Sensor Network Test</h1>

<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?> </h2>

<div class="col-lg-8 m-auto d-block">
<div class="card">

<h3 class="text-center card-header"> Welcome <?php echo $_SESSION['username']; ?>,(You have to selected out of 8.Best Of Luck:)</h3>

</div><br>
<form action="scheck.php" method='post'>
 <?php

 for($i=1; $i <16; $i++){

$q=" select * from questions1 where q_id=$i";
$query= mysqli_query($con,$q);

while ($rows=mysqli_fetch_array($query)) {
	?>


<div class="card">
<h4 class="card-header"> <?php echo $rows['question'] ?> </h4>

 
   <?php
 
      $q=" select * from answers1 where ans_id=$i";
     $query= mysqli_query($con,$q);

     while ($rows=mysqli_fetch_array($query)) {
	?>

<div class="card-body">
	<input type="radio" name="quizcheck<?php echo $rows['ans_id']; ?>" value=" <?php echo $rows['a_id']; ?>">

  <?php echo  $rows['answer']; ?>
	 

</div> 


 
<?php
    }
}
}
    ?>
    <br>

   <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block"> 

</form>
</div> 
</div>
<br><br>
<a href="logout.php" class="btn btn-primary">Logout</a>

	</div>
  
	</body>
	</html>
