<html>
<body>
<?php
   setcookie("name", "John Watkin", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
?>
<?php
$expire = time()+60*60*24*30;
setcookie("age", "36");
?>
<?php
//$_COOKIE variable is used to retrieve a cookie value.
 echo $_COOKIE["user"];
print_r($_COOKIE);
?>
<?php
//isset() to findout if a cookie has been set.
if(isset($_COOKIE["user"])) 
{
    echo "Welcome" . $_COOKIE["user"]."!<br>";
} 
else {
    echo "Welcome guest!<br>";
}
?>
<?php
#Check if Cookies are Enabled :
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}?>
</body>
</html>
