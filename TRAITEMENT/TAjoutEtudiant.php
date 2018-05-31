<?php
	if (isset($_POST['valider'])) {
		extract($_POST);

		$req = "INSERT INTO ETUDIANT 
			   (matricule, nom, prenom, sexe, telephone, adresse, datenaiss, id_cla) 
		values ('$matricule', '$nom', '$prenom', '$sexe', '$telephone', '$adresse', '$datenaiss', $id_cla)";

		$exe = execute($req);

		if ($exe) {
			echo"<p class='succes'>Succes</p>";
		}
		else {
			echo "<p class='echec'>Echec</p>";
		}
	}