<?php
$a=mysqli_connect("localhost","root","","fbl");
if ($a==false){
die("error");
}
else{
echo "connected";
}
$sql=" INSERT INTO player1(player_name,team_name,player_position,player_points,man_of_the_match)
VALUES ('$_POST[fname]','$_POST[team]','$_POST[abc]','$_POST[B50]','$_POST[mot]')";
if (mysqli_query($a,$sql)){
echo "Records added";
}
else{
echo "error";
}

mysqli_close($a);
?>