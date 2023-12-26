<?php 
include 'connection.php';
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $delete = "DELETE FROM `users` WHERE `id` = '$id'";
        $result = mysqli_query($con,$delete);
        if($result){
            header('location:userlist.php');
        }
        else{
            echo "Data not deleted";
        }
    }

?>