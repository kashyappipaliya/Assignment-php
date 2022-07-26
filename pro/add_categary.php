<?php

$connection = mysqli_connect('localhost','root','','admin');
    if(!$connection)
    {   
        echo "Conection Failed.";
    }

 if(isset($_POST['submit']))
    {
 
        $pri = @$_POST['id'];
        $pd = @$_POST['cetegory'];
        $sql1 = "INSERT INTO `category` (`id`, `category`) VALUES ('','$pd')";  
        $insert = mysqli_query($connection, $sql1);
        if($insert)
        {
            header('Location: listproduct.php');
        }
        else
        {
            echo "error";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>List of Products</title>
</head>
<body>
  <div class="container mt-3  justify-content-center">
    <H4 class="text-center">ADD CETEGARY</H4>
    <form action="config.php" method="post">
      <div class="form-group mb-3 " >
        <label for="email" class="form-label">CETEGARY_ID</label>
        <input type="text " class="form-control" name="id"  placeholder="Enter Categary_ID" name="">
      </div>

      <div class="form-group mb-3 ">
        <label for="Phone" class="form-label">CETEGARY_NAME</label>
        <input type="text" class="form-control" name="cetegory" placeholder="Enter Categary_Name" >
      </div>

     
        <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
