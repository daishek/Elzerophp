<?php 

if(empty($_SESSION['counter'])){
    $_SESSION['counter'] = 1;
}else{
    $_SESSION['counter']++;
}

echo "<h6>Click Page Visits:". $_SESSION['counter'] ."</h6>";