<h1>Edit</h1>
<a href="index_controller.php?act=post&id=">
  <button>show</button>
</a>
<a href="admin.php">
  <button>back</button>
</a>
<form action="admin.php?act=managePost" method="POST" enctype="multipart/form-data">
  <?php
  foreach ($postList as $post) {
    $title = $post['title'];
    $descriptions = $post['descriptions'];
    $status = $post['status'];
    $image = $post['image'];
    echo '<div class="card">
                <div class="card-body">
                    <div class="form-group">
                      <label for="inputPassword6">Title</label>
                      <input type="text" class="form-control mx-sm-3" value="' . $title . '">
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                    <div class="form-group">
                      <label for="inputPassword6">Descriptins</label>
                      <input type="text" class="form-control mx-sm-3" value="' . $descriptions . '">
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inputPassword6">Image</label>
                      <input type="file" class="form-control mx-sm-3">
                      <img src="' . $image . '" alt="">
                    </div>
                  </form>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                    <div class="form-group">
                      <label for="inputPassword6">Status</label>
                      <select id="inputState" name="status" class="form-control">
                        <option selected>' . $status . '</option>
                      </select>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                <input type="submit" value="Submit" name="submit">
                </div>
              </div>
              ';
  }
  ?>
</form>