<?php
	if (isset($_POST['valider'])) {
		extract($_POST);

		$req = "UPDATE ETUDIANT SET matricule = '$matricule', nom = '$nom', prenom = '$prenom', sexe = '$sexe', telephone = '$telephone', adresse = '$adresse', datenaiss = '$datenaiss', id_cla = $id_cla WHERE id = $id";

		$exe
		 = execute($req);

		if ($exe) {
			echo "<p class='succes'> Succes </p>";
		}
		else{
			echo "<p class='echec'> Echec </p>";
		}

	}
