<?php
    $title = "File System Simple Training 1";
    include_once "../inc/head.php";


    // check if Directory is exist
    // make the dir
    //asign dir to a variable
    //create file inside .php
    //assign file to a var
    //put content inside
    //change mode to read only
    //check if is writable
    //make it writable
    //include this file


    //start

    if(file_exists(__DIR__ . '/php')){
        echo "Directory Exist"."<br>";
    }else{
        mkdir(__DIR__ . "/php");
        echo "Directory succesfully created"."<br>";
    }

    $dir = __DIR__ . '\php\\';

    echo $dir."<br>";

    $createFile = file_put_contents($dir . "text.php", "Hello, php");
    if($createFile){
        echo "File Created sucssefully"."<br>";
    }else{
        echo "Error: we can't create this file!"."<br>";
    }

    $file = $dir . 'text.php';
    echo $file."<br>";
    chmod($file, 0444);
    if (is_writable($file)){
        file_put_contents($file, "ma nigga");
    }else{
        chmod($file, 0755);
        file_put_contents($file, 'Congratulations the training is done.');
    }

    include $file;
?>
<?php 
    include_once "../inc/footer.php";
?>