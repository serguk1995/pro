<?php session_start();?>
<?php require_once("connection.php");?>
<?php
if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: index.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)
 {
    // старое место расположения
    //  session_start();
     $_SESSION['session_username']=$username;
     header("Location: main.php");
    }
    } else {
    //  $message = "Invalid username or password!";
    
    echo  "Invalid username or password!";
 }
    } else {
    $message = "All fields are required!";
    }
    }?>

<?php include("header.php");?>




    <div class="container cont-reg mlogin">
            <div id="login">
    <h1>LOGIN</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">Username<br />
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Password<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button log" value="Log In"/>
    </p>
        
</form>

    </div>

    </div>
	
	
	
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	