<?php
	include '../Models/connectdb.php';
	include '../Models/postList.php';


	$postList=postList();

   	include '../Views/admin/header.php';

   	if(isset($_GET['act'])){
   		$act=$_GET['act'];
   		switch ($act) {
			   case 'new':
				if(isset($_POST['submit'])&&($_POST['submit'])){
					$title = $_POST['title'];
					$descriptions = $_POST['descriptions'];
					$status = $_POST['status'];
					$image = $_FILES['image']['name'];
					$target_file = $pathimg . basename($img);
					if(move_uploaded_file($_FILES['img']['tmp_name'], $target_file)){
						$err_upload='success';
					}else{
						$err_upload='fail';
					}
					newPost($title, $descriptions, $img, $status);
				}

				$postList = showPost(0);
				include '../Views/admin/new.php';
			   	break;

			   case 'edit':
				if(isset($_GET['id'])&&($_GET['id']>0)){
					$ide=$_GET['id'];
				}else{
					$ide=0;
				}
				$postList=showPost($ide);
   				include '../Views/admin/edit.php';
   				break;

   			default:
   				include '../Views/admin/home.php';
   				break;
   		}
   	}else{
   		include '../Views/admin/home.php';
   	}


   include '../Views/admin/footer.php';

?>