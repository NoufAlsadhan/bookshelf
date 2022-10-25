<?php include 'connectDB.php';?>

<?php
$del = delItem($_GET['isbn']);

	if ($del > 0) {
		header('Location: admin.php');
		die();
        }
                
                
                
                function delItem($itemNum) {
                    
                    global $link;
                    
                    $sql = "DELETE FROM book WHERE isbn = '$itemNum';";
    $result = mysqli_query($link, $sql);
    
    return $result;
                    
                }
                


?>
