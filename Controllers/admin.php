<?php
include '../Models/connectdb.php';
include '../Models/postList.php';


$postList = postList();

include '../Views/admin/header.php';

if (isset($_GET['act'])) {
	$act = $_GET['act'];
	switch ($act) {
		case 'new':
			if (isset($_POST['submit']) && ($_POST['submit'])) {
				$title = $_POST['title'];
				$status = $_POST['status'];
				$descriptions = $_POST['descriptions'];
				$img = $_FILES['img']['name'];
				$target_dir = "/uploads/";
				$target_file = $target_dir . basename($img);
				if($_FILES['img']['error'] > 0){
					echo 'upload error';
				}else{
					move_uploaded_file($_FILES['img']['tmp_name'], $_FILES['img']['name']);
					echo 'upload success';
				}
				newPost($title, $descriptions, $img, $status);
			}
			include '../Views/admin/new.php';
			break;

		case 'edit':
			if (isset($_GET['id']) && ($_GET['id'] > 0)) {
				$ide = $_GET['id'];
			} else {
				$ide = 0;
			}
			$postList = showPost($ide);
			include '../Views/admin/edit.php';
			break;

		default:
			include '../Views/admin/home.php';
			break;
	}
} else {
	include '../Views/admin/home.php';
}


include '../Views/admin/footer.php';
