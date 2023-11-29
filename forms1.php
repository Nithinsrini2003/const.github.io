<!DOCTYPE html>

<html>

<head>

<title>Football form validation</title>

<style> body {
background-color: #FF6F61;

}


#message {
 
display:none; background: #f1f1f1; color: #000; position: relative; padding: 20px; margin-top: 10px;
}



#message p { padding: 10px 35px; font-size: 18px;
}


.valid {

color: green;

}


.valid:before { position: relative; left: -35px; content: "✔";
}


.invalid { color: red;
 
}


.invalid:before { position: relative; left: -35px; content: "✖";
}

</style>




</body>

</head>


<body>


<h1 style="color:black; text-align:center; font-family:time new roman; font-size:300% "><u>ADDING NEW TEAMS</u></H1>
<h2 style="color:black; text-align:center;"><u>fill the <strong>forms details </strong>to add new teams</u></h2>




<form action="sql.php" method="post">

<label for="fname"><p style="color:black; font-family:arial; font-size:150% "> team name</p></label><br>
<input type="text" name="fname" required>

<input type="submit" value="Submit"><br><br>
 
<label for="lname"><p style="color:black; font-family:arial; font-size:150% ">manager name</p></label><br>
<input type="text" name="mname" required>

<input type="submit" value="Submit"><br><br>

<label for="cname"><p style="color:black; font-family:arial; font-size:150% "> captain name</p></label><br>
<input type="text" name="cname" required>

<input type="submit" value="Submit"><br><br>

<hr>


<script>

function myFunction() {

var x = document.getElementById("myRadio").required; document.getElementById("demo").innerHTML = x;
}

</script>




<p style="color:black; font-family:arial; font-size:150% ">choose your own stadium</p>

<input type="radio" id="myRadio" name="stad" value="stadium A" required>

<label for="myRadio">STADIUM A</label><br>

<input type="radio" id="myRadio" name="stad" value="stadium B" required>

<label for="myRadio">STADIUM B</label><br>

<input type="radio" id="myRadio" name="stad" value="stadium C" required>

<label for="myRadio">STADIUM C</label><br>

<input type="radio" id="myRadio" name="stad" value="stadium D" required>

<label for="myRadio">STADIUM D</label><br><br>

<input type="submit">

<hr>
 

<p style="color:black; font-family:arial; font-size:150% ">tick the options you have </p>


<input type="checkbox" id="a1" name="player" value="players">

<label for="a1"> our team consist of enough players</label><br>

<input type="checkbox" id="a2" name="register" value="registrations">

<label for="a2">our team was registered in football union</label><br>

<input type="checkbox" id="a3" name="fund" value="money">

<label for="a3"> our team has enough money</label><br>

<input type="checkbox" id="a4" name="exp" value="experience">

<label for="a4"> our team has min 5 years of experience</label><br>

<hr>

<p style="color:black; font-family:arial; font-size:150% ">please submit neccessary files</p>

<p>files required:</P>

<p>1.registation copy</P>

<p>2.team id proof</P>

<p>3.manager and coach id's</P>

<p>4.player's id</P>

<label for="files">Select files:</label>

<input type="file" id="files" name="files" multiple><br><br>

<hr>
 
<p style="color:black; font-family:arial; font-size:150% ">enter team number and date of the team started</p>
<label for="phone">team number:</label>


<input type="text" id="phone" name="phone" onkeypress="phoneno()" maxlength="10" >
<br><br>


<label for="team">team started date: </label>

<input type="date" id="team" name="teams" required>

<input type="submit">






<hr>


<p style="color:black; font-family:arial; font-size:150% ">select a needed things from the list</p>
<input list="needed" name="need">

<datalist id="needed">

<option value="player">

<option value="coach">

<option value="physician">

<option value="manager">

<option value="team advisor">

</datalist><br>
 
<br>

<label for="quantity">person (between 1 and 3):</label>

<input type="number" id="quantity" name="quantity" min="1" max="3"><br>

<hr>




<p style="color:black; font-family:arial; font-size:150% ">create a username , email and password for your team</p><br>


<label for="username">Username:</label>

<input type="text" id="username" name="username"><br><br>






<label for="email">Enter your email:</label>

<input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a- z]{2,3}$">
<input type="submit">

<br><br>




<label for="psw">Password</label>

<input type="password" placeholder=" Password" id="psw" name="psw1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>


<input type="checkbox" onclick="myFunction()">Show password<bR><br>
 

<label for="confirm_password">Confirm Password</label>


<input type="password" placeholder="Confirm Password" id="confirm_password" required>


<script>

function myFunction() {

var x = document.getElementById("psw"); if (x.type === "password") {
x.type = "text";

} else {

x.type = "password";

}

}

</script>


<input type="submit" value="Submit">


<div id="message">

<h3>Password must contain the following:</h3>

<p id="letter" class="invalid">A <b>lowercase</b> letter</p>

<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>

<p id="number" class="invalid">A <b>number</b></p>

<p id="length" class="invalid">Minimum <b>8 characters</b></p>

</div>
 

<script>

var myInput = document.getElementById("psw"); var letter = document.getElementById("letter"); var capital = document.getElementById("capital");
var number = document.getElementById("number"); var length = document.getElementById("length");

myInput.onfocus = function() { document.getElementById("message").style.display = "block";
}


myInput.onblur = function() { document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {

// Validate lowercase letters

var lowerCaseLetters = /[a-z]/g; if(myInput.value.match(lowerCaseLetters)) { letter.classList.remove("invalid"); letter.classList.add("valid");
} else { letter.classList.remove("valid"); letter.classList.add("invalid");
 
}


var upperCaseLetters = /[A-Z]/g; if(myInput.value.match(upperCaseLetters)) { capital.classList.remove("invalid"); capital.classList.add("valid");
} else { capital.classList.remove("valid"); capital.classList.add("invalid");
}


var numbers = /[0-9]/g; if(myInput.value.match(numbers)) { number.classList.remove("invalid"); number.classList.add("valid");
} else { number.classList.remove("valid"); number.classList.add("invalid");
}


if(myInput.value.length >= 8) { length.classList.remove("invalid"); length.classList.add("valid");
} else { length.classList.remove("valid");
 
length.classList.add("invalid");

}

}

</script><br>

<br>

<script>

var password = document.getElementById("psw")

, confirm_password = document.getElementById("confirm_password");


function validatePassword(){

if(psw.value != confirm_password.value) { confirm_password.setCustomValidity("Passwords Don't Match");
} else { confirm_password.setCustomValidity('');
}

}



psw.onchange = validatePassword; confirm_password.onkeyup = validatePassword;

</script>
 
<hr>


<p style="color:black; font-family:arial; font-size:150% ">fanbase for your team</p>


<label for="vol">Volume (between 0 and 100):</label>

<input type="range" id="vol" name="vol" min="0" max="100">


<p style="color:black; font-family:arial; font-size:150% ">enter team url</p>

<label for="homepage">url</label>

<input type="url" id="tu" name="tu">

<hr>


<p style="color:black; font-family:arial; font-size:150% ">enter team official sponsers</p>

<label for="spon">Choose a sponser:</label>

<select id="spon" name="spon">

<option value="addidas"> ADDIDAS</option>
<option value="ea"> EA</option>
<option value="puma"> PUMA</ption>
<option value="benz"> BENZ</option>
<option value="tata"> TATA</option>
 <option value="nike"> NIKE</option>
</select>

<br>

<br>

<BR>

<input type="submit" value="Submit">


</form>


<hr>

</body>

</html>

