<?php

require_once "Controllers/user.php";


class admin extends user
{
	public function index()
	{
		$tb = $this->postList->getData();
		require 'Views/admin/admin.php';
	}
	public function new()
	{
		if (isset($_POST['submit']) && ($_POST['submit'])) {
			$title = $_POST["title"];
			$descriptions = $_POST["descriptions"];
			// $image = $_POST["image"];
			$img = 'Controllers/uploads/' . $_FILES['img']['name'];
			if ($_FILES['img']['error'] > 0) {
				echo 'upload error';
			} else {
				move_uploaded_file($_FILES['img']['tmp_name'], $img);
			}
			$status = $_POST["status"];
			$date_create = date('Y-m-d H:i:s');
			$this->postList->newData($title, $descriptions, $img, $status, $date_create);
		}
		require "Views/admin/new.php";
	}
	public function delete()
	{
		if (isset($_GET['id']) && ($_GET['id'] > 0)) {
			$this->postList->delData($_GET['id']);
			$this->index();
		}
	}
	public function edit()
	{
		if (isset($_GET['id']) && ($_GET['id'] > 0)) {
			$tb = $this->postList->getPost($_GET['id']);
			require 'Views/admin/edit.php';
		}
		if (isset($_POST['submit'])) {
			$id = $_POST['id'];
			$title = $_POST['title'];
			$status = $_POST['status'];
			$update_at = date('Y-m-d H:i:s');
			$descriptions = $_POST['descriptions'];
			if ($_FILES['img']['name'] != '') {
				$img = 'Controllers/uploads/' . $_FILES['img']['name'];
				if ($_FILES['img']['error'] > 0) {
					echo 'not image';
				} else {
					move_uploaded_file($_FILES['img']['tmp_name'], $img);
				}
			} else {
				$img = '';
			}

			$this->postList->editData($id, $title, $status, $descriptions, $img, $update_at);
		}
	}
	public function paginator()
	{
		$tongsoluong = sizeof($this->postList->getData());
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
			$soluongpost = 5;
		} else {
			$page = 1;
			$soluongpost = 5;
		}
		if (isset($_POST['soluongpost']) && ($_POST['soluongpost'] > 0)) {
			$soluongpost = $_POST['soluongpost'];
		}
		if (isset($_GET['soluongpost']) && ($_GET['soluongpost'] > 0)) {
			$soluongpost = $_GET['soluongpost'];
		}
	}
}
?>