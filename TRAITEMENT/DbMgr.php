<?php
	function connecte()
	{
		return mysqli_connect('localhost', 'root', '', 'Ecole');
	}

	function execute($req, $con = null)
	{
		if ($isMaConnexion = is_null($con)) {
			$isMaConnexion = true;
			$con = connecte();
		}
		$exe = mysqli_query($con, $req);
		if ($isMaConnexion) {
			deconnecte($con);
		}

		return $exe;
	}

	function fetch_array($exe)
	{
		return mysqli_fetch_array($exe);
	}

	function deconnecte($con)
	{
		return mysqli_close($con);
	}