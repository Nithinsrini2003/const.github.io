<html>
<body>
<center>
<h1>PLAYER DETAILS</h1>
</center>

<?php
$a=mysqli_connect("localhost","root","","fbl");
if ($a==false){
die("error");
}
else{
echo "";
}



$sql="SELECT*FROM player1";
if($result=mysqli_query($a,$sql)){
if(mysqli_num_rows($result)>0){
echo"<table border=1>";
echo"<tr>";
echo"<th>player_name</th>";
echo"<th>team_name</th>";
echo"<th>player_position</th>";
echo"<th>player_points</th>";
echo"<th>man_of_the_match</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>",$row['player_name'],"</td>";
echo"<td>",$row['team_name'],"</td>";
echo"<td>",$row['player_position'],"</td>";
echo"<td>",$row['player_points'],"</td>";
echo"<td>",$row['man_of_the_match'],"</td>";



echo"</tr>";
}
echo"</table>";
//close result set
mysqli_free_result($result);
}else{	
echo"No records matching your query were found,";
}
}else{
echo"Error;could not able to execute $sql,",mysqli_error($a);
}
//close connection
mysqli_close($a);
?>
</body>
</html>
	
		
