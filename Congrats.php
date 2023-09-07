<!DOCTYPE html>
<html>
<head>
    <title>Message Page</title>
</head>

<style>
   
.message {
    width: 400px;
    margin-top: 330px;
    margin-left: 680px;
    padding: 50px;
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.message h1 {
    font-size: 50px;
    margin-bottom: 10px;
}

.message p {
    font-size: 26px;
    line-height: 1.4;
}

</style>
<body>
    <main>
        <div class="message">
            <?php
            // Display a message, replace this with your actual message content
            echo '<h1>Success!</h1>';
            echo '<p>Your vote has been recorded.</p>';
            ?>
        </div>
    </main>

    <footer>
        <!-- Add footer content here -->
    </footer>
</body>
</html>
