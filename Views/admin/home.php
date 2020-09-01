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


<?php
echo $paginator;
?>
<form action="admin.php?page=" .$page.'&soluongpost='.$soluongpost method=' POST'>
  <select name='soluongpost'>
    <option value='5'>5</option>
    <option value='10'>10</option>
    <option value='20'>20</option>
  </select>
  <input type="submit" value="ok">
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>