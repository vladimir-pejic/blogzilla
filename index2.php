<html>
    <body>
      <!-- Bootstrap v4 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </body>

    <body>
    <?php

    require 'classes/DatabasePDO.php';

    $database = new DatabasePDO();
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    if(isset($post['submit'])) {
        $title = $post['title'];
        $body = $post['body'];

        $database->query('INSERT INTO posts (title, body) VALUES (:title, :body)');
        $database->bind(':title', $title);
        $database->bind(':body', $body);
        $database->execute();
    }

    if(isset($post['update'])) {
        $id = $post['id'];
        $title = $post['title'];
        $body = $post['body'];

        $database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
        $database->bind(':title', $title);
        $database->bind(':body', $body);
        $database->bind(':id', $id);
        $database->execute();
    }

    if(isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];

        $database->query('DELETE FROM posts WHERE id = :id');
        $database->bind(':id', $delete_id);
        $database->execute();
    }

    $database->query('SELECT * FROM posts');
    $rows = $database->resultset();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>ADD POST</h1>
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" class="form">
                    <div class="form-group">
                        <label for="title">Title</label><br>
                        <input type="text" name="title" placeholder="Enter a title..." class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="body">Content</label>
                        <textarea name="body" placeholder="Enter the content of your post..." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h1>EDIT POST</h1>
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="id">ID</label><br>
                        <input type="text" name="id" placeholder="Enter ID..." class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label><br>
                        <input type="text" name="title" placeholder="Enter a title..." class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="body">Content</label>
                        <textarea name="body" placeholder="Enter the content of your post..." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12"><h1>POSTS</h1></div>
            <?php foreach ($rows as $row) : ?>
                <div class="col-md-6">
                    <h3>ID: <?php echo $row['id'] ?> | TITLE: <?php echo $row['title'] ?></h3>
                    <p><?php echo $row['body'] ?></p><br>
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                        <input type="submit" name="delete" value="Delete" class="btn btn-danger"/>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- jQuery n bootstrap stuff -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>

