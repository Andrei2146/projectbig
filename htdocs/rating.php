<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rating = isset($_POST['rating']) ? $_POST['rating'] : 'No rating';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'No gender';
    $date = date('Y-m-d H:i:s');

    $data = "Date: $date, Gender: $gender, Rating: $rating\n";
    
    if (file_put_contents('ratings.txt', $data, FILE_APPEND)) {
        echo "Rating saved successfully.<br>";
    } else {
        echo "Failed to save rating.<br>";
    }
    $_SESSION['user_rating'] = $rating;

    echo "<p>Thank you for your feedback!</p>";
    echo "<a href='home.php'>Go back to Home</a>";
    exit();
}
