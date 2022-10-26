<?php include 'connectDB.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div id="h"><img src="img/logo.png" height=80 width=160><img src="img/bgg.jpg"height=50 width=120></div>
        
        
        
        


  <div class="form">
      <img src="img/p.jpg"height=150 width=160>
              <?php 
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password= $_POST['password'];
        $sql="SELECT * FROM admin WHERE email='$email'";
        $run = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($run);
    $count = mysqli_num_rows($run);
    if($count==1){
        if (password_verify($password, $row['password'])){
            
         echo '<META HTTP-EQUIV="Refresh" Content="1; URL=admin.php">';    
            exit;
        } else {
            echo "<div class='alert alert-danger text-center'>";
                echo 'Email or Password Incorrect';
            echo "</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center'>";
            echo 'Email or Password Incorrect';
        echo "</div>";
    }

}
        ?>
    <form class="login-form" method="POST">
      <input type="email" required name="email" placeholder="email"/>
      <input type="password" required name="password" placeholder="password"/>
      <input type="submit" name="login" value="LOGIN" class="b"></a>
    </form>
  </div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
