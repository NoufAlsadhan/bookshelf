<?php include 'connectDB.php'; ?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>View</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" type="text/css" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="h"><img src="img/logo.png" height=80 width=160><a href="index.php"><img src="img/logout.png"height=50 width=120></a></div><hr>
        <div id="add"><a href="add.php"><button>ADD BOOK +</button></a></div><hr>
        
        
        <div class="grid-container">
            
            <?php
                $sql = "select * from book";
    $run = mysqli_query($link,$sql);
    while($row= mysqli_fetch_assoc($run)){
           echo '<div class="grid-item"><img class="pic" src='.$row["image"].'><br><div class="change_icons">';?>
              <button class="btn"> <a href="update.php?isbn=<?php echo $row['isbn']?>"> <i class="fa fa-pencil" ></i></a></button>
               <button class="btn" onclick="return confirm('Are you sure you want to delete this item?');"> <a href="deletebook.php?isbn=<?php echo $row['isbn']?>"> <i class="fa fa-trash" ></i></a></button><?php
    echo '</div>'.$row["name"].'<br></div>'; }?>
</div>
       <div id="id01" class="modal">
  <form class="modal-content">
    <div class="container">
      <p>Are you sure you want to delete this item?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'; click(false)" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'; click(true)" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div> 
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  
  function click(v){
      return v;
      
    }
    
    
  }
}
</script>
    </body>
</html>
