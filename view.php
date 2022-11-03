<?php require 'connectDB.php'; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>view</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="css/layout.css" type="text/css" />
      <link rel="stylesheet" href="css/star.css" type="text/css" />
      <link rel="stylesheet" href="css/b.css" type="text/css" />
      <link rel="stylesheet" href="css/a.css" type="text/css" />
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
   </head>
   <body>
      <div id="h"><img src="img/logo.png" height=80 width=160><a id="cart" href='cart.php'> <i class="fa fa-shopping-cart" ></i></a></div>
      <hr>
      <div class="wrapper">
         <!-- ####################################################################################################### -->
          
         <div id="topbar">
            <div class="fl_left">
               <form action="#" method="post">
               </form>
            </div>
            <div id="topnav">
            </div>
            <br class="clear" />
         </div>
         <!-- ####################################################################################################### -->
         <div id="intro">
             <?php
             $sql5="Select Avg(rate) as avg from review where book_isbn=".$_GET['isbn'];
             $result5=mysqli_query($link,$sql5);
             $row5=mysqli_fetch_assoc($result5);
             $avg=round($row5['avg']);
             for($i=0;$i<$avg;$i++){
             echo '<span class="fa fa-star checked"></span>';}
                
            for($i=0;$i<5-$avg;$i++){
           echo' <span class="fa fa-star"></span>';
            }
            
            ?>
             <br>
             <?php
        $isbn= $_GET['isbn'];
        $sql= "SELECT * FROM book where isbn=".$isbn;
        $run = mysqli_query($link,$sql);
        $row= mysqli_fetch_assoc($run);
        ?>
            <div class="fl_left"> <a href="#"><img src="<?php echo $row["image"] ?>" alt="" /></a> </div>
            <div class="fl_right">
               <h2><?php echo $row["name"] ?></h2>
               <br/>
               <p>ISBN: 	<?php echo $row["isbn"] ?></p>
               <br/>
               <p> Available quantity: <?php echo $row["available_quantity"] ?></p>
               <br/>
               <p> Number of pages: <?php echo $row["num_pages"] ?> Pages</p>
               <br/>
               <p> Genre type: <?php echo $row["genre"] ?> </p>
               <br/>
               <p> Author Name: <?php echo $row["author_name"] ?></p>
               <br/>
               <p>Price: <?php echo $row["price"] ?>SR</p>
               <br/> <br/> <br/>
               <button class="button-40" role="button" onclick='myFunction()'><a id='addd' href="addbook.php?isbn=<?php echo $row['isbn']?>">Add to Cart</a></button>
            </div>
            <br class="clear" />
            
            <script>
function myFunction() {
  alert("Book added to cart successfully!");
}
</script>
         </div>
         <!-- ####################################################################################################### -->
         <div id="homecontent">
            <ul>
               <h2>About the book</h2>
               <p><?php echo $row["brief"] ?>
               </p>
            </ul>
            <br class="clear" />
         </div>
         <!-- ####################################################################################################### -->
         <div id="imageline">
            <button class="button-41" role="button" onclick="openForm()"> + Share your thoughts</button>    
            <h2>Reviews</h2>
            <div class="form-popup" id="myForm">
               <form class="form-container" action="review.php" method="POST">
                  <input type="text" placeholder="Enter your name" name="name" required>
                  <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="5">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="4">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="3">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="2">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="1">1 star</label>
                  </div>
                      <br> <br><br><br>
                  <textarea type="textarea" id="w3review" name="review" rows="4" cols="30" required placeholder="Write your thoughts"></textarea>
                  <br> <br>
                          <input type="hidden" name="id" value="<?php echo $isbn?>">
                  <button type="submit" class="btn">Share</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
               </form>
            </div>
            <script>
               function openForm() {
                 document.getElementById("myForm").style.display = "block";
               }
               
               function closeForm() {
                 document.getElementById("myForm").style.display = "none";
               }
            </script>
            <!-- HTML !-->
            <br/> <br/> 
            <ul>
            <div id="homecontent">
               <ul>
                   <?php
                   $sql4="Select * from review where book_isbn=".$isbn;
                   $result4=mysqli_query($link,$sql4);
                   while($row4=mysqli_fetch_assoc($result4)){
                  echo '<li>';
                     echo '<h2>'.$row4['name'].'</h2>';
                     for($i=0;$i<$row4['rate'];$i++){
                     echo '<span class="fa fa-star checked"></span>';
                     }
                     
                     for($i=0;$i<5-$row4['rate'];$i++){
                     echo'<span class="fa fa-star"></span>';}
                     
                     echo'<p>'.$row4['review'].'</p>';
                   echo'</li>';}
                 ?>
                   </ul>
               <br class="clear" />
            </div>
         </div>
         <!-- ####################################################################################################### -->
         <br class="clear" />
      </div>
      <!-- ####################################################################################################### --> 
      <br class="clear" />
   </body>
</html>