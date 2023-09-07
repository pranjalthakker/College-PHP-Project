<!DOCTYPE html>
<html>
<head>
    <title>Vote for Your Favorite Candidate</title>
    <link rel="stylesheet" type="text/css" href="css/vote.css">
</head>
<body>
    <header>
       <div class="tabs">
            <h2 style="margin-top: 0; margin-bottom: 0;" id="links"><a href="dashboard.php">Home</a></h2>
            <h2 style="margin-top: 0; margin-bottom: 0;" id="links"><a href="vote.php">Vote</a></h2>
            <h2 style="margin-top: 0; margin-bottom: 0;" id="links"><a href="about.php">About</a></h2>
       </div>
    </header>

    <main>
        <h1>Vote for Your Favorite Candidate</h1>
        <form action="process_vote.php" method="post">
            <label for="candidate">Select a Candidate:</label>
            <select id="candidate" name="candidate">
                <option value="Pranjal">Pranjal</option>
                <option value="Jeet">Jeet</option>
                <option value="Bhavik">Bhavik</option>
            </select>
            <input type="submit" value="Vote">
        </form>
    </main>

    <footer>
        <!-- Add footer content here -->
    </footer>
</body>
</html>
