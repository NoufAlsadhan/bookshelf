<?php include 'connectDB.php'; ?>


<!DOCTYPE html>

<html>
    <head>
        <?php
        
                
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $errs = array();
            $isbn=$_POST['isbn'];
    $sql1 = "select * from book where isbn='$isbn'";
    $run1 = mysqli_query($link,$sql1);
    $check1 = mysqli_num_rows($run1);
    if($check1 == 0) {
        $isbn = $_POST['isbn'];
    } else {
        $errs[] = 'Book already in system';
    }
            $name=$_POST['name'];
            $author_name=$_POST['author_name'];
            $price=$_POST['price'];
            $brief=$_POST['brief'];
            $genre=$_POST['genre'];
            if(is_numeric( $_POST['available_quantity'] )) {
        $available_quantity = $_POST['available_quantity'];
    } else {
        $errs[] = 'Quanitity must be number';
    }
            if(is_numeric( $_POST['num_pages'] )) {
        $num_pages = $_POST['num_pages'];
    } else {
        $errs[] = 'Number of pages must be number';
    }
            

      $file_name = $_FILES['myfile']['name'];
      $tr="img/";
      $file_tmp = $_FILES['myfile']['tmp_name'];
move_uploaded_file($file_tmp,"img/".$file_name);
$dist=$tr.$file_name;
          
       if(empty($errs)) {
        $sql="INSERT INTO book VALUES ('$isbn', '$name','$author_name','$price', '$available_quantity', '$num_pages','$brief','$genre','$dist')";
                $run = mysqli_query($link,$sql);
echo '<META HTTP-EQUIV="Refresh" Content="2; URL=admin.php">';
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
        
        <title>Add</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/jcss.css" type="text/css" rel="stylesheet">
                <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    </head>
    <body>
         <div id="h"><img src="img/logo.png" height=80 width=160>
         </div>
         <hr>
         <h2 class="but"> Add book information </h2>
         <form action="" method="POST" enctype="multipart/form-data">
         <h3>  Book picture : </h3>
         <input type="file" id="myfile" name="myfile" required>
         <!-- <input id = "pc2" type="image" src="../img/ADD.png" alt="Submit" width="120" height="120">-->
         
         
         <div class="container" >
             <div class="left" >
         <h3> Brief:</h3>
         <textarea class="rectangle" name="brief" required rows="4" cols="50"></textarea>
             
             
         
         <h3>Available quantity :</h3>
         <input class="rectangle2" name="available_quantity" required type="number" min="0" max="500" >
      
         
         <h3>Number of pages :</h3>
         <input  class="rectangle2"required type="number" name="num_pages" >
         
        <h3>Author name:</h3>
         <input  class="rectangle2" required type="text" name="author_name" >
         
         </div>
          
           <div class="right">
         
          <h3>Name :</h3>
         <input  class="rectangle2"required type="text" name="name" >  
   
         
         
          <h3>Price :</h3>
         <input  class="rectangle2"required type="text" name="price" >   
        
         
         
          <h3>ISBN :</h3>
         <input  class="rectangle2"required type="text" name="isbn" >   
       
        
        
        <h3> Genre type : 
        <select id="gn" required name="genre" size="1" > 
            <option> Novels </option>
            <option> Mystery </option> 
            <option> Crime </option> 
            <option> Education </option>

            
        </select>
           </h3>
        
           </div><!-- right -->
           
         </div><!-- container  -->
         
         
         <div class="but">
          
         
             <input class = "mbut" type="submit" value="ADD">
            
         </div>
         </form>
    </body>
    
</html>
