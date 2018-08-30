<!DOCTYPE html>
<html>
<head>
	<title>quiz</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boot strap/4.1.3/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background-color:blue;">
  <strong><a class="navbar-brand" href="http://localhost/Quiz_system/home.php">Home</a></strong>
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       
      </li>
    
    </ul>

  </div>
  <img src="pondiuni.jpg" width="900" height="150"/>
</nav>
	 <h1 class="text-center text-primary">Your Results</h1>
   <p align="center">
<?php
 
$con= mysqli_connect('localhost','root');


mysqli_select_db($con, 'quizdbase'); 


if(isset($_POST['submit']))
{
$query="SELECT ans_id FROM questions1";

$result = mysqli_query($con,$query);
$i=1;
$correct = 0;


while ($row=mysqli_fetch_assoc($result)) {

  if(isset($_POST['quizcheck'.$i]) && $row['ans_id']==$_POST['quizcheck'.$i])
    $correct++;

  $i++;
}

echo "Your Score is ".$correct." Out of 15<br>";

if($correct>=8)
  echo "Congratuation...You are Eligible for this softcore";
else
  echo "SORRY... You cann't Eligible for this softcore";
}
?></p>

</body>
</html>