<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC News - PHP Demo</title>
</head>
<body>
    <h1>Welcome to ABC News</h1>

    <?php
    // PHP Variables
    $headline = "Breaking News: PHP Variables Explained";
    $views = 1000;
    $likes = 250;

    // Displaying variable values
    echo "<h2>$headline</h2>";
    echo "<p>Views: $views</p>";
    echo "<p>Likes: $likes</p>";

    // PHP Data Types
    $isPublished = true; // Boolean
    $price = 9.99; // Float
    $articleId = 101; // Integer
    $author = "John Doe"; // String

    // Displaying data types
    echo "<p>Article ID: $articleId</p>";
    echo "<p>Author: $author</p>";
    echo "<p>Price: $$price</p>";
    echo "<p>Published: " . ($isPublished ? "Yes" : "No") . "</p>";

    // PHP Operators
    $totalInteractions = $views + $likes; // Addition
    $likePercentage = ($likes / $views) * 100; // Percentage calculation

    // Displaying calculations
    echo "<p>Total Interactions: $totalInteractions</p>";
    echo "<p>Like Percentage: " . round($likePercentage, 2) . "%</p>";
    ?>

    <footer>
        <p>&copy; 2024 ABC News</p>
    </footer>
</body>
</html>
