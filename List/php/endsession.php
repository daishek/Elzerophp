<?php
session_start();
//unset 
session_unset();
//destroy
session_destroy();

header('Location: http://localhost/elzerophp/');
exit;

?>