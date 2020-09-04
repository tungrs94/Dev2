<?php

require_once 'config/config.php';

class postList
{
    private $data;
    public function __construct()
    {
        $this->data = new database();
    }
    public function getData()
    {
        $tb = $this->data->DBreturn("select * from post");
        return $tb;
    }
    public function newData($title, $descriptions, $image, $status, $date_create)
    {
        $tb = $this->data->DBreturn("insert into post (title, descriptions, image, status, create_at) values ('$title','$descriptions', '$image', '$status', '$date_create')");
    }
    public function delData($id)
    {
        $tb = $this->data->DBreturn("delete from post where id=" . $id);
    }
    public function getPost($id)
    {
        $tb = $this->data->DBreturn("select * from post where id=$id");
        return $tb;
    }
    public function editData($id, $title, $status, $descriptions, $img, $update_at)
    {
        if ($img != '') {
            $tb = $this->data->DBreturn("update post set title='$title',descriptions='$descriptions',image='$img',status='$status', update_at='$update_at' where id=" . $id);
        } else $tb = $this->data->DBreturn("update post set title='$title',descriptions='$descriptions',status='$status', update_at='$update_at' where id=" . $id);
    }
    public function paginator($tongsoluong, $soluongpost)
    {
        $lenPage = $tongsoluong / $soluongpost;
        $surplus = $tongsoluong % $soluongpost;
        if ($surplus > 0) {
            $lenPage += 1;
        }
        echo '<div class="page"><ul class="pagination">';
        for ($i = 1; $i <= $lenPage; $i++) {
            $linkPage = 'admin.php?page=' . $i . '&soluongpost=' . $soluongpost;
            echo "<li class='page-item'><a class='page-link' href='" . $linkPage . "'>" . $i . "</a></li>";
        }
        echo '</ul></div>';
    }
    public function paginatorPost($page = 1, $soluongpost = 5)
    {
    	if ($page == 1) {
    		$fr = 0;
    	} else {
    		$fr = $soluongpost * ($page - 1) + 1;
    	}
        $range = $soluongpost;
        $tb=$this->data->DBreturn("select * from post order by id asc limit $fr, $range");
    }
}
?>
