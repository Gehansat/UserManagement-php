<?php 
    include 'connection.php';
?>

<?php

    if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

$insert = "INSERT INTO `users` (`name`,`email`,`phone`,`address`,`password`) VALUES ('$name','$email','$phone','$address','$password')";

$result = mysqli_query($con,$insert);
if($result){
    // echo "Data inserted successfully";
    header('location:userlist.php');
}
    else{
        echo "Data not inserted";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
</head>
<body>
    <form method="POST">
        <div class="container">
            <!-- <div class="row"> -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <br>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            <!-- </div> -->
        </div>     
    </form>

</body>
</html>