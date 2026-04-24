<?php
require_once '../vendor/autoload.php';

$contactObj = new \App\contact();
$contactObj->pcreate(); 

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

        <title>Contact Us</title>
        <link rel="stylesheet" href="css1.css">

    </head>
    <body>
        <header>
            <div id="logo">
                <img  src="logo.png" width="180px" alt="image not displayed"
            </div>
        </header>
                           <?php require_once('./layout/navbar.php'); ?>

<form action="contact.php" method="POST">
        <div id="contact">
        <div id="fname">
            <h2>CONTACT US</h2>
                <label > Name</label>
                <input type="text" required name=ccname>
        </div>
       
        <div id="mail">
                <label >Email</label>
                <input type="text" required name=ccemail>
        </div>
        <div id="sub">
                <label >Subject</label>
                <input type="text" name=message required>
<button type="submit" name="csubmit">Submit</button>
                <?php if(isset($cID)): ?>
        <br><br>
        <a href="viewmessage.php" style="color: white; font-size: 12px;">Admin: View All Messages</a>
    <?php endif; ?>
</div>
        </div>
        </div>
                </form>
    </body>
            <?php require_once('./layout/footer.php'); ?>

</html>