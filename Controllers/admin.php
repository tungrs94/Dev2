<?php
	
	include '../Models/connectdb.php';

   connect();

	// include '../Models/admin_model.php';

	// $posts=showposts();

   	include '../Views/admin/header.php';

   	if(isset($_GET['act'])){
   		$act=$_GET['act'];

   		switch ($act) {
   			case 'manage_post':
   				// $manage_posts=showall();
   				include '../Views/admin/manage_post.php';
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