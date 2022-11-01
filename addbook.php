<?php include 'connectDB.php';?>

<?php
$sql1="Select * from book where isbn=".$_GET['isbn'];
$result1=mysqli_query($link,$sql1);
$row1=mysqli_fetch_assoc($result1);
addItem($_GET['isbn'],$row1['name'],$row1['price'],$row1['image']);
                
         
                function addItem($isbn,$name,$price,$image) {
                    
                    global $link;
                    
                 $sql="INSERT INTO cart VALUES ('$isbn', '$name','$price','$image')";
    $result = mysqli_query($link, $sql);
   
   header('Location: ' . $_SERVER['HTTP_REFERER'].'?genre=All');
                    
                }
                


?>