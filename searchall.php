<?php include 'connectDB.php';?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>

        <title>Search</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/s.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script><!-- comment -->
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
            </script>
    </head>
    <body>
       
           

                           
       <div id="h"><img src="img/logo.png" height=80 width=160><a id="cart" href='cart.php'> <i class="fa fa-shopping-cart" ></i></a></div><hr>
       

       
       <form action="searchall.php" method="POST">
          
           <button class="genre1" onclick="myfunction()"  name='n'>NOVELS</button><button onclick="myfunction()" name='m' class="genre1">MYSTERY</button><button onclick="myfunction()" name='C' class="genre1">CRIME</button><button onclick="myfunction()" name='E' class="genre1">EDUCATION</button><button name='A' onclick="myfunction()" class="genre1">ALL</button><hr>
           </form>
           

       
       
       
        <div class="grid-container">
           
            <?php 
            if(isset($_GET["genre"])){
                $sql = "select * from book";
    $run = mysqli_query($link,$sql);
    while($row= mysqli_fetch_assoc($run)){
           echo '<div class="grid-item">';
           
          
             $sql5="Select Avg(rate) as avg from review where book_isbn=".$row['isbn'];
             $result5=mysqli_query($link,$sql5);
             $row5=mysqli_fetch_assoc($result5);
             $avg=round($row5['avg']);
             for($i=0;$i<$avg;$i++){
             echo '<span class="fa fa-star checked"></span>';}
                
            for($i=0;$i<5-$avg;$i++){
           echo' <span class="fa fa-star"></span>';
            }
           
           echo'<br>';
           
           
           
        echo '<img class="pic" src='.$row["image"].'><br><div class="change_icons">';?>
               <button class="btn"> <a href="view.php?isbn=<?php echo $row['isbn']?>"> <i class="fa fa-eye" ></i></a></button>
               <button class="btn"> <a href="addbook.php?isbn=<?php echo $row['isbn']?>"> <i class="fa fa-shopping-cart" ></i></a></button>
                <?php
            echo '</div>'.$row["name"].'<br>'.$row['price'].'SR</div>'; }}?>
               
        </div>
               
               
               <?php
              //$genra = $_POST['genre'];
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               if(isset($_POST["n"]))
                   $sqlj = "SELECT * FROM book WHERE genre ='Novels'";
               else if(isset($_POST["m"]))
               $sqlj = "SELECT * FROM book WHERE genre ='Mystery'";
               else if(isset($_POST["C"]))
               $sqlj = "SELECT * FROM book WHERE genre ='Crime'";
               else if(isset($_POST["E"]))
               $sqlj = "SELECT * FROM book WHERE genre ='Education'";
               else if(isset($_POST["A"]))
                   $sqlj = "SELECT * FROM book";
             
               $result = mysqli_query($link, $sqlj);
               if(mysqli_num_rows($result)==0){
                   echo"<br><br><h1>There are no books under this genre";
        echo"<br><br><br><br><br><br><br><br><br><br><br><br><hr><hr>";
        echo"</h1>";
               }
               echo '<div class="grid-container">' ; 
                        while($row = mysqli_fetch_assoc($result))
                        {
                         
           echo '<div class="grid-item"><img class="pic" src='.$row["image"].'><br><div class="change_icons">';?>
                              <button class="btn"> <a href="view.php?isbn=<?php echo $row['isbn']?>"> <i class="fa fa-eye" ></i></a></button>
                              <button class="btn" ><a href="addbook.php?isbn=<?php echo $row['isbn']?>"><i class="fa fa-shopping-cart"></i></a></button></div>
               <?php
               echo $row["name"].'<br>'.$row['price'].'SR</div>';} echo '</div>';}?> 
                     

</div>
               
       <script>
           function myfunction(){
        onclick = this.form.submit();
           }
     </script>    
           
    </body>
</html>