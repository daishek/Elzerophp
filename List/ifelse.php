<?php $title="if condition"; include_once "../inc/head.php"; 
$num1 = 10;
$num2 = 10;
if ($num1 > $num2){
    echo $num1 . " > " . $num2;
}elseif($num1 == $num2){
    echo $num1 . " = " . $num2;
}else{
    echo $num1 . " < " . $num2;
}
?>

<?php include_once "../inc/footer.php" ?>