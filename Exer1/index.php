<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exer 1</title>
</head>
<body>
	<form method="" action="">
		<label for="userAgent">User Agent: </label>
		<input type="text" name="userAgent" value="<?php echo $_SERVER["HTTP_USER_AGENT"];?>">
		<br>
		<br>
		<label for="adresseIp">Adresse IP : </label>
		<input type="text" name="adresseIp" value="<?php echo $_SERVER["REMOTE_ADDR"] ?>">
		<br>
		<br>
		<label for="nomduServeur">Nom du Serveur : </label>
		<input type="text" name="nomduServeur" value="<?php echo $_SERVER["SERVER_NAME"] ?>">
		<br>
		<br>
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>