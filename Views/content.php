<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Thumb</th>
      <th scope="col">Title</th>
    </tr>
  </thead>
  <?php
    foreach ($postList as $post) {
      $title = $post['title'];
      $id = $post['id'];
      $image = $post['image'];
      $link = 'index_controller.php?act=post&id='.$id;
      echo '<tbody>
              <tr>
                <td scope="row">'.$id.'</td>
                <td>
                  <img src="'.$image.'" alt="">
                </td>
                <td>
                  <a href="'.$link.'">'.$title.'</a>
                </td>
              </tr>
            </tbody>';
    }
  ?>
</table>