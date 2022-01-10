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
            // comment
            if(isset($_POST['submit'])){
                $unmae = $_POST['uname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $insertData = " INSERT INTO ragistration (`u_name`, `email`, `password`) VALUES ('$unmae', '$email', '$password') ";
                $rquery = mysqli_query($sql, $insertData);
                if($rquery){
                    echo 'Data is inserted';
                }else{
                    echo 'Data is not inserted';
                }
            }
        ?>
   <div class="container mt-5">
    <form class="form" action="" method="post">
            <input type="text" name="uname" value="" placeholder="Enter User Name"><br><br>
            <input type="email" name="email" value="" placeholder="Enter email"><br><br>
            <input type="password" name="password" value="" placeholder="Enter password"><br><br>
            <input type="submit" class="btn btn-success" name="submit" value="Insert"><br><br>
        </form><br>
        <a href="display.php"><button class="btn btn-primary">Back</button></a>
   </div>
    </body>
</html>