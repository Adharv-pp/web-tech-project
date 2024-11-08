<?php
$x = "active";
  
if ($x == "active")
{
    echo "Welcome, user!";
} 
elseif ($x == "inactive") 
{
    echo "Please activate your account.";
} else 
{
    echo "Unknown status.";
}
?>

<?php
echo"<br>";
$a = 10;
$b = 20;

if ($a > $b) {
    echo "$a is greater than $b";
} elseif ($a < $b) {
    echo "$b is greater than $a";
} else {
    echo "$a and $b are equal";
}
?>

switch Statement
<?php
echo"<br>";
$n = "February";
  
switch($n) {
    case "January":
        echo "Its January";
        break;
    case "February":
        echo "Its February";
        break;
    case "March":
        echo "Its March";
        break;
    case "April":
        echo "Its April";
        break;
    case "May":
        echo "Its May";
        break;
    case "June":
        echo "Its June";
        break;
    case "July":
        echo "Its July";
        break;
    case "August":
        echo "Its August";
        break;
    case "September":
        echo "Its September";
        break;
    case "October":
        echo "Its October";
        break;
    case "November":
        echo "Its November";
        break;
    case "December":
        echo "Its December";
        break;
    default:
        echo "Doesn't exist";
}
?>


<?php
echo "<br>";
$a = 700; 
$b = 14;  
$x = "add"; 

switch($x) 
{
    case "add":
        echo "Result: " . ($a + $b);
        break;
    case "subtract":
        echo "Result: " . ($a - $b);
        break;
    case "multiply":
        echo "Result: " . ($a * $b);
        break;
    case "divide":
        if ($b != 0) 
        {
            echo "Result: " . ($a / $b);
        } 
        else 
        {
            echo "Cannot divide by zero";
        }
        break;
    default:
        echo "Invalid operation";
}
?>


