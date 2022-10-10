<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <button type="submit" class="btn btn-primary"> <a href="user.php" class="text-light">Add User</a>
        </button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Sl.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
      include 'connect.php';
      $sql = "select  * from `curd`";
      $res = mysqli_query($con,$sql);
      if($res){
        while($row = mysqli_fetch_assoc($res)){
            $sno = $row['sno'];
            $name= $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $password = $row['password'];
            echo ' <tr>
            <th scope="row">'.$sno.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$sno.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$sno.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
      }
    ?>
            </tbody>
        </table>
    </div>
</body>

</html>