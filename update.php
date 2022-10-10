<?php
include 'connect.php';
$uid =$_GET['updateid'] ;
$sql= "select * from `curd` where sno=$uid"; //get the update id
$res = mysqli_query($con,$sql);
$idVal = mysqli_fetch_assoc($res); //get the all the value respect to the id
$name = $idVal['name'];
$email =$idVal['email'];
$phone= $idVal['phone'];
$password=$idVal['password'];

if(isset($_POST['update'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $sql = "update `curd` set sno='$uid',name='$name', email='$email', phone='$phone',password='$password' where sno=$uid";
  $res = mysqli_query($con,$sql);
  if($res){
    $alertMsg = true;
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>

<body>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    <div class="container my-4">
      <h1 style="text-align: center;">Signup here!</h1>
      <form method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name  ?> />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email ?> />
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" placeholder="Enter your phone number" name="phone"
            autocomplete="off"  value=<?php echo $phone ?> />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" class="form-control" placeholder="Enter your phone password" name="password"
            autocomplete="off" value=<?php echo $password ?> />
        </div>
        <div class="row d-flex justify-content-center align-content-center">
          <button type="submit" class="btn btn-primary" name="update">Update</button>
        </div>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
  </body>

  </html>
</body>

</html>