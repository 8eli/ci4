<?php include "read.php"; ?>
 
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
<body class="bg-white">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div calss="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center"> Table For Database</h2>
                    </div>
                    <div class="card-body">
                        <?php if(mysqli_num_rows($query_run)) {?>
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr class="bg-dark text-white">
                                <th scope = "col"> # </th>
                                <th scope = "col"> Email </th>
                                <th scope = "col"> Name </th>
                                <th scope = "col"> Comment </th>
                                <th scope = "col"> View </th>
                                <th scope = "col"> Edit </th>
                                <th scope = "col"> Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                while($row = mysqli_fetch_assoc($query_run)) { 
                                $i++;
                                ?>
                                <tr class="text-center">
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$row['email']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['comment']; ?></td>
                                    <td><a href="view.php?id=<?=$row['id'];?>" class="btn btn-info">View</a></td>
                                    <td><a href="edit-view.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a></td>
                                    <td><a href="delete.php?id=<?=$row['id'];?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>