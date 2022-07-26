<?php
   //session_start();
    $connection = mysqli_connect('localhost','root','','admin');
    if(!$connection)
    {   
        echo "Conection Failed.";
    }


    //login
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where email='$email' limit 1";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $_SESSION['IS_VALID'] = true;
            header('Location: dashboard.php');
        }
        else
        {
            echo "Data invalid pls SignUp";
        }
    }


    //addProducts
    if(isset($_POST['add']))
    {
        $pname = strtoupper($_POST['pname']);
        $pprice = $_POST['pprice'];
        $pdesc = $_POST['pdecs'];
        $pcat = $_POST['cat'];
        $image = $_FILES['pimg']['name'];
        $TimgName = $_FILES['pimg']['tmp_name'];
        $pcompany = $_POST['pcompany'];

      
        move_uploaded_file($TimgName,'move/'.$image);   
        $sql1 = "INSERT INTO `product`(`id`, `pname`, `pprice`, `pdesc`, `pcat`, `pimg`, `pcompany`) VALUES ('','$pname','$pprice','$pdesc','$pcat','$image','$pcompany')";  
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
    if(isset($_GET['cid']))
    {
        $id = $_GET['cid'];
        $sql = "DELETE FROM `category` WHERE `id` = '$id'";
        $result = mysqli_query($connection, $sql);
        if($result)
        {
            header('Location: category.php');
        }
        else{
            echo "error";
        }
    }
	if(isset($_POST['addc']))
    {
        $category =ucfirst($_POST['category']);
        
        $dublicate = mysqli_query($connection, "SELECT * FROM `category` WHERE `category` = '$category'");
        if(mysqli_num_rows($dublicate) > 0)
        {
            echo "<script>alert('Category already exist..');</script>";
            header('location:category.php'); 
        }
        else
        {
            $query = "INSERT INTO `category`(`category`) VALUES ('$category')";
            mysqli_query($connection, $query);
            header('location:category.php');  
        }
    }
?>
