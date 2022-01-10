<?php
    include 'conn.php';
    $id = $_GET['id'];
    $deleteData = " DELETE FROM ragistration where id = $id ";
    $query = mysqli_query($sql, $deleteData);
    print_r($deleteData);
    if($query){
        echo "Data is deleted";
    }else {
        echo "Data is not deleted";
    }
    echo "<br>";
    echo "<button><a href='display.php'>Back</a></button>"
?>