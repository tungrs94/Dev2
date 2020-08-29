<h1>Edit</h1>
<a href="index_controller.php?act=post&id=">
  <button>show</button>
</a>
<a href="admin.php">
  <button>back</button>
</a>

<form action="admin.php?act=edit&id=<?=$ide?>" method="POST" enctype="multipart/form-data">
  <?php
    foreach ($postList as $post) {
      $id = $post['id'];
      $title = $post['title'];
      $descriptions = $post['descriptions'];
      $status = $post['status'];
      $image = $post['image'];
    }
  ?>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Title</label>
        <input type="text" class="form-control mx-sm-3" value="<?=$title?>">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Descriptins</label>
        <input type="text" class="form-control mx-sm-3" value="<?=$descriptions?>">
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <form class="form-inline">
        <div class="form-group">
          <label for="inputPassword6">Image</label>
          <input type="file" class="form-control mx-sm-3">
          <img src="<?=$image?>" alt="">
        </div>
      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <div class="form-group">
        <label for="inputPassword6">Status</label>
        <select id="inputState" name="status" class="form-control">
          <option selected><?=$status?></option>
        </select>
      </div>
    </div>
  </div>
  <input type="hidden" name="id" value="<?=$id?>">
  <div class="card">
    <div class="card-body">
      <input type="submit" value="Update" name="submit">
    </div>
</form>
</div>