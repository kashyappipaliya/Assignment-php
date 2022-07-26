<?php
    include('config.php');

    if(isset($_GET['did']))
    {
        $id = $_GET['did'];
        $sql = "DELETE FROM `category` WHERE `id` = '$id'";
        $result = mysqli_query($connection, $sql);
        if($result)
        {
            header('Location: listproduct.php');
        }
        else{
            echo "error";
        }
    }
?>
