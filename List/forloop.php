<?php $title="for loop"; include_once "../inc/head.php"; 
$lang = array("html", "java", "python", "css", "c", "c++", "javascript");
for($i=0; $i <= count($lang) ; $i++){
    echo $lang[$i] . "<br>";
}
?>

<?php include_once "../inc/footer.php" ?>