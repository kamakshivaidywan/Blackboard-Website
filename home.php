<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
#uni
{
	position: absolute;
	width: 100%;
	min-height: 100%;
	left: 0px;
	top:0px;
}
#header
{
	width: 100%;
	padding:1%;
	font-size: 60px;
	color: white;
	background:#feb236;
}
#list-type5{
	font-family: Verdana, Geneva, sans-serif;
	font-weight: 700;
width:100%;
margin:0 auto;
padding:4%;
background: #400;
}
#list-type5 ol {
list-style-type: none;
list-style-type: decimal !ie; /*IE 7- hack*/
margin: 0;
margin-left: 1em;
padding: 0;
counter-reset: li-counter;
}
#list-type5 ol li{
position: relative;
margin-bottom: 1.5em;
padding: 0.5em;
background-color: #F0D756;
padding-left: 58px;
}

#list-type5 a{
text-decoration:none;
color:black;
font-size:15px;
font-family: 'Raleway', sans-serif;
}

#list-type5 li:hover{
box-shadow:inset -1em 0 #6CD6CC;
-webkit-transition: box-shadow 0.5s; /* For Safari 3.1 to 6.0 */
transition: box-shadow 0.5s;
}

#list-type5 ol li:before {
position: absolute;
top: -0.3em;
left: -0.5em;
width: 1.8em;
height: 1.2em;
font-size: 2em;
line-height: 1.2;
font-weight: bold;
text-align: center;
color: white;
background-color: #6CD6CC;
transform: rotate(-20deg);
-ms-transform: rotate(-20deg);
-webkit-transform: rotate(-20deg);
z-index: 99;
overflow: hidden;
content: counter(li-counter);
counter-increment: li-counter;
}

#menubar
{
	width: 100%;
	background:#2f3947;
	overflow:hidden;
	
	
}
#menubar a
{
	<!--padding:10px 20px 10px 20px;
	font-size: 24px;
	color: white;-->
	
	float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 22px;
}
#menubar a:hover {
  background-color: #ddd;
  color: black;
}


#menubar a.active {
  background-color: #4CAF50;
  color: white;
}
#active {
  background-color: #4CAF50;
}
</style>
	</head>
	<body class="loggedin">
<div id="uni">
		<nav class="navtop">
			<div>
				<h1>My Blackboard</h1>
				<h2 style="color:white;">Welcome , <?=$_SESSION['name']?>!</h2>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
<div id="header">

	<img src="upes.png" width="250px">
</div>		
<div id="menubar">
	<a class="active" href="home.php"><i class="fa fa-fw fa-home"></i>Home</a>
	<a href="courses.php">Courses</a>
	<a href="home.php">Notifications</a>
	<a href="home.php">About</a>
</div>
	<div id="list-type5">

	<ol>
    <li><a href="#">IT Application Security</a></li>
    <li><a href="#">Formal Language and Automata Theory</a></li>
    <li><a href="#">Physical Security</a></li>
    <li><a href="#">Computer Graphics</a></li>
	<li><a href="#">Object Oriented Analysis and Design </a></li>
    <li><a href="#">Information Retrieval</a></li>
	<li><a href="#">Dot Net</a></li>
	<li><a href="#">Venture Ideation</a></li>
	<li><a href="#">IT Application Security Lab</a></li>
	<li><a href="#">Computer Graphics Lab</a></li>
	<li><a href="#">Object Oriented Analysis and Design Lab</a></li>
	
  </ol>
</div>
</div>
	</body>
</html>