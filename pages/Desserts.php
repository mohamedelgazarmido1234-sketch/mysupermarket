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

    <title>Desserts</title>
    <link rel="stylesheet" href="Desserts.css">
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
                    <?php require_once('./layout/navbar.php'); ?>

    <div id="x">
      
         <form id="centerform">
            <labe> Sort by </labe>
              <select>
                <option >Price: High to Low</option>
                <option>Price : Low to high </option>
                <option >Name: A to Z</option>
                <option>Price : Z to A </option>

            </select>
        </form>
        <br>
        <form id="centerform">
            <label >filter by</label>
            <select>
                <option>Category</option>
                <option selected>Price</option>
                <option disabled>None</option>
                <option>weight</option>

            </select>
        </form>
        <br>
        <table>
            <tr>
                  <td width="15%">
                   <a href="#" ><img src="tiramisu.jpeg" width="75px"></a>
                    <p> Tiramisu  <br> <span class="price">100 EGP </span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="Brownies.jpeg" width="75px"></a>
                    <p> Fresh Brownies <br> <span class="price"> 70 EGP </span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                <td width="15%">
                   <a href="#" ><img src="Tresleches.jpeg" width="75px"></a>
                    <p> Tresleches   <br> <span class="price">100 EGP </span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                <td width="15%">
                   <a href="#" ><img src="Madeleine.jpeg" width="75px"></a>
                    <p> Madeleines  <br> <span class="price">80 EGP </span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="Triple Choc.jpeg" width="75px"></a>
                    <p> Triple Chococlate cake  <br> <span class="price">125  EGP </span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                <td width="15%">
                   <a href="#" ><img src="Rice Pudding .jpeg" width="75px"></a>
                    <p>Egypytian Rice Pudding  <br> <span class="price">40 EGP </span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                    
                
            </tr>
        </table>

    </div>
            <?php require_once('./layout/footer.php'); ?>

</body>
</html>