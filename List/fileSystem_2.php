<?php
    $title = "File System PART 2";
    include_once "../inc/head.php";
    
    $getText = file_get_contents('php\\text.php',false,NULL,0,15);
    file_put_contents('php\\part2.txt', $getText."<br>", FILE_APPEND);
    include "./php/part2.txt";
    copy('./php/part2.txt', './php/part2_copy.txt');
    echo "**************************<br>";
    include "./php/part2_copy.txt";
    rename('./php/part2_copy.txt','./php/renamed.txt');
    echo "**************************<br>";
    // include "./php/part2_copy.txt";//dosent exist => renamed 
    include "./php/renamed.txt";
    
    echo "**************************<br>";
    $infos = pathinfo(__DIR__. '/php/renamed.txt');
    echo "<pre>";print_r($infos);echo "</pre>";


    $file = 'newfile.txt';
    if(file_exists($file) && is_writeable($file)){
        if(!unlink($file)){
            echo "We can't delete this \"".$file."\"";
        }else{
            echo "\"".$file."\" Succesfylly Deleted!";
        }
    }else{
        echo "\"".$file . "\" is not exist";
    }



    echo "**************************<br>";
    //scandir
    $link = __DIR__ . '/php';
    $scandir = scandir($link);
    echo "<pre>";print_r($scandir);echo "</pre>";

    $fileHandel = fopen($link . "/nikmok.txt", 'w+');
?>
<?php 
    include_once "../inc/footer.php";
?>