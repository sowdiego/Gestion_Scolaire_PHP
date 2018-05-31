<?php
	if (isset($_POST['valider'])) {
		extract($_POST);

		$req = "UPDATE CLASSE SET Code = '$code', Libelle = '$libelle' WHERE id = $id";

		$exe = execute($req);

		if ($exe) {
			echo "<p class='succes'> Succes </p>";
		}
		else{
			echo "<p class='echec'> Echec </p>";
		}

	}