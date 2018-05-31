<?php
	if (isset($_POST['valider'])) {
		extract($_POST);

		$req = "INSERT INTO CLASSE (code, libelle) values ('$code', '$libelle')";

		$exe = execute($req);

		if ($exe) {
			echo"<p class='succes'>Succes</p>";
		}
		else {
			echo "<p class='echec'>Echec</p>";
		}
	}