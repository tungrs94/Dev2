<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Views/Frontend/css/style.css">

    <title>Tung</title>
</head>

<body>
    <h1>Frontend</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/index.php?Controllers=admin">Admin</a>
            </div>
        </div>
    </nav>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Thumb</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <?php

        foreach ($tb as $r) {
        $title = $r['title'];
        $id = $r['id'];
        $image = $r['image'];
        $link = 'index.php?Controllers=user&action=show&id=' . $id;
        echo '<tbody>
                <tr>
                    <td scope="row">' . $id . '</td>
                    <td><img src="' . $image . '" alt=""></td>
                    <td><a href="'.$link.'">'.$title.'</a></td>
                </tr>
              </tbody>';
        }
        ?>

    </table>
</body>