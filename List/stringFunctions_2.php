<?php $title="String Functions"; include_once "../inc/head.php"; 
    //str_replace(search,replace, string, count)
    
    $string1 = "Dai hates php too much, and he loves js, because php is boolshit syntax not like js but he have to learn php cause he need's it in hes projects with js, fuck php, love js";
    $result1 = str_replace(array("php", "js"), array("*HATED*","*LOVED*"), $string1, $i);
    echo $string1."<br>";
    echo $result1."<br>";
    echo $i."<br>";



    //str_replace
    echo str_repeat("*",20)."<br>";
    //str_shuffle
    echo str_shuffle("daixk")."<br>";
    //strlen()
    echo strlen("daixk")."<br>";



    //chaleng create a capatcha code

    $alpha = "";
    foreach(range("a","z") as $letter){
        $alpha .= $letter;
    }
    $code= str_shuffle($alpha);

    echo "please insert the code: <h3>" . substr(strtoupper($code), 0, 5)."</h3>";

?>

<?php include_once "../inc/footer.php" ?>