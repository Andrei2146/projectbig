<?php
session_start();

if (isset($_SESSION['id'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function showRatingPopup() {
            document.getElementById('rating-popup').style.display = 'block';
        }

    </script>
</head>
<body>
    <div class="login-container">
        <form class="login-form" action="login.php" method="POST">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php } ?>
            <label for="uname">User Name</label>
            <input type="text" id="uname" name="uname" placeholder="User Name" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>


    <div id="rating-popup" class="rating-popup">
        <div class="popup-content">
        <h2>Rate Us</h2>
        <form action="rating.php" method="POST">
        <div class="rating">
        <label>
        <input type="radio" name="rating" value="1" required>
        <img src="images/smiley1.png" alt="Smiley 1">
        </label>
        <label>
            <input type="radio" name="rating" value="2">
                <img src="images/smiley2.png" alt="Smiley 2">
            </label>
            </div>
            <button type="submit">Submit Rating</button>
            <button type="button" onclick="document.getElementById('rating-popup').style.display='none'">Close</button>
        </form>
        </div>
    </div>
</body>
</html>
