    <?php
    require_once '../vendor/autoload.php';

    $auth= new \App\Authentication();

    $alert = new \App\Alert();
    $alert->showsignupdoneAlert();


    $authin = new \App\Authentication();

    $authin->Login();

    $authin->redirectIfAuth();

    ?>

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

            <title> Login</title>
                    <link rel="stylesheet" href="Login.css">

        </head>
        </head>
    <body>

            <header>
                <div id="logo">
                    <img  src="logo.jpg" width="180px" alt="image not displayed"
                </div>
            </header>
                            <?php require_once('./layout/navbar.php'); ?>

    </body>
        <body >
            <h1 style="color: rgb(59, 74, 217);"><u><i>Login </i></u> </h1>
            <form method="post">
                
                <label for="email" style="color: rgb(59, 74, 217);">Email</label><br>
                <input id="email" type="email" name="uemail" required><br>
                <br>
                <label for="password" style="color: rgb(59, 74, 217);">password</label><br>
                <input id="password" type="password"  name="upass" required><br>
                <br>
                
                <button type="submit" name="loginb" class="login" style="background-color:orange;">Login </button>
            </form>
                <?php require_once('./layout/footer.php'); ?>

        </body>
    </html>