<?php $title="String Functions part 3"; include_once "../inc/head.php"; 
// addslashes()
    $str1 = "I'll go at \ 6 o'clock";
    echo $str1."<br>";
    $skipped = addslashes($str1);
    echo $skipped."<br>";
//stripslashes
    $clean = stripcslashes($str1); 
    echo $clean."<br>";
//strip tags
    $str2 = "I love <span style='color:red;'>php</span> go to <a href='https://www.php.net'>To learn php</a>";
    echo $str2."<br>";
    $clean_tag = strip_tags($str2, "<span>");
    echo $clean_tag."<br>";
//StrToLower
    $name = "AbbaS";
    echo strtolower($name)."<br>";
//StrToUpper
    echo strtoupper($name)."<br>";
    


//lcfirst
    echo lcfirst("THIS METHOD TURNS MY STRING FIRST LETTER TO LOWER CASE")."<br>";
    echo ucfirst("and this turns it to upper case")."<br>";
    echo ucwords("uppercase the first character of each word in a string")."<br>";
    
    
    
    
    
    
//trim() ltrim rtrim
    $str3 = "I lov  e Php";
    echo var_dump($str3); //14
    $trimed = trim($str3);
    echo var_dump($trimed)."<br>";
    
    
//str_word_count()    
    $countword = str_word_count("uppercase the \n first character of @ &&& each word  @@@@@@@  in a str@ing ",2,"&"); //without spicial chars 1 indexed arr 2 associative arr
    echo "<pre>"; print_r($countword); echo "</pre>";
    
    ?>

<?php include_once "../inc/footer.php" ?>