<html>
    <head>
        <title></title>
        <style></style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="container">
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
                include 'conn.php';
                $selectData = " SELECT * FROM ragistration ";
                $query = mysqli_query($sql, $selectData);
                while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['u_name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>">update</a>
                                <a href="delete.php?id=<?php echo  $row['id'];?>">Delete</a></td>
                        </tr>
                    <?php
                }
            ?>
        </table><br><br>
        <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
    </body>
</html>