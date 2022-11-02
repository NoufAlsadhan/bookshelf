<?php include 'connectDB.php'; ?>


<!DOCTYPE html>

<html>
    <head>
        <title>Shopping cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/cart.css" type="text/css" rel="stylesheet">
		
    </head>
    <body>
<div id="h"><img src="img/logo.png" height=80 width=160><a href="index.php"></a></div><hr>        
       
       <h3 class="Pname">Shopping Cart</h3>
       <hr>
       
       
       
       
       
        
        <div class="list-container">
            
            <?php
            
                $sql = "select * from cart";
    $run = mysqli_query($link,$sql);
    while($row= mysqli_fetch_assoc($run)){
           
           echo '<div class="list-item"><img src='.$row["image"].' height="260" width="220"> <br><br><div class="info"><h4>'."<br>",'Book name : '.$row["name"]."<br>",'Book price : '.$row["price"]." "."SR"."<br>","</hr>";
           echo'</h4>'?>
            
            <button class="btn" onclick="return confirm('Are you sure you want to delete this item?');"> <a href="deletebook2.php?isbn=<?php echo $row['isbn']?>"><img src="img/del2.png"height=50 width=50></a></button>            
            
        
       
       
                <?php
    echo '</div><br></div></div>'; }?>
            
            
            <?php 
            
            $tot=25;
            
                $sql2 = "select SUM(price) As sum from cart";
                $run2 = mysqli_query($link,$sql2);
                  $row = mysqli_fetch_assoc($run2);
                    $Ftot =$row['sum'];
                    
                   if(isset($row['sum'])){
            
    echo '<div class="sum"><h2>','Sub total : '.$row["sum"]." "."SR"."<br><br>",'Estimated VAT : 15 SR '."<br><br>".'Shipping Fee : 10 SR '."<br>","</hr>";
    echo "<br><br>";
    echo'<hr>';
    
    function add(int $Ftot, int $tot){
      
        echo "<h2>Total :  ".($Ftot+$tot)." "."SR";
        
        
        
    }
    
    add($Ftot,$tot);
    echo'</div>';
    
                   }
               
    else{
        
       $Ftot=0;
        echo"<br><br><h1>there are no items in the cart";
        echo"<br><br><br><br><br><br><br><br><br><br><br><br><hr><hr>";
        echo"</h1>";
        
       
  }
            ?>
   
      
       
<script>

function myFunction(Ftot) {
    
    if(Ftot!=0) {
        
  alert("Your order is sent successfully");

}

}
</script>
 
           
           
            <div id="check"><button class="checkout"  onclick="myFunction(<?php echo mysqli_num_rows($run); ?>)">Checkout</button></div><hr>
           
            
            
     <div class="payment">
       
       <ul>
  <li><img src="img/visa.png"  height="50" width="90"></li>
  <li><img src="img/mada.png"  height="50" width="90"></li>
  <li><img src="img/masterC.png" height="50" width="90"></li>
  <li><img src="img/COD.png" height="50" width="90"></li>
</ul>
        
     </div>
            
        </div>
 

    </body>
</html>