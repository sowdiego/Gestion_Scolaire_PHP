<h2>Nouvelle classe</h2>

<?php include_once('Traitement/TAjoutClasse.php'); ?>

<form action="" method="post">
	
	<div>
		<div class="form-field">
			<label class="label-top">Code</label>
			<input class="input-text-max" type="text" name="code">
		</div>

		<div class="form-field">
			<label class="label-top">Libelle</label>
			<input class="input-text-max" type="text" name="libelle" >
		</div>
		<div class="form-field">
			<input type="reset" name="annuler" value="Annuler">
			<input la type="submit" name="valider" value="Valider">
		</div>

	</div>	

</form>