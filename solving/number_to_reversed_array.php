<?php $title="Number To reversed array | Solving"; include_once "../inc/head.php"; 
function Convert($n){
    $arr = str_split($n);
    $r = array_map("intval", $arr);
    return array_reverse($r);
}
echo "<pre>";
var_dump(Convert(125443));
echo "</pre>";
?>

<?php include_once "../inc/footer.php" ?>