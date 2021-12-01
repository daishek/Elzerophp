<?php
    $title = "Learn Php";
    include_once "./inc/head.php";
    
    //resume session...
    session_start();
    //get username
?>

<center>
    <?php
    if(isset($_SESSION['username'])){
        ?>
        <span class="welcome">Welcome @<?php echo $_SESSION['username']; ?></span>
    <?php }
    include './List/php/c.php';
    ?>
    <h1>Learn PHP</h1>
</center>
<div class="container">
    <div>
        <h1>Learn List:</h1>
        <ul>
            <li><a href="./list/constant.php">Constant</a></li>
            <li><a href="./list/ifelse.php">If condition</a></li>
            <li><a href="./list/operators.php">Operators</a></li>
            <li><a href="./list/forloop.php">For loop</a></li>
            <li><a href="./list/function.php">Functions</a></li>
            <li><a href="./list/array.php">Arrays</a></li>
            <li><a href="./list/arrayMethods.php">Array Methods</a></li>
            <li><a href="./list/stringFunctions.php">String Functions part 1</a></li>
            <li><a href="./list/stringFunctions_2.php">String Functions part 2</a></li>
            <li><a href="./list/stringFunctions_3.php">String Functions part 3</a></li>
            <li><a href="./list/stringFunctions_4.php">String Functions part 4</a></li>
            <li><a href="./list/fileSystem_1.php">File System Simple Training 1</a></li>
            <li><a href="./list/fileSystem_2.php">File System PART 2</a></li>
            <li><a href="./list/fileSystem_3.php">File System PART 3</a></li>
            <li><a href="./list/predefinedVariables.php">Predefined Variables</a></li>
            <li><a href="./list/cookies.php">Cookies</a></li>
            <li><a href="./list/session.php">Session</a></li>
            <li><a href="./list/sessionTraining.php">Session Training</a></li>
            <li><a href="./list/misc.php">Misc Functions </a></li>
            <li><a href="./list/filter.php">Filter </a></li>
            <li><a href="./list/dateTime.php">Date And Time</a></li>
        </ul>
    </div>
    <div>
        <h1>Problem Solving List:</h1>
        <ul>
            <li><a href="./solving/find_missing.php">Find the missing letters</a></li>
            <li><a href="./solving/number_to_reversed_array.php">Number to reversed array</a></li>
        </ul>
    </div>
</div>
<?php
    include_once "./inc/footer.php"
?>