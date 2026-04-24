<?php
  require_once '../vendor/autoload.php';

$authindex = new \App\Authentication();

$authindex->Logout();


$authindex->redirectIfNotAuth();
?>
<!DOCTYPE html>
<html lang="en">
<head>
             <meta charset="UTF-8">
   <meta name="\viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
          href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <title>products</title>
    <link rel="stylesheet" href="productpage.css">
</head>

<body>
    <header>
        <div id="logo">
            <img src="logo.jpg" width="180px" alt="image not displayed">
        </div>
        <div id="Search">
            <form>
                <input type="Search" placeholder="type your product" size="60px">
                <input id="Go" type="button" value="Go">
            </form>
        </div>
        <div id="cart">
            <table>
                <tr>
                    <td><a href="Login.php">Login</a></td>
                    <td><a href="#"><img src="cart.png" width="60px" ></a></td>
                </tr>
            </table>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Bakery.php">Bakery</a></li>
            <li><a href="Desserts.php">Desserts</a></li>
            <li><a href="Vegatables&Fruits.php">Vegatables&Fruits</a></li>
            <li><a href="Dairy.php">Cheese</a></li>
        </ul>
    </nav>
     <dev id="welcometext">
        <h1>Hello, Hello,LETS MAKE AN ORDER</h1>
        <h1>Press the cateogory you want</h1>
    </dev>
            <?php require_once('./layout/footer.php'); ?>

</body>
</html>