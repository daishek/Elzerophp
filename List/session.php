<?php $title="Session"; include_once "../inc/head.php";

    //start or resume session  
    session_start();

    $_SESSION['username'] = "Dai Chekkal";
    echo $_SESSION['username'].'<br>';
    $_SESSION['username'] = "daishek";
    echo $_SESSION['username'].'<br>';

    // now i go to index.php to resume...



    //end session
    echo "<a href='php/endsession.php'>End</a>"
?>
<?php include_once "../inc/footer.php" ?>