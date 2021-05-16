<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Scratch Bank-Create User</title>
</head>
<body>

<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>


<?php
    include 'navbar.php';
?>

<div class="container">
    <!-- <div class="heading">
        <h2>Create New User</h2>
    </div> -->

    <div class="container-transparent">
        
        <img class="user-img" src="img/user.jpg">

        <form class="app-form" method="post">
            <div class="input">
                <input class="text-box" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="input">
                <input class="text-box" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="input">
                <input class="text-box" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="button-group">
                <input class="form-button" type="submit" value="CREATE" name="submit"></input>
                <input class="form-button" type="reset" value="RESET" name="reset"></input>
            </div>
        </form>
    </div>
</div>
    
    <!-- Footer section -->

    <footer class="footer-center">
        <p>&copy 2021. Made by <b>SAKSHAM DAHAKE</b> <br> The Sparks Foundation</p>
    </footer>
</body>
</html>