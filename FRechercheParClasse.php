<h2>Recherche d'etudiants par classe</h2>

<form action="" method="post">
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
		<input type="submit" name="valider" value="Recherche" >
	</div>
</form>

<?php 
	if (isset($_POST['valider'])) {
		extract($_POST);
	$req = "SELECT e.id, matricule, nom, prenom, sexe, telephone, adresse, id_cla, date_format(datenaiss, '%d/%m/%Y') as datenaiss, code
	   FROM ETUDIANT e, CLASSE c where id_cla = c.id And c.id = $id_cla";

	$exe = execute($req);

?>
<table border="1">
	<tr>
		<th>Matricule</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Sexe</th>
		<th>Telephone</th>
		<th>Adresse</th>
		<th>Date naissance</th>
		<th>Classe</th>
	</tr>

	<?php
		while ($row = fetch_array($exe)) {
	?>
	<tr>
		<td> <?= $row['matricule'] ?> </td>
		<td> <?= $row['nom'] ?> </td>
		<td> <?= $row['prenom'] ?> </td>
		<td> <?= $row['sexe'] ?> </td>
		<td> <?= $row['telephone'] ?> </td>
		<td> <?= $row['adresse'] ?> </td>
		<td> <?= $row['datenaiss'] ?> </td>
		<td> <?= $row['code'] ?> </td>
	</tr>
	<?php
		}
	?>
</table>

<?php
	}
?>