<?php include 'connectDB.php';?>


<?php 

$b=$_GET['isbn'];
$sql = "select * from book WHERE isbn='$b';";
    $run = mysqli_query($link,$sql);
$row= mysqli_fetch_assoc($run);
 ?>




<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        
        <?php
$bb=$_GET['isbn'];
$ii=$row['image'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
            $errs = array();
            $isbn=$_POST['isbn'];
    $sql1 = "select * from book where isbn='$isbn'";
    $run1 = mysqli_query($link,$sql1);
    $check1 = mysqli_num_rows($run1);
    $rrow= mysqli_fetch_assoc($run1);
    if($check1 == 0 || ($check1==1 && $rrow['isbn']==$bb)) {
        if(!empty($_POST['isbn']))
        $isbn = $_POST['isbn'];
        else
        $errs[] = 'Please fill all fields';    
    } else {
        $errs[] = 'Book already in system';
    }
            if(empty( $_POST['name'] )) {
                $errs[] = 'Please fill all fields';
    } else {
        $name = $_POST['name'];
    }
           if(empty( $_POST['author_name'] )) {
                $errs[] = 'Please fill all fields';
    } else {
        $author_name = $_POST['author_name'];
    }
           
            if(empty( $_POST['brief'] )) {
                $errs[] = 'Please fill all fields';
    } else {
        $brief = $_POST['brief'];
    }
            if(empty( $_POST['genre'] )) {
                $errs[] = 'Please fill all fields';
    } else {
        $genre = $_POST['genre'];
    }
            if(is_numeric( $_POST['available_quantity'] )) {
        $available_quantity = $_POST['available_quantity'];
    } else {
        $errs[] = 'Please fill all fields';
    }
            if(is_numeric( $_POST['num_pages'] )) {
        $num_pages = $_POST['num_pages'];
    } else {
        $errs[] = 'Please fill all fields';
    }
    
    if(is_numeric( $_POST['price'] )) {
        $price = $_POST['price'];
    } else {
        $errs[] = 'Please Fill all fields';
    }
    
    $file_name = $_FILES['myfile']['name'];
      $tr="img/";
      $file_tmp = $_FILES['myfile']['tmp_name'];
move_uploaded_file($file_tmp,"img/".$file_name);
$dist=$tr.$file_name;
    
    
    if(empty($errs)) {
    if($dist!= "img/"){
    $sql3="UPDATE book SET isbn='$isbn', name='$name',author_name='$author_name',price='$price', available_quantity='$available_quantity', num_pages='$num_pages',brief='$brief',genre='$genre',image='$dist' WHERE isbn='$bb'";}
    else{
        $sql3="UPDATE book SET isbn='$isbn', name='$name',author_name='$author_name',price='$price', available_quantity='$available_quantity', num_pages='$num_pages',brief='$brief',genre='$genre',image='$ii' WHERE isbn='$bb'";
    }
            
        mysqli_query($link,$sql3);
        echo '<div class="alert alert-success">';
        echo "The book has been updated sucessfully!";
        echo '</div>';
echo '<META HTTP-EQUIV="Refresh" Content="1.5; URL=admin.php">';
        }
        else {
        echo "<div class='alert alert-danger text-center'>";
        foreach ( $errs as $e ){
            echo $e;
            echo '</div>';
        }
        }

        }
    
    
    ?>
        <title>Update</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/jcss.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    </head>
    <body>
         <div id="h"><img src="img/logo.png" height=80 width=160>
            </div>
         <hr>
         <h2 class="but"> Update book information </h2>
         <form action="" method="POST" enctype="multipart/form-data">
         <h3> Book picture : </h3>
         
          
              <input type="file" name="myfile" id="image"/>
         
         
         <div class="container" >
             <div class="left" >
         <h3> Brief :</h3>
         <textarea class="rectangle" rows="4" cols="50" name='brief' max='500'>
<?php echo $row["brief"]?></textarea>
             
             
         
         <h3>Available quantity :</h3>
         <input class="rectangle2" type="number" min="1" max="500" name='available_quantity' value="<?php echo $row["available_quantity"]?>">
      
         
         <h3>Number of pages :</h3>
         <input  class="rectangle2" type="number" name='num_pages' max='10000' value="<?php echo $row["num_pages"]?>">
         
         <h3>Author name:</h3>
         <input  class="rectangle2" type="text" name='author_name' max='30' value="<?php echo $row["author_name"]?>">
         
         </div>
          
           <div class="right">
         
          <h3>Name :</h3>
         <input  class="rectangle2" type="text" name='name' max='30' value="<?php echo $row["name"]?>">  
         
         
         
          <h3>Price :</h3>
         <input  class="rectangle2" type="number" name='price' value="<?php echo $row["price"]?>" min='0' max='500'>   
         
         
         
          <h3>ISBN :</h3>
         <input  class="rectangle2" type="text" name='isbn' max='13' value="<?php echo $row["isbn"]?>">   
        
        
        
        <h3> Genre type : 
        <select id="gn" name="genre" size="1" > 
            <option <?php if($row["genre"]=="Novels") echo "selected";?>> Novels </option>
            <option <?php if($row["genre"]=="Mystery") echo "selected";?>> Mystery </option> 
            <option <?php if($row["genre"]=="Crime") echo "selected";?>> Crime </option> 
            <option <?php if($row["genre"]=="Education") echo "selected";?>> Education </option>
            
        </select>
           </h3>
        
           </div><!-- right -->
           
         </div><!-- container  -->
         
         <div class="but">
          
             <a href="admin.php"> <input class = "mbut" type="button" value="Cancel"></a>
             <input class = "mbut" type="submit" value="Update">
             
         
            
         </div>
                  </form>

    </body>
    
</html>
