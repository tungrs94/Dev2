<?php

function postList()
{
	$sql = 'select * from post order by id';
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	return	$stmt->fetchAll();
}

function showPost($id)
{
	$sql = 'select * from post where 1';
	if ($id > 0) {
		$sql .= ' AND id=' . $id;
	}
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	return	$stmt->fetch();
}

function newPost($title, $descriptions, $img, $status)
{
	$sql = "insert into post (title, descriptions, image, status) values ('$title','$descriptions', '$img', '$status')";
	$conn = connect();
	$conn->exec($sql);
}

function updatePost($id, $title, $status, $descriptions, $img)
{
	if ($img != '')
		$sql = "update post set title='$title',descriptions='$descriptions',image='$img',status='$status' where id=" . $id;
	else $sql = "update post set title='$title',descriptions='$descriptions',status='$status' where id=" . $id;
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

function delPost($id)
{
	$sql = "delete from post where id=" . $id;
	$conn = connect();
	$conn->exec($sql);
}

function paginator($tongsoluong, $soluongpost)
{
	$lenPage = $tongsoluong / $soluongpost;
	$surplus = $tongsoluong % $soluongpost;
	if ($surplus > 0) {
		$lenPage += 1;
	}



	echo '<ul class="pagination">';
	for ($i = 1; $i <= $lenPage; $i++) {
		$linkPage = 'admin.php?page=' . $i.'&soluongpost='.$soluongpost;
		echo "<li class='page-item'><a class='page-link' href='" . $linkPage . "'>" . $i . "</a></li>";
	}
	echo '</ul>';
}

function paginatorPost($page = 1, $soluongpost = 5)
{
	if ($page == 1) {
		$fr = 0;
	} else {
		$fr = $soluongpost * ($page - 1) + 1;
	}
	$range = $soluongpost;
	$sql = "select * from post order by id asc limit $fr, $range";
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	return	$stmt->fetchAll();
}

function showTotalPost()
{
	$sql = "select * FROM post";
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	return sizeof($stmt->fetchAll());
}
