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
            <form action="others/login.php" method="POST">
                <div class="input-fields">
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <input type="password" id="pass" name="pass" placeholder="Enter your password" required>
                </div>

                <div class="btn">
                    <button id="submit" name="submit">Submit</button>
                </div>
                
                <!-- Redirecting to Registration Form  -->
                <div class="redirect-to-reg">
                    Not verified yet?<a href="index.php" id="sign-up"> Verify    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>