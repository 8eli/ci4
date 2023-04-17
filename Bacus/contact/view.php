<?php include "update.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table For Database </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <hr>
        <form action="update.php" method="POST" id="CommentForm">
        <h1>View
            <a href="table.php" class="btn btn-danger float-end">Back</a>
        </h1>
        <input type="hidden" name="id" value="<?=$row['id']; ?>">
        <label>Email</label>
        <p class="form-control mb-3">
            <?=$row['email'];?>
        </p>
        <label>Name</label>
        <p class="form-control mb-3">
            <?=$row['name'];?>
        </p>
        <label>Comment</label>
        <p class="form-control mb-3">
            <?=$row['comment'];?>
        </p>
      </form>
      </hr>

</div>
</div>      
    </body>
</html>