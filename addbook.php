<?php include 'connectDB.php';?>

<?php
$sql1="Select * from book where isbn=".$_GET['isbn'];
$result1=mysqli_query($link,$sql1);
$row1=mysqli_fetch_assoc($result1);

$sql2="Select * from cart where isbn=".$_GET['isbn'];
$result2=mysqli_query($link,$sql2);
if(mysqli_num_rows($result2)==0){
addItem($_GET['isbn'],$row1['name'],$row1['price'],$row1['image']);
}
else
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

                
         
                function addItem($isbn,$name,$price,$image) {
                    
                    global $link;
                    
                 $sql="INSERT INTO cart VALUES ('$isbn', '$name','$price','$image')";
    $result = mysqli_query($link, $sql);
   
   header('Location: ' . $_SERVER['HTTP_REFERER']);
                    
                }
                


?>