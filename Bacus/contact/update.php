<?php require_once ('connect.php');
if (isset($_GET['id'])) {
   $id = $_GET['id'];
 
   $query = "SELECT * FROM new_table WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
      $row = mysqli_fetch_assoc($query_run);
    } else {
        header('location: table.php');
    }
}

if(isset($_POST['update'])) {
    $id=$_POST['id'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $comment=$_POST['comment'];

    $query = "UPDATE new_table SET email='$email', name='$name', comment='$comment' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run) 
    {
        echo '<script> alert ("data updated");</script>'; 
        header('location: table.php');
    } else{
        echo '<script> alert ("data not updated");</script>';  

    }

}


?>
