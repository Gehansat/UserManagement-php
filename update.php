<?php 
    include 'connection.php';
    $id = $_GET['updateid'];


    $updatesql = "select * from `users` where id=$id";
    $result = mysqli_query($con,$updatesql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $password = $row['password'];

    if(isset($_POST['update'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

$update = "update `users` set id=$id, name='$name', email='$email', phone='$phone', address='$address', password='$password' where id=$id";

$result = mysqli_query($con,$update);
if($result){
    // echo "Data updated successfully";
    header('location:userlist.php');
}
    else{
        echo "Data not updated";
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
                    <input type="text" name="name" id="name" class="form-control" value=<?php echo $name ?>>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value=<?php echo $email ?>>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value=<?php echo $phone ?>>
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value=<?php echo $address ?>>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value=<?php echo $password ?>>
                    <br>
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            <!-- </div> -->
        </div>     
    </form>

</body>
</html>