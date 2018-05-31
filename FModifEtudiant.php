<h2>Nouvel etudiant</h2>

<?php include_once('Traitement/TModifEtudiant.php'); ?>

<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$exe = execute("SELECT * FROM ETUDIANT WHERE ID = $id");
		if ($exe) {	
			$row = fetch_array($exe);
			extract($row);
		}

	}
?>

<form action="" method="post">
	
	<div>
		<input type="hidden" name="id" value="<?= $id ?>">
		<div class="form-field">
			<label class="label-top">Matricule</label>
			<input class="input-text-max" type="text" name="matricule" value="<?= $matricule ?>">
		</div>

		<div class="form-field">
			<label class="label-top">Nom</label>
			<input class="input-text-max" type="text" name="nom" value="<?= $nom ?>" >
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Prenom</label>
			<input class="input-text-max" type="text" name="prenom" value="<?= $prenom ?>">
		</div>

		<div class="form-field">
			<label class="label-top">Sexe</label>
			M <input  type="radio" name="sexe" value="M" <?php if($sexe == 'M') echo "checked"; ?> >
			F <input  type="radio" name="sexe" value="F" <?php if($sexe == 'F') echo "checked"; ?>>
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Telephone</label>
			<input class="input-text-max" type="text" name="telephone"  value="<?= $telephone ?>">
		</div>
		<div class="form-field">
			<label class="label-top">Adresse</label>
			<input class="input-text-max" type="text" name="adresse"  value="<?= $adresse ?>">
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Date naissance</label>
			<input class="input-text-max" type="date" name="datenaiss"  value="<?= $datenaiss ?>">
		</div>
		<div class="form-field">
			<label class="label-top">Classe</label>
			<select class="input-text-max" type="text" name="id_cla">
				<?php
					$req = "SELECT * FROM CLASSE";
					$exe = execute($req);
					while ($rowClasse = fetch_array($exe)) {
						?>
							<option value="<?= $rowClasse['id']?>" <?php if($rowClasse['id'] == $row['id_cla']) echo"selected" ?>> <?= $rowClasse['code']?> </option>
						<?php
					}
				?>
			</select>
		</div>
		<div></div>
		<div class="form-field">
			<input type="reset" name="annuler" value="Annuler">
			<input la type="submit" name="valider" value="Valider">
		</div>

	</div>	

</form>

