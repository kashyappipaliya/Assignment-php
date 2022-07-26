<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/78b82c3709.js" crossorigin="anonymous"></script>
    <title>Demo</title>
    <style>
        a{
            text-decoration: none;
            /* color:#25456; */
        }
    </style>
</head>
<body>
<div class="main">
        <div class="main-content dashboard">
            <?php
                include('config.php');

                $query = "SELECT `id`, `category` FROM `category`";
                $result = mysqli_query($connection, $query);
                $num = mysqli_num_rows($result);
            ?>
            <!-- Button trigger modal -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4 mt-5" data-toggle="modal" data-target="#exampleModal">Add Category</button>
        
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="config.php" method="POST" >
                        <label for="category">Category</label>
                        <input type="text" name="category" id="category">
                        <button class="btn btn-primary" name="addc">Add Category</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
            </div>

            <div class="container m-5 p-5 mt-2 d-flex row">
                <table class="table bg-white  rounded shadow  table-hover col-7">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
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
                                            <td><?= $data['category'] ?></td>
                                            <td><a href="<?php echo 'Updatecategory.php?ucid='.$data['id']; ?>"><i class="fa fa-pencil-square-o" style="color:blue";></i></a></td>
                                            <td><a href="<?php echo 'config.php?cid='.$data['id']; ?>"><i class="fa fa-trash-o" style="color:red";></i></a></td>
                                        </tr>
                            <?php 
                                    }
                                }
                            
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>