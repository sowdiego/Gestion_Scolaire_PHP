<h2>Liste des etudiants</h2>

<?php

	$req = "SELECT e.id, matricule, nom, prenom, sexe, telephone, adresse, id_cla, date_format(datenaiss, '%d/%m/%Y') as datenaiss, code
	   FROM ETUDIANT e, CLASSE c where id_cla = c.id";

	$exe = execute($req);

?>
<a href="index.php?page=FAjoutEtudiant">Ajout</a>
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
		<th>Modifier</th>
		<th>Supprimer</th>
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
		<td> <a href="index.php?page=FModifEtudiant&id=<?= $row['id'] ?>">Modifier</a> </td>
		<td> <a onclick="return confirm('Voulez-vous reellement supprimer ?');" href="index.php?page=Traitement/TSupEtudiant&id=<?= $row['id'] ?>">Supprimer</a> </td>
	</tr>
	<?php
		}
	?>
</table>