<h2>Liste des classes</h2>

<?php

	$req = "SELECT * FROM CLASSE";

	$exe = execute($req);

?>
<a href="index.php?page=FAjoutClasse">Ajout</a>
<table border="1">
	<tr>
		<th>Code</th>
		<th>Libelle</th>
		<th>Modifier</th>
		<th>Supprimer</th>
	</tr>

	<?php
		while ($row = fetch_array($exe)) {
	?>
	<tr>
		<td> <?= $row['code'] ?> </td>
		<td> <?= $row['libelle'] ?> </td>
		<td> <a href="index.php?page=FModifClasse&id=<?= $row['id'] ?>">Modifier</a> </td>
		<td> <a onclick="return confirm('Voulez-vous reellement supprimer ?');" href="index.php?page=Traitement/TSupClasse&id=<?= $row['id'] ?>">Supprimer</a> </td>
	</tr>
	<?php
		}
	?>
</table>