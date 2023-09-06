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
        }

        .tabs
        {
            display: flex;
            justify-content: center;
        }

        .tabs h2 {
            margin: 0;
            cursor: pointer;
        }

        .tabs h2 a
        {
            color: #f5f5f5;
            padding: 30px;
            text-decoration: none;
        }

        .tabs h2 a:hover 
        {
            color: lightgray;
        }
        .container {
            height: 88vh;
            width: 60vw;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .person {
            margin-bottom: 30px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            height: 23vh;
            position: relative;
        }

        .person img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            position: absolute;
            right: 40px;
            bottom: 20px;
            top: 20px; 
        }

        .person h2 {
            margin-top: 0;
        }

        .contact {
            margin-top: 10px;
        }

        .contact a {
            text-decoration: none;
            color: #333;
            margin-right: 20px;
        }

        .contact a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <header>
       <div class="tabs">
            <h2 style="margin-top: 0; margin-bottom: 0;" id="links"><a href="home.php">Home</a></h2>
            <h2 style="margin-top: 0; margin-bottom: 0;" id="links"><a href="vote.php">Vote</a></h2>
            <h2 style="margin-top: 0; margin-bottom: 0;" id="links"><a href="about.php">About</a></h2>
       </div>
    </header>
    <div class="container">
        <div class="person">
                <img src="assets/imgs/Pranjal1.jpg" alt="pranjal">
            <h2 style="width: 270px; margin-bottom: 0;">Pranjal Thakkar</h2>
            <p style="font-weight: bold; color: gray;">Developer.</p>
            <div class="contact">
                <a href=https://instagram.com/pranjal_thakker?utm_source=qr&igshid=MThlNWY1MzQwNA== target="_blank" style="color: tomato;">Instagram</a>
                <a href="mailto:pranjal2702@gmail.com" style="color: blue;">Email</a>
                <p id="desc"> Hello there!<br> I am Pranjal Thakkar <br> I've created the whole front-end of this Project <br> and tried to become it user-friendly and a bit attractive. <br> I hope you all like it! If you find any suggestions for us,<br> then contact us on the platforms given above. <br> Thank You!</p>
            </div>
        </div>
        <div class="person">
            <img src="assets/imgs/b.jpeg" alt="bhavik">
            <h2 style="width: 270px; margin-bottom: 0; padding-right: 0;">Bhavik Siddhpura</h2>
            <p style="font-weight: bold; color: gray;">Developer.</p>
            <div class="contact">
                <a href="https://instagram.com/bhavik___239?igshid=MmU2YjMzNjRlOQ==" target="_blank" style="color: tomato;">Instagram</a>
                <a href="mailto:janesmith@gmail.com" style="color: blue;">Email</a>
                <p id="desc"> Hello there!<br> I am Bhavik Siddhpura <br> I've created the whole Back-end of this Project <br> and tried to become it user-friendly. <br> I hope you all like it! If you find any suggestions for us,<br> then contact us on the platforms given above. <br> Thank You!</p>
            </div>
        </div>
        <div class="person">
            <img src="assets/imgs/J1.jpeg" alt="jeet">
            <h2 style="width: 270px; margin-bottom: 0;">Gajjar Jeet</h2>
            <p style="font-weight: bold; color: gray;">Developer.</p>
            <div class="contact">
                <a href="https://www.instagram.com/mikejohnson/" target="_blank" style="color: tomato;">Instagram</a>
                <a href="mailto:mikejohnson@gmail.com" style="color: blue;">Email</a>
                <p id="desc"> Hello there!<br> I am Gajjar Jeet <br> I've created the dashboard and voting page of this Project <br> and tried to become it user-friendly and a bit attractive. <br> I hope you all like it! If you find any suggestions for us,<br> then contact us on the platforms given above. <br> Thank You!</p>
            </div>
        </div>
    </div>
</body>
</html>
