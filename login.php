<?php

$av=(($_POST['1']+$_POST['2']+$_POST['3']+$_POST['4']+$_POST['5'])/5);




$a=mysqli_connect("localhost","root","","construction");
if ($a==false){
    die("error1");
}
    else{
        echo "";
    }

    


$sql=" INSERT INTO average(m1,m2,m3,m4,m5,av)VALUES ('$_POST[1]','$_POST[2]','$_POST[3]','$_POST[4]','$_POST[5]','$av')";
if (mysqli_query($a,$sql)){
    echo "";
}
else
{echo 
"2error";
}



    mysqli_close($a);
?>

