<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Online Voting System Project</title>
    <link rel="stylesheet" href="css/icard.css">
    
</head>
<body>
    <!-- main -->
    <div class="main">

        <!-- Image container -->
        <div class="image-container">
             <img src="assets/imgs/icard.png" alt="LJ University" id="logo">
        </div>

        <!-- container -->
         <div class="container">
      
            <div class="icard-details">
                <div class="text">
                    <h3 id="title">Welcome to Online Voting System</h3>
                    <h6 id="desc">Verify your I-Card to vote! </h6>
                </div>

                <div class="input-fields">
                    <form action="others/login.php" method="POST"> 
                    <label for="surName">Surname :</label> 
                        <input type="text" name="surName" id="surName" class="fields"><br> <br>
                     <label for="midName">Middle Name :</label>
                        <input type="text" name="midName" id="midName" class="fields" required><br> <br>
                    <label for="rNo">Roll No :</label> 
                        <input type="number" name="rNo" id="rNo" class="fields" max="2" required><br> <br>
                    <label for="eNo">Enrollment No :</label>
                        <input type="number" name="eNo" id="eNo" class="fields" max="12" required><br> <br>
                            <input type="submit" id="submit" name="submit"/><br>  
                    </form>
                </div>
            </div>
        </div>
      
     <!-- main ends-->
    </div>
    <?php
$col=mysqli_connect('localhost','root','','ovs');
?>
    <?php
$surname=$_POST['surname'];
$middle_name=$_POST['middle_name'];
$roll_no=$_POST['roll_no'];
$enrollment=$_POST['enrollment'];
$compare="select * from verify where surname='$surname' and middle_name='$middle_name' and roll_no='$roll_no' and enrollment='$enrollment'";
$result=mysqli_query($col,$compare);
if($result)
{
	echo"<script>alert('you are elegible to vote')</script>";
	header('location:.php');
}
else
{
	echo"<script>alert('you are not elegible to vote')</script>";
	echo"";
}
?>
</body>
</html>