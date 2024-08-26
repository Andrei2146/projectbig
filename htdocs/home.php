<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
    <a href="logout.php">Logout</a>

    <div class="rating-container">
        <h2>Rate my website</h2>
        <form action="rating.php" method="POST">
            <div class="rating-options">
                <label>
                    <input type="radio" name="rating" value="smiley1">
                    <img src="smiley1.png" alt="Smiley 1">
                </label>
                <label>
                    <input type="radio" name="rating" value="smiley2">
                    <img src="smiley2.png" alt="Smiley 2">
                </label>
            </div>

            
        <div class="gender-options">
        <label>
        <input type="radio" name="gender" value="male" required> Male
        </label>
            <label>
        <input type="radio" name="gender" value="female" required> Female
        </label>
        </div>

        <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
