
<?php include 'connectDB.php'; ?>

<!DOCTYPE html>

<html>/////
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div id="h"><img src="img/logo.png" height=80 width=160><a href="login.php"><img src="img/login.png"height=50 width=120></a></div>
        <div id="pp"><img src="img/bg1.jpg" id="p"></div>
        <a href="searchall.html"><button class="button">SHOP NOW!</button></a>
        
        <h1> Last Releases</h1>
        
        <?php
        
        $sql='SELECT * FROM book LIMIT 3';
        $run = mysqli_query($link,$sql);
        echo  '<div class="grid-container1">';
        while($row= mysqli_fetch_assoc($run)){ 
            echo '<div class="grid-item"><img src='.$row["image"].'></div>';
        } ?>
</div>
        
    </body>
</html>
