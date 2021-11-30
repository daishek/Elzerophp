<?php $title="Predefined Variables"; include_once "../inc/head.php"; 
    // $_GLOBAL

    //Global Scope
    $name = "Dai";

    function testFunc(){
        // $name = "Ahmed";
        // echo $name; //wrong way
        // function scope 
        echo $GLOBALS['name'];
    }
    testFunc();


    echo "<br>**************S E R V E R*************<br>";
    
    //Server*************** $_SERVER
    
    echo "<br>Server name: ".$_SERVER['SERVER_NAME'];
    echo "<br>".$_SERVER['QUERY_STRING'];
    echo "<br>".$_SERVER['HTTP_REFERER'];
    echo "<br>Port: ".$_SERVER['SERVER_PORT'];

//Get
    echo "<br>**************G E T & P O S T*************<br>";
    $admins = array("daixk", "osama");






?>
<form method="get" action="/elzerophp/list/predefinedVariables.php">
    <input type="text" placeholder="usernname..." name ="username">
    <button type="submit" name="submit">Enter</button>

</form>
<?php
    $user = $_GET['username'];
    // $user = $_POST['username'];
    $request = $_SERVER['REQUEST_METHOD'];
    if($request == 'POST'){
        echo "******P O S T******<br>";
    }elseif($request == 'GET'){
        echo "******G E T******<br>";
    }
    if(in_array($user, $admins)){?>
        <h3>Welcomme back "<?php echo $user; ?>"</h3>
    <?php }else{?>
        <h3>"<?php echo $user; ?>" dosen't exist</h3>
    <?php }
?>
<?php include_once "../inc/footer.php" ?>