<?php $title="Cookies"; include_once "../inc/head.php"; 
    // setcookie("Zero", "test", time() + 3600, "/");

    // if (count($_COOKIE) > 0 ){
    //     echo "Cookie Enabled";
    // }else{
    //     echo "Cookie Not Enabled";
    // }

    
    //setcookie(name, value, expire, path, domain, secure, httponly)
    
    
    //training*****
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //
        $mainTheme = $_POST['color'];
        setcookie("theme", $mainTheme, time() + 3600, "/"); //"localhost", TRUE, TRUE
    }

    echo $mainTheme;


?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="color" name="color">
        <input type="submit" value="Choose">
    </form>
<?php include_once "../inc/footer.php" ?>