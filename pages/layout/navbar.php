                   <?php
                       require_once '../vendor/autoload.php';
                               ?>

                   <link rel="stylesheet" href="navbar.css">

   <nav>
                <ul>

                    <li><a href="index.php">Home</a></li>
                    <li><a href="productpage.php">Products</a></li>

                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <?php if(isset($_SESSION['userID'])): ?>
    <li><a href="viewmessage.php" style="color:Black;">View Messages</a></li>
<?php endif; ?>

        <?php 
        $auth = new \App\Authentication();
        if ($auth->isAuth()): 
        ?>
            <li>
                <a style="color:Blue; " class="nav-link" href="index.php?logout=1">Logout</a>
            </li>
        <?php else: ?>
            <li><a href="Login.php">Login</a></li>
            <li><a href="signup.php">signup</a></li>
        <?php endif; ?>
    </ul>
</nav>
        </nav>
