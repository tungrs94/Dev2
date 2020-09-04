<?php include "Views/admin/header.php"; ?>

<h2>New Post</h2>
<?php
$date_create = date('m-d-Y H:i:s');
?>
<form action="index.php?Controllers=admin&&action=new" method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="inputPassword6">title</label>
                <input type="text" name="title" id="" class="form-control mx-sm-3">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="inputPassword6">descriptions</label>
                <input type="text" name="descriptions" id="" class="form-control mx-sm-3">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="inputPassword6">image</label>
                <input type="file" name="img" class="form-control mx-sm-3">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="inputPassword6">status</label>
                <select id="inputState" name="status" class="form-control">
                    <option value="enable">enable</option>
                    <option value="disable">disable</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <input type="submit" value="Create" name="submit">
        </div>
    </div>
</form>

