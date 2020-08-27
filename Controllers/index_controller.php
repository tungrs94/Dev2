<?php
	
	include '../Models/connectdb.php';
   include '../Models/postList.php';


	// include '../Models/admin_model.php';

   connect();
   $postList = postList();

	include '../Views/header.php';

	if(isset($_GET['act'])){
		$act=$_GET['act'];

		switch ($act) {
			case 'about':
				// $manage_posts=showall();
				include '../Views/about.php';
				break;
         case 'id':
         // $manage_posts=showall();
            include '../Views/about.php';
            break;
		
			default:
				include '../Views/content.php';
				break;
		}
	}else{
		include '../Views/content.php';
	}
   

   include '../Views/footer.php';

?>