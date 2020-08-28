<?php

	function postList(){
		$sql = 'select * from post order by id';
		$conn = connect();
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		return	$stmt->fetchAll();
	}

	function showPost($id){
		$sql='select * from post where 1';
		if($id>0){
			$sql.=' AND id='.$id;
		}
		$sql.=' order by id';
		$conn = connect();
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		return	$stmt->fetchAll();
	}

	function newPost($title, $descriptions, $img, $status){
		$sql="insert into post (title, description, image, status) values ('$title','$descriptions', '$img', '$status')";
		$conn = connect();
		$conn -> exec($sql);
	}

?>