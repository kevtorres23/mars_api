<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Mars API</title>
        <link rel="stylesheet" href="../home_styles.css?v=1.0">
        <script src="../api_code.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="prompt">
            <a href="../index.html"><p class="logout">Log out</p></a>
            <div class="prompt-form">
                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
                <p>Start using the API by typing a sol (Martian day). Think of any number from 0 to 3000.</p>
                <input type="number" id="sol" maxlength="30" placeholder="Enter sol">
                <button onclick="getMarsImages()" class="submit-btn">See images</button>
            </div>
        </div>
        <div id="images">
        </div>
    </body>
</html>