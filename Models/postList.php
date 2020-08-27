<?php 
		
	function postList(){
		$conn = connect();
		$sql = 'select * from post';
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		return	$stmt->fetchAll();
	}

?>