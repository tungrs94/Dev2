<?php

	include '../Models/connectdb.php';
   	include '../Models/postList.php';


   $postList = postList();

	include '../Views/header.php';

	if(isset($_GET['act'])){
		$act=$_GET['act'];

		switch ($act) {
			case 'about':
				include '../Views/about.php';
				break;
         case 'post':
            if(isset($_GET['id'])&&($_GET['id']>0)){
               $idp=$_GET['id'];
            }else{
               $idp=0;
            }
            $postList=showPost($idp);
            include '../Views/post.php';
            break;

			default:
				include '../Views/content.php';
				break;
		}
	}else{
		include '../Views/content.php';
	}


   include '../Views/footer.php';
