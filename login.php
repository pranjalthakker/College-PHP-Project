<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Online Voting System Project</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    
    #submit
    {
        border: none;
        color: white;
        background-color: #1472bc;   
    }
</style>
<body>
    <div class="container">
        <img src="assets/imgs/logo.png" alt="LJ University" id="logo">
        <div class="text">  
            <h1 id="title" style="margin-bottom: 1px;"> Online Voting System </h1>
            <p id="description"> Log In using LJKU Id & Password</p>
        </div>
        <div class="login-details">
            <h3> Login </h3>
            <form method="POST">
                <div class="input-fields">
                    <input type="email" id="email" name="LJKU_ID" placeholder="Enter your email" required>
                    <input type="password" id="pass" name="PASSWORD" placeholder="Enter your password" required>
                </div>

                <div class="btn">
                    <input type="submit" id="submit" name="submit" value="submit"/>
                </div>
                
                <!-- Redirecting to Registration Form  -->
                <div class="redirect-to-reg">
                    Not verified yet?<a href="index.php" id="sign-up"> Verify </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
session_start();
$con=mysqli_connect('localhost','root','','OVS');
?>

<?php
if(isset($_POST['submit']))
{       

$LJKU_ID=$_POST['LJKU_ID'];
$PASSWORD=$_POST['PASSWORD'];
$select="select * from log_in where LJKU_ID='$LJKU_ID' and PASSWORD='$PASSWORD'";
//$insert="insert into log_in(LJKU_ID,PASSWORD)values('$LJKU_ID','$PASSWORD')";
$result=mysqli_query($con,$select);
$num=mysqli_num_rows($result);
echo $select;
if($num==1)
{

    header('location:dashboard.php');
    
    /*echo"<script>
    alert('LOGIN SUCCESSFULL...!!!');
    header('location:dashboard.php');
    </script>";*/
}
else
{
echo"
    <script>
    alert('LOGIN NOT SUCCESSFULL');
    </script>";
}
}

?>
