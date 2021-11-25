<?php $title="Operators"; include_once "../inc/head.php";
$var1 = 100;
$var2 = 100;
$string = "100";
?>
<h1>Arethmitic operators:</h1>
<ul>
    <li>+ addition</li>
    <li>- sub</li>
    <li>* multipl</li>
    <li>/ div</li>
    <li>% modulus</li>
    <li>** exp</li>
</ul>
<?php
echo $var1 . " / " . $var2 . " = " . $var1 / $var2 . "<br>";
echo $var1 . " % " . $var2 . " = " . $var1 % $var2 ;
?>
<h1>Assignement operators:</h1>
<ul>
    <li>= equal</li>
    <li>.= += -= *= /=</li>
</ul>
<h1>Comparison operators:</h1>
<ul>
    <li>== :Equals</li>
    <li>=== :Identical same type!</li>
    <li>!= or <> :Not equals</li>
    <li>!== :Not equals same type!</li>
    <li>< , > or <= , >=</li>
</ul>
<?php
    if($var1 === $string){
        echo "true";
    }else{
        echo "false";
    }
?>
<h1>Increment / Decrement Operators:</h1>
<ul>
    <li>++$var || $var++</li>
    <li>--$var || $var--</li>
    <li>--</li>
</ul>
<?php
echo $var1 . "<br>";
$var1++;
$var1--;
echo $var1;
?>
<h1>Logical Operators</h1>
<ul>
    <li>& and</li>
    <li>|| or</li>
    <li>xor</li>
    <li>! Not</li>
</ul>
<?php
$age = 30; 
$skilYear = 2; 
$haveCar = "yes"; 
if($age>=30 && $skilYear >=3 && $haveCar=== "yes"){
    echo "Accepted";
}
if($age>=30 or $skilYear >=3 or $haveCar=== "yes") {
    echo "Accepted ^_^";
}
include_once "../inc/footer.php" ?>