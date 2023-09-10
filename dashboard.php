
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #1472bc;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: sticky;
        }

        .tabs {
            display: flex;
            justify-content: center;
        }

        .tabs h2 {
            margin: 0;
            cursor: pointer;
        }

        .tabs h2 a {
            color: #f5f5f5;
            padding: 30px;
            text-decoration: none;
        }

        .tabs h2 a:hover {
            color: lightgray;
        }

        .container {
            height: 117.5vh;
            width: 60vw;
            margin: 20px auto;
            padding: 20px;
            padding-top: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            gap: 20px;
        }

        .person {
            width: 100%; /* Set the width to 100% to make it responsive */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex; /* Change to flex */
            flex-direction: column; /* Display content vertically */
            align-items: center; /* Center content horizontally */
        }

        .person img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px; /* Add spacing between image and text */
        }

        .person h2 {
            margin: 0;
        }

        .contact {
            margin-top: 0px;
            text-align: left; /* Center contact links */
        }

        .contact a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <header>
        <div class="tabs">
            <h2 style="margin-top: 0; margin-bottom: 0;"><a href="dashboard.php">Home</a></h2>
            <h2 style="margin-top: 0; margin-bottom: 0;"><a href="vote.php">Vote</a></h2>
            <h2 style="margin-top: 0; margin-bottom: 0;"><a href="about.php">About</a></h2>
        </div>
    </header>
    <div class="container">
        <div class="person">
            <img src="assets/imgs/Harsh.jpg" alt="Harsh">
            <h2 style="margin-bottom: 0;">Harsh Vaghela</h2>  
            <p style="font-weight: bold; color: gray; margin-bottom: 0px;">Developer.</p>
            <div class="contact">
                <h3 id="desc"> - Roll No : 62</h3>
            </div>
        </div>
        <div class="person">
            <img src="assets/imgs/Jigar.jpeg" alt="Jigar">
            <h2 style="margin-bottom: 0; padding-right: 0;">Jigar Prajapati</h2>
            <p style="font-weight: bold; color: gray; margin-bottom: 0px;">Developer.</p>
            <div class="contact">
                <h3 id="desc"> - Roll No : 37 </h3>
            </div>
        </div>
        <div class="person">
            <img src="assets/imgs/Dishant.jpg" alt="Dishant">
            <h2 style=" margin-bottom: 0;">Dishant Masani</h2>
            <p style="font-weight: bold; color: gray; margin-bottom: 0px;">Developer.</p>
            <div class="contact">
                <h3 id="desc"> - Roll No : 30 </h3>
            </div>
        </div>
    </div>
</body>
</html>
