<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:login.php");
else:
?>
<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
	
<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Welcome, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
  <p><a href="logout.php">Log out</a> Here </p>
  <p><a href="main.php">Continue working</a> Here </p>

</div>
	

	
<?php endif; ?>