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
                        <input type="text" name="surName" class="fields" style="padding-left: 14px; margin-left: 55px;"><br> <br>
                     <label for="midName">Middle Name :</label>
                        <input type="text" name="midName" id="midname" class="fields" style="margin-left: 20px" required><br> <br>
                    <label for="rNo">Roll No :</label> 
                        <input type="number" name="rNo" id="rno" class="fields" min="2" style="margin-left: 72px" required><br> <br>
                    <label for="eNo">Enrollment No :</label>
                        <input type="number" name="eNo" id="eno" class="fields" min="5"  required><br> <br>
                            <input type="submit" id="submit" name="submit" style="margin-left: 300px;"/><br>  
                    </form>
                </div>
            </div>
        </div>
      
     <!-- main ends-->
    </div>
   
</body>
</html>

<?php
$col = mysqli_connect('localhost', 'root', '', 'ovs');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $surname = $_POST['surName'];
    $middle_name = $_POST['midName'];
    $roll_no = $_POST['rNo'];
    $enrollment = $_POST['eNo'];
    
    $compare = "SELECT * FROM verify WHERE surname='$surname' AND middle_name='$middle_name' AND roll_no='$roll_no' AND enrollment='$enrollment'";
    $result = mysqli_query($col, $compare);
    
    if ($result) {
        echo "<script>alert('You are eligible to vote')</script>";
        header('location:login.php');
    } else {
        echo "<script>alert('You are not eligible to vote')</script>";
    }
}
?>
