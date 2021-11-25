<?php $title="String Functions"; include_once "../inc/head.php"; 
//explode

$tags = "Life, Love, Hate, Red, Blue ,manga  ,  one piece,  redbol";
echo $tags."<br>";
$arr = explode(',', $tags, -1);
echo "<pre>";print_r($arr);echo "<pre>";


$links = "header,styles,footer,layout";

$cssLinks = explode(',',$links);


for($i=0;$i< count($cssLinks);$i++){
    echo "<link rel='stylesheet' href='css/".$cssLinks[$i].".css'>";
}

//implode   != explode

$food = array("Milk","Banana","Water","Apple","Kiwi");
$foodToString = implode(" ",$food);
// $foodToString = join(" ",$food);
echo $foodToString . "<br>";



//str_split

$myStr = "I Love Php";

$myStr_splited = str_split($myStr, 1);
print_r($myStr_splited);


for($i=0;$i<count($myStr_splited);$i++){
    echo $myStr_splited[$i];
}

echo "<br>***<br>***<br>";
//chunk_split() do not convert the string to array
$myStr_chunk_splited = chunk_split($myStr,2, "/");

print_r($myStr_chunk_splited);
?>

<?php include_once "../inc/footer.php" ?>