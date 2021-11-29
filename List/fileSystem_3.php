<?php $title = "File System PART 3"; include_once "../inc/head.php";
    $fileHandle = fopen('./php/text.txt', 'r+');//write and read
    // fseek($fileHandle, 10);
    // fwrite($fileHandle, 'Z');
    $read = fread($fileHandle, filesize('./php/text.txt'));
    echo $read;

    fclose($fileHandle);
?>
<?php 
    include_once "../inc/footer.php";
?>