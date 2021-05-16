<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    
    <title>Scratch Bank</title>
</head>
<body>

<?php
    include 'navbar.php';
?>

    <div class="container">

        <!-- Introduction section -->

        <div class="home-hero">
            <div class="heading">
                <h3>This is</h3>
                <h1>SCRATCH BANK</h1>
                <h2>WELCOME!</h2>
            </div>
        </div>

        <!-- Activity section -->

        <div class="functions">
            <div class="card">
                <img src="https://img.icons8.com/officel/100/000000/add-user-male.png" class="card-img">
                <br>
                <a href="createuser.php"><button>Register new User</button></a>
            </div>
            <div class="card">
                <img src="https://img.icons8.com/cotton/100/000000/transaction-approved.png" class="card-img">
                <br>
                <a href="transfermoney.php"><button>Make a Transaction</button></a>
            </div>
            <div class="card">
                <img src="https://img.icons8.com/color/100/000000/activity-history.png" class="card-img">
                <br>
                <a href="transactionhistory.php"><button>Transaction History</button></a>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <footer class="footer-center">
        <p>&copy 2021. Made by <b>SAKSHAM DAHAKE</b> <br> The Sparks Foundation</p>
    </footer>



</body>
</html>