<html>
<body>
<center>
<h1>Team Details For The New Leauge</h1>
</center>

<?php
$a=mysqli_connect("localhost","root","","fbl");
if ($a==false){
die("error");
}
else{
echo "";
}

$sql="SELECT*FROM team";
if($result=mysqli_query($a,$sql)){
if(mysqli_num_rows($result)>0){
echo"<table border=1>";
echo"<tr>";
echo"<th>team_no</th>";
echo"<th>team_name</th>";
echo"<th>manager_name</th>";
echo"<th>own_stadium</th>";
echo"<th>username</th>";
echo"<th>email</th>";
echo"<th>password</th>";
echo"<th>team_start_date</th>";
echo"<th>sponsers</th>";
echo"</tr>";
while($row=mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>",$row['team_no'],"</td>";
echo"<td>",$row['team_name'],"</td>";
echo"<td>",$row['manager_name'],"</td>";
echo"<td>",$row['own_stadium'],"</td>";
echo"<td>",$row['username'],"</td>";
echo"<td>",$row['email'],"</td>";
echo"<td>",$row['password'],"</td>";
echo"<td>",$row['team_start_date'],"</td>";
echo"<td>",$row['sponsers'],"</td>";



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
	
		
