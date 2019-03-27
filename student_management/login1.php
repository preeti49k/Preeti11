
<html>   
<head> 
    <link rel="styles.css">
<title>Login</title> 
</head>
<body> 
<h1>ADMINISTRATOR</h1> 
<form action="" method="POST">
    <div class=form>
<input type="text" name="UserName" placeholder="Username"><br /> 
<input type="password" name="PassWord" placeholder="Password"><br />  
<input type="submit" value="Login" name="submit" /> 
</div>
</form> 
<?php 
if(isset($_POST["submit"]))
    {if(!empty($_POST['UserName']) && !empty($_POST['PassWord']))
 { 
$user=$_POST['UserName']; 
$pass=$_POST['PassWord']; 
$con=mysqli_connect('localhost','root','') or die(mysqli_error()); 
mysqli_select_db($con, 'student_management') or die(mysqli_error($con)); 
$q="(SELECT * FROM user WHERE username='".$user."' AND password='".$pass."')"; 
$query=mysqli_query($con,$q);
$numrows=mysqli_num_rows($query); 
if($numrows!=0) 
{ 
while($row=mysqli_fetch_assoc($query)) 
{ 
$dbusername=$row['username']; 
$dbpassword=$row['password']; 
} 
if($user == $dbusername && $pass == $dbpassword) 
{ 
session_start(); 
$_SESSION['sess_user']=$user; 
echo"Login Successfull";
/* Redirect browser  
header("Location: member.php"); */
}
} else { 
    echo "Invalid username or password!"; 
    } 
} else { 

    echo "All fields are required!";
} 
} 
?> 
</body> 
</html>