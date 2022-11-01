<?php include 'connectDB.php';?>

<?php
$del = delItem($_GET['isbn']);

	if ($del > 0) {
		header('Location: cart.php');
		die();
        }
                
                
                
                function delItem($itemNum) {
                    
                    global $link;
                    
                    $sql = "DELETE FROM cart WHERE isbn = '$itemNum';";
    $result = mysqli_query($link, $sql);
    
    return $result;
                    
                }
                


?>