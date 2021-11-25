<?php $title="Array Methods"; include_once "../inc/head.php"; 
/////// search
$langs = array(
    "html",
    "css",
    "js" => "react",
    "php",
    "python",
    "sql",
    "java",
);

//in_array()


if(in_array("php", $langs)){
    echo "php in array";
}else{
    echo "No!!";
}

echo "<br><br>";
//array_search


$lang = array_search("php", $langs);
if($lang){
    echo $langs[$lang] . " exist";
}

echo "<br><br>";
//array_key_exist

if(array_key_exists("js", $langs)){
    echo "Yes it is";
}


//********************Add items */


echo "<pre>";print_r($langs);echo "</pre>";

// array_push adding at the end
$new = "c++";
array_push($langs, $new, "dart");
echo "<pre>";print_r($langs);echo "</pre>";

// array_unshift adding at start

array_unshift($langs, $new, "dart");
echo "<pre>";print_r($langs);echo "</pre>";



//*******************Remove Items */

//array_pop
array_pop($langs);
echo "<pre>";print_r($langs);echo "</pre>";
//array_shift
array_shift($langs);
echo "<pre>";print_r($langs);echo "</pre>";

//sorting


//sort(arr, sorting type) and rsort  indexed array
echo "<h6>Sort Indexed Array</h6>";
$users = array(
    "daixk",
    "sli_mane",
    "amine",
    "ndj",
    "10sikosiko",
    "75minelove",
    "killer10",
    "1985hocine",
    10,
    15,

);
echo "<pre>";print_r($users);echo "</pre>";
sort($users, SORT_STRING);
echo "<pre>";print_r($users);echo "</pre>";



echo "<h6>Sort Associative Array</h6>";
$ages = array(
    "daixk" => 30,
    "sli_mane" => 45,
    "amine" => 33,
    "ndj" => 25,
    "10sikosiko" => 17,
    "75minelove" => 55,
    "killer10" => 35,
    "1985hocine" => 18,
);

// asort
echo "<pre>";print_r($ages);echo "</pre>";
asort($ages);
echo "<pre>";print_r($ages);echo "</pre>";
ksort($ages);
echo "<pre>";print_r($ages);echo "</pre>";

//reverse

echo "<h6>Reverse Array</h6>";
$reversedAges = array_reverse($ages);
echo "<pre>";print_r($reversedAges);echo "</pre>";


//shufle    random

echo "<h6>Shuffle Array</h6>";
shuffle($users);
echo "<pre>";print_r($users);echo "</pre>";



/// array_fill(index, number, value)

echo "<h6>Array Fill</h6>";
$arrayFilled = array_fill(1, 20, "Dai");
echo "<pre>";print_r($arrayFilled);echo "</pre>";



// aray sum   la somme 
echo "<h6>Array sum</h6>";
$price = array(10,20,200,150,9,10, "ignored");
$tottalPrice = array_sum($price);
echo "<pre>";print_r($price);echo "</pre>";
echo "total price: " . $tottalPrice;

// array_rand
echo "<br><br>";
$randomFromUsers = array_rand($users, 5);
echo $users[$randomFromUsers[0]]. "<br>";
echo $users[$randomFromUsers[1]]. "<br>";
echo $users[$randomFromUsers[2]]. "<br>";
echo $users[$randomFromUsers[3]]. "<br>";

//array_unique

echo "<br><br><h6>Array Unique</h6>";

$uId = array(
    "dai", //*
    "dai",
    "Dai", //*
    "Slimane", //*
    "amine", //*
);


$unicUid = array_unique($uId);
echo "<pre>";print_r($unicUid);echo "</pre>";



?>

<?php include_once "../inc/footer.php" ?>