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
    
    $sql2="DELETE FROM cart WHERE isbn= '$itemNum';";
    $result2 = mysqli_query($link, $sql2);
    
    $sql3="DELETE FROM review WHERE book_isbn= '$itemNum';";
    $result3 = mysqli_query($link, $sql3);
    
    return $result;
                    
                }
                


?>
