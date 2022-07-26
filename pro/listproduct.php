<?php
    include('config.php');

    $query = "SELECT `id`, `pname`, `pprice`, `pdesc`, `pcat`, `pimg`, `pcompany` FROM `product`";
    $result = mysqli_query($connection, $query);
    $num = mysqli_num_rows($result);
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
<div class="container mt-5">
  <!-- for search  -->
  <div class="mb-5 row">
    <form class="d-flex" method="GET" action="config.php">
            <input class="form-control me-2 col-4" type="search" name="searchfiled" placeholder="Search Product Name" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
  
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
    Add Products
  </button>

<table class="table bg-white rounded shadow  table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price </th>
      <th scope="col">Product Decs</th>
      <th scope="col">Product Catagory</th>
      <th scope="col">Product img</th>
      <th scope="col">Product Company</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        if($num > 0 )
        {
            while( $data = mysqli_fetch_array($result))
            {
    ?>
                      <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['pname'] ?></td>
                        <td><?= $data['pprice'] ?></td>
                        <td><?= $data['pdesc'] ?></td>
                        <td><?= $data['pcat'] ?></td>
                        <td><img src="./move/<?= $data['pimg'] ?>" alt="img" height="150px" width="150px"> </td>
                        <td><?= $data['pcompany'] ?></td>
                        <td><a href="<?php echo 'UpdateProduct.php?uid='.$data['id']; ?>"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="<?php echo 'DeleteProducts.php?did='.$data['id']; ?>"><i class="fa fa-trash-o" style="color:red";></i></a></td>
                      </tr>
  <?php
            }
        }
    
  ?>
  </tbody>
</table>
</div>

<div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Model List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="config.php" method="POST" enctype="multipart/form-data">
            Product Name  = <input type="text " name="pname" placeholder="Enter Product Name" required><br><br>
            Product Price  = <input type="number" name="pprice" placeholder="Enter Product Price"><br><br>
            Product Decs = <input type="text" name="pdecs" placeholder="Enter Product Decs"><br><br>
            Product Catagory = 

            <?php
                include('config.php');
                $query = "Select * from category";
                $query_run = mysqli_query($connection, $query);
                if(mysqli_num_rows($query_run) > 0 )
                {

            ?>
                    <select name="cat">
                    <?php foreach($query_run as $items){?>
                        <option value="<?= $items['category'] ?>"><?= $items['category']?></option>

                <?php } ?>
                    </select><br><br>
                    <?php
                    }
                    ?>
                    
            Product img = <input type="file" name="pimg"><br><br>
            Product Company = <input type="text" name="pcompany" placeholder="Enter Product Company"><br><br>
            <button class="btn btn-primary" name="add">Add Product</button>
        </form>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>