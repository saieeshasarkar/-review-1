<?php
$x= $_POST["input1"];
$y= $_POST ["input2"]; 
$calc= $_POST ["calc"];
echo "x =" . $x . "<br>";
echo "y =" . $y . "<br>";
if ($calc=="plus"){
echo "x+y=". $x+$y . "<br>";
}
 elseif ($calc== "minus") {
     echo "x-y=".  $x-$y. "<br>"; 
 }
 elseif ( $calc== "multiply") {
    echo "x*y=".  $x*$y. "<br>"; 
}
elseif ( $calc== "dvide") {
    echo "x/y=".  $x/$y. "<br>"; 
}




echo $calc . "<br>";

?>