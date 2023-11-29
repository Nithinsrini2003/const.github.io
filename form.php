<!doctype>
<html>
<style> body {
background-color: #5F9EA0;
}
</style>
</body>
<body>
<center>
<h1>PLAYER DETAILS</h1>
</center>
<form method ="post" action= "C:\xampp\htdocs\2021506058\sqltest.php">
<label for="fname">1.Player name:</label><br>
<br><input type="text" id="fname" name="fname"><br>
<br> <label for="team">2.TEAM:</label><br> <select id="team" name="team">
<option value="Everton FC">Everton FC</option>
<option value="Napoli">Napoli</option>
<option value="Sevilla">Sevilla</option>
<option value="Genoa"> Genoa</option>
<option value="west Ham"> west Ham</option>
<option value="Postvale">Postvale</option>
<option value="AC Milan">AC Milan</option>
<option value="Spartan Progue"> Spartan Progue</option>
<option value="Liverpool">  Liverpool</option>
<option value="Stokecity"> Stokecity</option>
</select>
<br>
<p>3.IS THE PLAYER POSITION IN MATCH?</p>
<input type="radio" name="abc" id="Re" value="Goal Keeper">
<label for='Re'>Goal Keeper</label><br>
<input type="radio" name="abc" id="TAC" value="Attacker">
<label for='TAC'>Attacker</label><br>
<input type="radio" name="abc" id="TAC1" value="Midder">
<label for='TAC1'>Midder</label><br>
<input type="radio" name="abc" id="TAC2" value="Defender">
<label for='TAC2'>Defender</label><br>




<p>4.TOTA POINTS IN THE SEASON:</p>
<input type="RADIO" id="B50" name="B50" value="0-50">
<label for="B50"> 0 - 50</label><br>
<input type="RADIO" id="A50" name="B50" value="50-100">
<label for="A50">50 - 100</label><br>
<input type="RADIO" id="A100" name="B50" value="100">
<label for="A100"> 100</label><br><br><label for="mot">

5.Number of man of the match awards received:</label><br><br>
<input type="text" id="mot" name="mot"><br>

<br>
<br>
<input type="submit" value="Submit"><br><br>

</body>
</html>

