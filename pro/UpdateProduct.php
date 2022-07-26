<?php
  include('config.php');

  $uid = $_GET['uid'];
  $sql = "SELECT * FROM `product` WHERE id = $uid";
  $result = mysqli_query($connection, $sql);
  $row = mysqli_fetch_assoc($result);

  $pname = $row['pname'];
  $pprice = $row['pprice'];
  $pdesc = $row['pdesc'];
  $pcat = $row['pcat'];
  $pimg = $row['pimg'];
  $pcompany = $row['pcompany'];
  


  //For update
  if(isset($_POST['update']))
  {
      
      $pname = strtoupper($_POST['pname']);
      $pprice = $_POST['pprice'];
      $pdesc = $_POST['pdecs'];
      $pcat = $_POST['cat'];
     $image = $_FILES['pimg']['name'];
      $old_image = $_POST['pimg_old'];
      $TimgName = $_FILES['pimg']['tmp_name'];
	   $image = $_FILES['pimg']['name'];
        $TimgName = $_FILES['pimg']['tmp_name'];
      $pcompany = $_POST['pcompany'];
		
		

		move_uploaded_file($TimgName,'move/'.$image); 
      if($image != '')
        {
          $update_file = $_FILES['pimg']['name'];
        }
        else{
          $update_file = $old_image;
        }

      $sql = "UPDATE `product` SET `pname`='$pname',`pprice`='$pprice',`pdesc`='$pdesc',`pcat`='$pcat',`pimg`='$image',`pcompany`='$pcompany' WHERE id = $uid";
      $result = mysqli_query($connection,$sql);
      if(!empty($result))
      {
        
        header('location:listproduct.php');
      }
      else
      {
          echo "no";
      }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  

    
  </head>
  <body>
<div class="container">
<form  method="POST" enctype="multipart/form-data">
            Product Name  = <input type="text " name="pname" value="<?php echo $pname; ?>"><br><br>
            Product Price  = <input type="number" name="pprice" value="<?php echo $pprice; ?>"><br><br>
            Product Decs = <input type="text" name="pdecs" value="<?php echo $pdesc; ?>"><br><br>
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
                        <option value="<?= $items['category'] ?>"><?php echo $pcat ?></option>

                <?php } ?>
                    </select><br><br>
                    <?php
                    }
                    ?>
                    
            Product img = <input type="file" name="pimg"><br><br>
            <input type="hidden" name="pimg_old" value="<?php echo $row['pimg'] ?>">
          Product Company = <input type="text" name="pcompany" value="<?php echo $pcompany; ?>"><br><br>
            <button class="btn btn-primary" name="update">Add Product</button>
        </form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>