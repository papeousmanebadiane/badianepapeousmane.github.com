<!DOCTYPE html>
<html>
<head>
	<title>formulaire etudiant</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="recuperation/recup_DB.php" method="POST">
		<label>
		votre INE
		</label>
		<input type="text" name="INE" style="width: 94%;">

		<label>
			Pr&eacute;nom
		</label>

		<input type="text" name="prenom" style="width: 94%;">

		<label>
			Nom
		</label>
		<input type="text" name="nom" style="width: 94%;">

		<label>T&eacute;l&eacute;phone
		</label>
		<input type="tel" name="telephone" style="width: 94%;">

		<label>
			Email
		</label>
		<input type="email" name="email" style="width: 94%;">

		<label>Fili&eacute;re</label>
		<select name="FILIERE">
			<option value=""><!-- ---- choix---- --></option>
			<option value="MAI">MAI</option>
			<option value="MIC">MIC</option>
			<option value="CD">CD</option>
			<option value="AGN">AGN</option>
			<option value="IDA">IDA</option>
			<!--option value="DIL">DIL</option-->
		</select><br/>

		<label>ENO</label>
		<select name="ENO">
			<option value=""><!-- ---- choix---- --></option>
			<option value="DAKAR">DAKAR</option>
			<option value="ZIGUINCHOR">ZIGUINCHOR</option>
			<option value="BINGNONA">BINGNONA</option>
			<option value="KOLDA">KOLDA</option>
			<option value="SAINT-LOUIS">SAINT-LOUIS</option>
			<option value="PODOR">PODOR</option>
			<option value="GUEDIAWAYE">GUEDIAWAYE</option>
			<option value="KEURMASSAR">KEURMASSAR</option>
			<option value="MBOUR">MBOUR</option>
			<option value="THIES">THIES</option>
		</select>

		<div class="submit">
			<input type="submit" value="Enregistrer" class=" submit" >
		</div>
</form>

</body>
</html>