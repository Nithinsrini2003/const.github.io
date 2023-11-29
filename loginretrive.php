<br>


<center>
    <h1>Data </h1>
    <br>
    
<?php
if ($_POST['password']=='Adminisnithin'){

    $link=mysqli_connect("localhost","root","","construction");
if ($link==false){
   die("error".mysqli_connect_error());
}
$sql="select * from loginf group by email";
if ($result=mysqli_query($link,$sql)){
    if (mysqli_num_rows($result)){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>username</th>";
                echo "<th>email</th>";
                echo "<th>password</th>";
              
            echo"</tr>";
        while($row=mysqli_fetch_array($result)){
            echo"<tr>";
                echo"<td>". $row[0]."</td>";
                echo"<td>". $row[1]."</td>";
                echo"<td>". $row[2]."</td>";
              
            echo"</tr>";
        }
         echo"</table>";
         mysqli_free_result($result);
    } else{
           echo"no records found";
}
}
mysqli_close($link);
   
}
else{
    echo "no";
}

  ;
?>

</center>