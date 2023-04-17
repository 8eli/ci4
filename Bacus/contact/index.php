<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Personal Web</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../Website/style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </script>
</head>

<body>

   <div class="bg-custom text-center py-2">
      <span class="text-light text-uppercase fw-bold">"Follow What Your Heart Desire"</span>
   </div>
   <nav id="Hm" class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
         <div class="collapse navbar-collapse">
            <div class="d-flex align-items-center mx-auto">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="../website/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>

   <div class="container-fluid  bg-custom mt-2">
      <div class="row ру-5" style="height:280px">
         <div class="col-3">
            <img id="poto" src="../website/image/download.png" class="rounded-circle" style="width:250px" alt="picture of myself" />
         </div>
         <div class="col text-start text-white mt-1 mx-5">
            <div class="fs-5 fw-bold mb-3 text-white text-uppercase">You can contact me at my: </div>
            <p p class="fs-4 fw-bold mb-3"> Facebook account </p>
            <a class="fs-2 fw-bold mb-3" href = "https://www.facebook.com/maryelizabacus"> <i>https://www.facebook.com/maryelizabacus</i></a>
            <div class="fs-5 fw-bold mb-3"> Mobile Number </div>
            <div class="fw-bold fs-4 mb-3"><i> 09482369701 </i></div>
         </div>
      </div>
   </div>
   </div>
   <div class="container text-center">
      <form action="insert.php" method="POST" id="CommentForm">
         <h1>Comment About Me</h1>
         <input type="text" id="email" name="email" class="form-control mb-3" placeholder="Email Address">
         <input type="text" id="name" name="name" class="form-control mb-3" placeholder="Name">
         <textarea type="text" id="comment" name="comment" class="form-control mb-3" placeholder="Comment"></textarea>
         <button type="submit" name="submit" class=" btn btn-primary">Submit</button>
      </form>
   </div>
   </div>
   </div>
   <script src="/script/script.js"></script>
</body>

</html>
