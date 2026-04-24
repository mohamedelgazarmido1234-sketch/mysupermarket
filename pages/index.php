    <?php
  require_once '../vendor/autoload.php';
$authindex = new \App\Authentication();

$authindex->Logout();


$authindex->redirectIfNotAuth();

$db = new \App\Database();
$db->check();
?>

    <!doctype html>
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

            <link rel="stylesheet" href="cs.css">
                    <title>Home</title>

        </head>

        <body>

            <header>
                <div id="logo">
                    <img  src="logo.png" width="180px" alt="image not displayed">
                </div>
            </header>
                        <?php require_once('./layout/navbar.php'); ?>

        
        <dev id="welcometext">
            <h1>Hello, Welcome to our Online Market</h1>
            <h1>Your online Market-Fast & easy shopping</h1>
                    <h1 style="color:orange">Welcome to your Market, <?php echo $_SESSION['userName'] ?></h1>

        </dev>
        <div id="welcome">
            <img src="welcome.png" width="350px" alt="image not displayed">
        </div>
        <div id="text">
            <h1> <a href="productpage.php">Click here to make an Order</a> </h1>
            <h2>How it works?</h2>
            <h3><i>1. Browse Products</i></h3>
            <h3><i>2. Add items to your cart</i></h3>
            <h3><i>3. Place your Order</i></h3>
            <h3><i>4. Receive fast delivery</i></h3>
            <h4>Order now & enjoy </h3>
        </div>

                <?php require_once('./layout/footer.php'); ?>

        </body>
    </html>