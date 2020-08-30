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
		$conn = connect();
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		return	$stmt->fetch();
	}

	function newPost($title, $descriptions, $img, $status){
		$sql="insert into post (title, descriptions, image, status) values ('$title','$descriptions', '$img', '$status')";
		$conn=connect();
		$conn->exec($sql);
	}

	function updatePost($id, $title, $status, $descriptions, $img){
		if($img!='')
			$sql="update post set title='$title',descriptions='$descriptions',image='$img',status='$status' where id=".$id;
			else $sql="update post set title='$title',descriptions='$descriptions',status='$status' where id=".$id;

		$conn = connect();
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}

	function delPost($id){
		$sql="delete from post where id=".$id;
		$conn = connect();
		$conn->exec($sql);
	}
