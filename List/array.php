<?php $title="Arrays"; include_once "../inc/head.php"; 
//indexed array
$members1 = array("Ahmed",  "Dai", "Slimane", "Nardjiss", "Amine");
// echo $members[0];//ahmed
echo "<h6>Associative array:</h6>";
echo "<ul>";
for($i=0;$i<=count($members1)-1;$i++){
    echo "<li>" . $members1[$i] . "</li>";
}
echo "</ul><ul>";

foreach($members1 as $val){
    echo "<li>" . $val . "</li>";
}
echo "</ul>";
//assosiative array
$members2 = array("Chekkal" => "dai" ,   "Sedrati" => "Slimane" , "Bahfir" => "Nardjiss" , "Lonnic" => "Amine" );
$members2["key"] = "value";
echo "<h6>Associative array:</h6><ul>";
foreach($members2 as $key => $val){
    echo "<li>" . $key . " => " . $val . "</li>";
}
echo "</ul>";
echo "<h6>Multidimensional Array:</h6><ul>";
$products = array(
    "fruit" => array("Apple", "Banana", "Kiwi"),
    "lequide" => array("Milk", "Water", "juse"),
    "eat" => array("Bread", "Chocolat", "Chips")
);
echo $products["fruit"][0];
echo $products["lequide"][1];
echo $products["eat"][2];
echo "<br><br>";
/*multiarr======> array (
    array(..),
    array(..),
    array(..)
) */

// echo "<pre>";
// print_r($products);
// echo "</pre>";

$diet = array(
    "Day1" => array("Banana", "Apple", "Bread"),
    "Day2" => array("Meet", "Sugar", "kiwi"),
    "Day3" => array("Fish", "Selt", "Apple"),
);

foreach ($diet as $day => $food){
    echo "in " . $day . " i'll eat : <br>";
    foreach ($food as $item){
        echo "- " .$item ."<br>";
    }
}


?>




<?php include_once "../inc/footer.php"; ?>