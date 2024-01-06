<?php 

date_default_timezone_set("Asia/Dhaka"); //to set default time zone

echo Date("F-d-y h:i:s A l"); // here "l" is for day name
echo "<br>";
echo Date("F-d-y h:i:s a");

echo "<br>";
//mktime(hour, minute, second, month, day, year)

$birthday = mktime(0, 0, 0, 10, 15, 2024 );
echo Date("F-d-y h:i:s A l", $birthday);

echo "<br>";
// strtotime(time) fungtion
$myBirthday = strtotime("15 Oct. 2024");
echo Date("F-d-y h:i:s A l", $myBirthday);

echo "<br>";

$mystrtotime = strtotime("tomorrow");
echo Date("F-d-y h:i:s A l", $mystrtotime);

echo "<br>";

$mystrtotime = strtotime("next Friday");
echo Date("F-d-y h:i:s A l", $mystrtotime);

echo "<br>";

$mystrtotime = strtotime("+2 month");
echo Date("F-d-y h:i:s A l", $mystrtotime);

echo "<br>";

$mystrtotime = strtotime("-2 month");
echo Date("F-d-y h:i:s A l", $mystrtotime);


echo "<br>";

$mystrtotime = strtotime("5 day", $myBirthday);
echo Date("F-d-y h:i:s A l", $mystrtotime);

echo "<br>";

// next 7 Friday 
$startDate = strtotime("next Friday");
$endDate = strtotime("+6 weeks" , $startDate);

while($startDate <= $endDate){
    echo Date("F-d-y / l", $startDate ) . "<br>";
    $startDate = strtotime("+1 week" , $startDate);
}

// $startDate = strtotime("next Friday");
// $endDate = strtotime("+6 Weeks", $startDate);

// while ($startDate <= $endDate) {
//     echo Date("F-d-Y /l;", $startDate) . "<br>";
//     $startDate = strtotime("+1 Week", $startDate);
// }


echo "<br>";

$mystrtotime = strtotime("5 day", $myBirthday);
echo date("F-d-y h:i:s A l", $mystrtotime);

echo "<br>";

// filter 

$myfilter = 12354;

echo filter_var($myfilter, FILTER_VALIDATE_INT);
echo filter_var($myfilter, FILTER_VALIDATE_EMAIL);
echo filter_var($myfilter, FILTER_VALIDATE_URL);
echo filter_var($myfilter, FILTER_VALIDATE_IP);

?>