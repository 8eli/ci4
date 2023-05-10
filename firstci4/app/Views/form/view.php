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
        <div class="card-header mt-3">
            <a href="<?= base_url('/form');?>" class="btn btn-danger float-end">Cancel</a>
            <h2> View Users </h2>
        </div>
        <hr>
            <div class="card-body bg-dark mt-1 mx-5 py-3">
                <div class="container-fluid mt-1 py-4 mb-5 text-white">
                <div class="row mb-3 mx-5">
                    <label class="col-form-label">Email</label>
                    <div class="col-sm-10">
                    <p class="form-control">
                        <?=$opinion['email'];?>
                    </p>
                    </div>
                </div>

                <div class="row mb-3 mx-5">
                    <label class="col-form-label">Name</label>
                    <div class="col-sm-10">
                    <p class="form-control">
                        <?=$opinion['name'];?>
                    </p>
                    </div>
                </div>

                <div class="row mb-3 mx-5">
                    <label class="col-form-label">Comment</label>
                    <div class="col-sm-10">
                    <p class="form-control">
                        <?=$opinion['comment'];?>
                    </p>
                    </div>
                </div>
            </div>
    </div>
</div>      
</body>
</html>