<?php
$a=mysqli_connect("localhost","root","","fbl");
if ($a==false){
die("error");
}
else{
echo "connected";
}
$sql=" INSERT INTO team(team_no,team_name,manager_name,own_stadium,username,email,password,team_start_date ,sponsers)
VALUES ('$_POST[phone]','$_POST[fname]','$_POST[mname]','$_POST[stad]','$_POST[username]','$_POST[email]','$_POST[psw1]','$_POST[teams]','$_POST[spon]')";
if (mysqli_query($a,$sql)){
echo "Records added";
}
else{
echo "error";
}

mysqli_close($a);
?>