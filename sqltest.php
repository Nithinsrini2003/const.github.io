<? php
$a=mysqli_connect("localhost","root"," ","test");
if ($a==false){
die ('error');{
else{ echo "connected"; }
$sql="insert into tt(no,name,tname) values ('$_POST[B50]','$_POST[fname]','$_POST[team]')";
if (mysqli_query($a,$sql)){
echo "added"{
else{ echo"error";}
mysqli_close($a)
?>