<?php include "Views/admin/header.php"; ?>
<h1>Edit</h1>
<a href="index.php?Controllers=admin">
  <button>show</button>
</a>
<a href="index.php?Controllers=admin">
  <button>back</button>
</a>


<form action="index.php?Controllers=admin&action=edit&id=<?= $tb[0]['id'] ?>" method="POST" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Title</label>
        <input type="text" name="title" class="form-control mx-sm-3" value="<?= $tb[0]['title'] ?>">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Descriptins</label>
        <input type="text" name="descriptions" class="form-control mx-sm-3" value="<?= $tb[0]['descriptions'] ?>">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Image</label>
        <input type="file" name="img" class="form-control mx-sm-3">
        <img src="<?= $tb[0]['image'] ?>" alt="">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Status</label>
        <select id="inputState" name="status" class="form-control">
          <option selected><?= $tb[0]['status'] ?></option>
        </select>
      </div>
    </div>
  </div>
  <input type="hidden" name="id" value="<?= $tb[0]['id'] ?>">
  <div class="card">
    <div class="card-body">
      <input type="submit" value="Update" name="submit">
    </div>
  </div>
</form>