<?php $title="Functions"; include_once "../inc/head.php"; 

function sayHiTo($persson){
    return "Hi " . $persson;
}
//call function
echo sayHiTo("Dai");

echo "<br><br>";
function ageInDays($age){
    return $age * 365;
}
echo "Age In Days: " . ageInDays(20) ." days";
?>

<?php include_once "../inc/footer.php" ?> 