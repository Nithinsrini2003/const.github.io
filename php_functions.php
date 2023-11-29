<html> 
<body>
<?php
#php functions with parameter
function addFunction($num1, $num2) 
{
    $sum = $num1 + $num2;
    echo "Sum of the two numbers is : $sum";
}
addFunction(10, 20);
?> 
<br>
<?php
#Passing Arguments by Reference:
function addFive($num) 
{	 
    $num += 5;
}
function addSix(&$num)
{   
    $num += 6;
}    
$orignum = 10;
addFive( $orignum );
echo "Original Value is $orignum<br>";
addSix( $orignum );
echo "Original Value is $orignum<b>";
?>
<br>
<?php
#PHP Functions returning value 
function addFunction1($num1, $num2) 
{
     $sum = $num1 + $num2;
     return $sum;
}
$return_value = addFunction1(10, 20);
echo "Returned value from the function : $return_value";
?>
<br>
<?php
#Default Values for Function Parameters:
function print1($param = "hi") 
{
     print $param;
}
print1("This is test");
print1();
?>
</body>
</html>



