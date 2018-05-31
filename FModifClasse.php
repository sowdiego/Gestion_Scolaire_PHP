<h2>Modification de classe</h2>
<?php
	include_once('Traitement/TModifClasse.php');

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$req = "SELECT * FROM CLASSE WHERE id = $id";

		$exe = execute($req);

		if ($row = fetch_array($exe)) {
	?>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?= $row['id'] ?>">
			<div>
				<div class="form-field">
					<label class="label-top">Code</label>
					<input class="input-text-max" type="text" name="code" value="<?= $row['code'] ?>">
				</div>

				<div class="form-field">
					<label class="label-top">Libelle</label>
					<input class="input-text-max" type="text" name="libelle" value="<?= $row['libelle'] ?>">
				</div>
				<div class="form-field">
					<input type="reset" name="annuler" value="Annuler">
					<input la type="submit" name="valider" value="Valider">
				</div>

			</div>	

		</form>
	<?php
		}
	}
?>