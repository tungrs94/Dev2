<h1>Edit</h1>
<a href="index_controller.php?act=post&id=">
  <button>show</button>
</a>
<a href="admin.php">
  <button>back</button>
</a>


<form action="admin.php?act=edit&id=<?= $infoPost['id'] ?>" method="POST" enctype="multipart/form-data">
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Title</label>
        <input type="text" name="title" class="form-control mx-sm-3" value="<?= $infoPost['title'] ?>">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Descriptins</label>
        <input type="text" name="descriptions" class="form-control mx-sm-3" value="<?= $infoPost['descriptions'] ?>">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Image</label>
        <input type="file" name="img" class="form-control mx-sm-3">
        <img src="<?= $infoPost['image'] ?>" alt="">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Status</label>
        <select id="inputState" name="status" class="form-control">
          <option selected><?= $infoPost['status'] ?></option>
        </select>
      </div>
    </div>
  </div>
  <input type="hidden" name="id" value="<?= $infoPost['id'] ?>">
  <div class="card">
    <div class="card-body">
      <input type="submit" value="Update" name="submit">
    </div>
  </div>
</form>