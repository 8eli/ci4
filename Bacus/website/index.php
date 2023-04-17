<?php 

include "../Contact/Connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </script>
</head>
<body>
    <div class="bg-custom text-center py-2">
        <span class="text-light text-uppercase fw-bold">"Follow What Your Heart Desire"</span>
     </div>
     <nav id="Hm"class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
         <div class="collapse navbar-collapse">
            <div class="d-flex align-items-center mx-auto">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" aria-current="page" href="../Contact/index.php">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   
   <div class="container-fluid bg-custom mt-2">
         <div class="row ру-5" style= "height:280px">
           <div class="col">
             <img src="Image/1X1 PICTURE_BACUS.jpg" class="rounded-circle" style="width:250px" alt="picture of myself"/>
           </div>
           <div class="col-6 text-start text-white mt-1 mx-5">
           <div class="fs-5 fw-bold mb-3 text-white text-uppercase" >Hi! Its Me</div>
             <p class="fw-normal mb-2" >Hi! My name is Mary Elizabeth Bacus, and I am 22 years old. I am a fourth-year student at the University of San Agustine. I love beach; my favorite color is black.</p>
             <p class="fs-5 fw-bold mt-2 mb-1">Work Experience in Oton municipal hall</p>
             <ul>
                 <li>Encoding in the system data for applicants and permits from various establishment </li>
                 <li>Collates papers and deliver to various department</li>
                 <li>Assign to organize and prepare for municipality events and programs</li>
                 <li>Create design concept and decor and programmes and other printable in the municipality event</li>
             </ul>
           </div>
         </div>
      </div>

      <div id="hobby" class="bg-custom text-light">
         <div class="text-center" id="hobby">
            <div class="mt-4">
         <div class="row py" style="height:400px">
            <div class="col text-start">
               <div class="fs-4 fw-bold mb-3">Hobbies</div>  
               <img src="Image/20230315_162254.gif" class= alt="" height="300" width="500">
            </div>
            <div class="col text-start">
               <div class="fs-4 fw-bold mb-3">Skills</div>  
               <img src="Image/20230315_165609.gif" class= alt="" height="300" width="500">
            </div>
            </div>
         </div>
         </div>
      </div>


   </body>
    
</html>