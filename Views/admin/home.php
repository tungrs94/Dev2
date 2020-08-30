<h1>Manage</h1>
<a href="admin.php?act=new">
  <button type="button" class="btn btn-primary">New</button>
</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Thumb</th>
      <th scope="col">Title</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
  foreach ($postList as $post) {
    $title = $post['title'];
    $id = $post['id'];
    $image = $post['image'];
    $linkE = 'admin.php?act=edit&id=' . $id;
    $linkDel = "<a href='admin.php?act=delete&id=" . $id . "'>Delete</a>";
    $status = $post['status'];
    echo '<tbody>
              <tr>
                <td scope="row">' . $id . '</td>
                <td>
                  <img src="' . $image . '" alt="">
                </td>
                <td>
                  <p>' . $title . '</p>
                </td>
                <td>
                <p>' . $status . '</p>
                </td>
                <td>
                  <a href="' . $linkE . '">Show</a>
                  <a href="' . $linkE . '">Edit</a>
                  <p>' . $linkDel . '</p>
                </td>
              </tr>
            </tbody>';
  }
  ?>
</table>