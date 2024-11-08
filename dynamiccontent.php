<form method="post">
    <button type="submit" name="displayPHP" style="background-color: #354035; color: white; padding: 10px 20px; border-radius: 5px;">Show Data</button>
</form>


<?php
if (isset($_POST['displayPHP'])) 
{

    $headline = "Annual News Article Forecast!";
    $currentYear = 2024;
    $newsCount = 50;

    
    $nextYear = $currentYear + 1;
    $nextYearNewsCount = $newsCount * 1.10; 
    
    echo "<div class='main'>";
    echo "<h2>$headline</h2>";
    echo "<p>Current Year: $currentYear</p>";
    echo "<p>News Articles Count: $newsCount</p>";
    echo "<p>Next Year: $nextYear</p>";
    echo "<p>Expected News Articles Next Year: $nextYearNewsCount</p>";
    echo "</div>";
}
?>
