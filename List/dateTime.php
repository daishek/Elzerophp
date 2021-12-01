<?php $title="Date And Time"; include_once "../inc/head.php"; 
// echo time();
echo "Curent date: ".date("Y-m-d \of h:i:s", time());
// echo date_default_timezone_get();
echo "<br>---------------------------------------------<br>";
$nextMonth = time() + (30 * 24 * 60 * 60);
echo "Next month date: ".date("Y-m-d \of h:i:s", $nextMonth);
echo "<br>---------------------------------------------<br>";
$next6Month = time() + ((30*6) * 24 * 60 * 60);
echo date('1jS \of F Y  h:i:;s a', $next6Month);
echo "<br>---------------------------------------------<br>";
$nWay = strtotime('next Friday');
echo date("Y-m-d \of h:i:s", $nWay);
?>

<?php include_once "../inc/footer.php" ?> 