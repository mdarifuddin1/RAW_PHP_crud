
<?php

include'connect.php';

$id =$_GET['updateid'];

// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` SET name='$name', email='$email', phone='$phone', password='$password' WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        
        <form method="post">
            <div class="mb-3">
                <label  class="form-label">Enter Your Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Enter Your Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="mb-3">
                <label  class="form-label">Enter Your phone  Number</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter Your Number">
            </div>
            <div class="mb-3">
                <label  class="form-label">Enter Your Password </label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>