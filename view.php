<?php require 'connectDB.php'; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>view</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="css/layout.css" type="text/css" />
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
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
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
               <button class="button-40" role="button"><a href="addbook.php?isbn=<?php echo $row['isbn']?>">Add to Cart</a></button>
            </div>
            <br class="clear" />
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
            <button class="button-41" role="button" onclick="openForm()"> + Add Review</button>    
            <h2>Reviews</h2>
            <div class="form-popup" id="myForm">
               <form class="form-container">
                  <label for="name"><b>Name:</b></label>
                  <input type="text" placeholder="Enter your name" name="name" required>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <br> <br>
                  <label for="w3review">Review: </label>
                  <textarea type="textarea" id="w3review" name="w3review" rows="4" cols="30" required></textarea>
                  <br> <br>
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
                  <li>
                     <h2>Abdullah Mohammad</h2>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                     <p>This book is amazing</p>
                  </li>
                  <li>
                     <h2>Omar Sultan</h2>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star"></span>
                     <p> This book is beautiful</p>
                  </li>
                  <li class="last">
                     <h2>Aljawharah Ibrahim</h2>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <p> This book is interesting</p>
                  </li>
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