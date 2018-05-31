<h2>Nouvel etudiant</h2>

<?php include_once('Traitement/TAjoutEtudiant.php'); ?>

<form action="" method="post">
	
	<div>
		<div class="form-field">
			<label class="label-top">Matricule</label>
			<input class="input-text-max" type="text" name="matricule">
		</div>

		<div class="form-field">
			<label class="label-top">Nom</label>
			<input class="input-text-max" type="text" name="nom" >
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Prenom</label>
			<input class="input-text-max" type="text" name="prenom">
		</div>

		<div class="form-field">
			<label class="label-top">Sexe</label>
			M <input  type="radio" name="sexe" value="M" >
			F <input  type="radio" name="sexe" value="F" >
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Telephone</label>
			<input class="input-text-max" type="text" name="telephone" >
		</div>
		<div class="form-field">
			<label class="label-top">Adresse</label>
			<input class="input-text-max" type="text" name="adresse">
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Date naissance</label>
			<input class="input-text-max" type="date" name="datenaiss" >
		</div>
		<div class="form-field">
			<label class="label-top">Classe</label>
			<select class="input-text-max" type="text" name="id_cla">
				<?php
					$req = "SELECT * FROM CLASSE";
					$exe = execute($req);
					while ($row = fetch_array($exe)) {
						?>
							<option value="<?= $row['id']?>"> <?= $row['code']?> </option>
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

