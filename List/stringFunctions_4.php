<?php $title="String Functions part 4"; include_once "../inc/head.php"; 
  //parse_str(string, array)
  $links = "name=Dai&age=20&skill=5";
  parse_str($links, $array);
  //get infos as variables
  // echo $name."<br>";
  // echo $age."<br>";
  // echo $skill."<br>";

  //get infos as arr
  echo "<pre>";print_r($array);echo "</pre>";



  //nl2br   transform \n to <br> tag

  $str1 = "dai \n hates php \n and \n loves javascript \n";
  echo nl2br($str1);





  //strPos( string, find, offset(start))

  $str2 ="daixk love 1 thing and 1 life";
  echo strpos($str2, "1", 12)."<br>"; // 12 w tala3


  //stripos

  $str3='dai shek hates php and loves js more than PHP';
  echo strpos($str3, "PHP")."<br>"; //sensitive 
  echo stripos($str3, "PHP")."<br>"; //not sesitive
  echo strrpos($str3, "PHP")."<br>"; //right to left and sensitiv
  echo strripos($str3, "PHP")."<br>"; //right to left and not sensitiv


    //strStr

    echo strstr(" Dai loves php so much cause PHP is cool","PHP")."<br>";
    echo strstr(" Dai loves php so much cause PHP is cool","PHP", true)."<br>";
    echo stristr(" Dai loves php so much cause PHP is cool","PHP")."<br>";
    echo strchr(" Dai loves php so much cause PHP is cool","PHP")."<br>";

    //example
    //get hte domains name
    $email1 = "daishek@gmail.com";
    $email2 = "daishek@yahoo.com";
    $email3 = "daishek@github.com";
    $email4 = "daishek@outlook.com";


    echo strstr($email1, "@")."<br>";
    echo strstr($email2, "@")."<br>";
    echo strstr($email3, "@")."<br>";
    echo strstr($email4, "@")."<br>";




    //strcmp() compare strings length
    $name = "da3i";
    $string1 = "PHP";
    $string2 = "PHPPHP";
    echo strcmp($string1,$string2)."<br>";
    echo strncmp($string1,$string2,3)."<br>";
    echo strrev($name)."<br>";



  //substr
  $mystring = "I hate php and i love js";
  $piece = substr($mystring,7,3);
  echo $piece."<br>";
  echo substr_count($mystring, "php")."<br>";
  // substr_compare(s1, s2, start, length, case)
  $shit1 = "Hello Osama";
  $shit2 = "Osama";
  echo substr_compare($shit1,$shit2,6);



?>

<?php include_once "../inc/footer.php" ?>
