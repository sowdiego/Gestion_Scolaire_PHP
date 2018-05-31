<h2>Recherche etudiant par matricule</h2>

<form action="" method="post">
	<div>
		<div class="form-field">
			<label class="label-top">Matricule</label>
			<input type="text" name="matricule">
			<input type="submit" name="valider" value="Rechercher" >
		</div>
	</div>
</form>

<?php
	if (isset($_POST['valider'])) {
		$matricule = $_POST['matricule'];
		$exe = execute("SELECT * FROM ETUDIANT e, CLASSE c
		 WHERE id_cla = c.id and  matricule = $matricule");
		if ($exe) {	
			$row = fetch_array($exe);
			extract($row);
		
?>

<form action="" method="post">
	
	<div>
		<div class="form-field">
			<label class="label-top">Matricule</label>
			<input class="input-text-max" type="text" name="matricule" value="<?= $matricule ?>" disabled="disabled">
		</div>

		<div class="form-field">
			<label class="label-top">Nom</label>
			<input class="input-text-max" type="text" name="nom" value="<?= $nom ?>" disabled="disabled">
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Prenom</label>
			<input class="input-text-max" type="text" name="prenom" value="<?= $prenom ?>" disabled="disabled">
		</div>

		<div class="form-field">
			<label class="label-top">Sexe</label>
			M <input  type="radio" name="sexe" value="M" <?php if($sexe == 'M') echo "checked"; ?> disabled="disabled">
			F <input  type="radio" name="sexe" value="F" <?php if($sexe == 'F') echo "checked"; ?>disabled="disabled">
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Telephone</label>
			<input class="input-text-max" type="text" name="telephone"  value="<?= $telephone ?>"disabled="disabled">
		</div>
		<div class="form-field">
			<label class="label-top">Adresse</label>
			<input class="input-text-max" type="text" name="adresse"  value="<?= $adresse ?>" disabled="disabled">
		</div>
		<div></div>
		<div class="form-field">
			<label class="label-top">Date naissance</label>
			<input class="input-text-max" type="date" name="datenaiss"  value="<?= $datenaiss ?>" disabled="disabled">
		</div>
		<div class="form-field">
			<label class="label-top">Classe</label>
			<input type="text" name="id_cla" class="input-text-max" value="<?= $row['code']?>" disabled="disabled">
		</div>
		
	</div>	

</form>

<?php
	}
	}
?>