<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="container">
        <?php
            include 'conn.php';
            $id =$_GET['id'];
            $selectData = " SELECT * FROM ragistration where id = $id ";
            $query = mysqli_query($sql, $selectData);
            $rowData = mysqli_fetch_array($query);

            if(isset($_POST['submit'])){
                $updatId = $_GET['id'];
                $unmae = $_POST['uname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $updatedData = " UPDATE `ragistration` SET `u_name`='$unmae',`email`='$email',`password`='$password' WHERE id = $updatId  ";
                $rquery = mysqli_query($sql, $updatedData);
                if($rquery){
                    echo 'Data is updated';
                }else{
                    echo 'Data is not updated';
                }
            }
        ?>
    <div class="container mt-5">
    <form action="" method="post">
        <input type="text" name="uname" value="<?php echo  $rowData['u_name']; ?>" placeholder="Enter User Name"><br><br>
        <input type="email" name="email" value="<?php echo $rowData['email']; ?>" placeholder="Enter email"><br><br>
        <input type="password" name="password" value="<?php echo  $rowData['password']; ?>" placeholder="Enter password"><br><br>
        <input type="submit" class="btn btn-success" name="submit" value="Update"><br><br>
    </form><br>
    <a href="display.php"><button class="btn btn-primary">Back</button></a>
    </div>
    </body>
</html>