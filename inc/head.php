<?php
$mainTheme = "#ececec";

if(isset($_COOKIE['theme'])){
    $theme = $_COOKIE['theme'];
}else{
    $theme = $mainTheme;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        .welcome{
            font-family: 'Arial';
            color: #555;
        }
        .container{
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body style="background-color: <?php echo $theme ?>;">
    <div class="content">