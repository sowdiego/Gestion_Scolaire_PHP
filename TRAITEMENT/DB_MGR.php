<?php
	function connecte(){
		return mysqli_connect('localhost', 'root', '', 'ecole1');
	}

	function execute($sql , $conn=null){
		$trouveCon = is_null($conn);
		if ($trouveCon) {
			$conn = connecte();
		}
		$res = mysqli_query( $conn,$sql);
		if ($trouveCon) {
			deconnecte($conn);
		}
		return $res;
	}

	function deconnecte($conn){
		return mysqli_close($conn);
	}

	function parcours($res){
		return mysqli_fetch_array($res);
	}
?>
