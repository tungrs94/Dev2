
<table class="table table-bordered">
  <?php
    foreach ($postList as $post) {
      $title = $post['title'];
      $id = $post['id'];
      $image = $post['image'];
      $link = 'index_controller.php?act=id'.$post['id'];
      echo '<li><a href="'.$link.'">'.$title.'</a></li>';
      echo '<tbody>
    <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$image.'</td>
      <td>'.$title.'</td>
    </tr>
  </tbody>';
    }
  ?>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Thumb</th>
      <th scope="col">Title</th>
    </tr>
  </thead>
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody> -->
</table>