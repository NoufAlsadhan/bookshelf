
<?php require 'connectDB.php'; ?>

<?php
$id=$_POST['id'];
$name=$_POST['name'];
$rating=$_POST['rate'];
$review=$_POST['review'];
        
      $sql="INSERT INTO review VALUES('','$name','$review','$rating','$id')"  ;
      $result=mysqli_query($link,$sql);
      
      
      header('Location: ' . $_SERVER['HTTP_REFERER']);






?>