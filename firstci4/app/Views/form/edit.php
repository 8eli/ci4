<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table For Database </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2> Edit </h2>
        <hr>
        <form action="<?=base_url('form/update/'.$opinion['id'])?>" method="POST">
            <h1>Comment About Me</h1>
            <input type="hidden" name="_method" value="PUT">

            <input type="text" id="email" name="email" class="form-control mb-3" value="<?=$opinion['email']; ?>" placeholder="Email Address">

            <input type="text" id="name" name="name" class="form-control mb-3" value="<?=$opinion['name']; ?>" placeholder="Name">

            <textarea name="comment" id="comment" class="form-control mb-3" placeholder="Comment"><?=$opinion['comment'];?></textarea>

            <button type="submit" class=" btn btn-primary">Update</button>
            <a href="/form" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>      
</body>
</html>