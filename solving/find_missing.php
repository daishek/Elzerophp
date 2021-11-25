<?php $title="Found The Missing Letters | Solving"; include_once "../inc/head.php"; 

function find_missing_letter_in($string){
    $alpha = '';
    foreach (range("a", "z") as $letter){
        $alpha .= $letter;
    }
    //start point
    $start = strpos($alpha, $string[0]);

    for($i = 0; $i < strlen($string);$i++){
        echo $alpha[$i + $start]."<br>";
        echo $string[$i]."<br>";
        echo "----- <br>";
        if($alpha[$i + $start] !== $string[$i]){
            return "The missing letter is: \"".$alpha[$i + $start]."\"";
        }
    }


}


echo find_missing_letter_in("hijklmo");
?>

<?php include_once "../inc/footer.php" ?>