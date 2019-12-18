<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Get A Venture</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "description" content ="student projects,internships">
<meta name = "keywords" content ="startups,india,internships,projects,bangalore,part time,students">
<link rel="icon" href="C:\Users\niteesh\Desktop\New folder (3)\title.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="g1.css">
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;min-height:350px;color: #fff; background-color: black;}
  #section21 {padding-top:50px;min-height:500px;color: #fff; background-color: #673ab7; text-align: center;}
  #section22 {padding-top:50px;min-height:500px;color: #fff; background-color: #ff9800; text-align: center;}
  #section3 {padding-top:50px;min-height:500px;color: #fff; background-color: #00bcd4; text-align: center;}
  #section42 {padding-top:50px;min-height:500px;color: #fff; background-color: #009688; text-align: center;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top" id ="navi">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Get A Venture</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="home.php.#section1">HOME</a></li>
          <li><a href="projects.php">PROJECTS</a></li>
		   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HOW IT WORKS<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="home.php#section21">STUDENTS</a></li>
              <li><a href="home.php#section22">STARTUPS</a></li>
            </ul>
          </li>
          <li><a href="home.php#section3">FAQ</a></li>
         
        </ul>
		<ul class="nav navbar-nav navbar-right">
		<?php		
		
if((isset($_COOKIE['gav1']))&&(isset($_COOKIE['gav2']))&&(isset($_COOKIE['gav3'])) ) {
	if($_COOKIE['gav3']==1){
	echo'
<li><a href="settings1.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
	<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>';}
	else{
		echo'
						<li><a href="addpro.php"><span class="glyphicon glyphicon-plus-sign"></span> Add Project</a></li>
				<li><a href="viewapp.php"><span class="glyphicon glyphicon-tasks"></span> View Applicants</a></li>
		<li><a href="settings2.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
	<li><a href="signout.php"><span class="glyphicon glyphicon-log-out"></span> SignOut</a></li>';
	}
 }
 else{
	 echo'
       		<li><a>Login / Signup as : </a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENT<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="studentsignup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="studentsignin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">STARTUP<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </li>';
 }?>
      </ul>
      </div>
	   
    </div>
  </div>
</nav>      