<?php
	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		$req = "DELETE FROM CLASSE WHERE id = $id";

		$exe = execute($req);

		if ($exe) {
			echo "<p class='succes'> Succes </p>";
		}
		else{
			echo "<p class='echec'> Echec </p>";
		}

	}