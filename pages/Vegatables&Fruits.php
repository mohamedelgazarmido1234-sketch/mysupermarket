
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

    <title>Vegatables&Fruits</title>
    <link rel="stylesheet" href="Vegatables&Fruits.css">
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
                   <a href="#" ><img src="red apple.webp    " width="75px"></a>
                    <p> Italian Red apple  <br> <span class="price">150 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="yellow apple.webp" width="75px"></a>
                    <p>  Italian Yellow apple  <br> <span class="price">140 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                <td width="15%">
                   <a href="#" ><img src="Green apple.webp" width="75px"></a>
                    <p> Italian Green  apple  <br> <span class="price">170 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                <td width="15%">
                   <a href="#" ><img src="red garpes.webp" width="75px"></a>
                    <p> Improted red Grapes <br> <span class="price">250 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="Black grapes.webp" width="75px"></a>
                    <p> Improted black Grapes  <br> <span class="price">250 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                <td width="15%">
                   <a href="#" ><img src="Local banan .webp" width="75px"></a>
                    <p> Local banana <br> <span class="price">50 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="sweet orange .webp" width="75px"></a>
                    <p> Fresh Sweet Orange pico <br> <span class="price">28 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="strawberry pico.webp" width="75px"></a>
                    <p> Fresh strawberry pico <br> <span class="price">45 EGP per 250G</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="Tomato.webp" width="75px"></a>
                    <p> Fresh Tomato  <br> <span class="price">39 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="Cucumber.webp" width="75px"></a>
                    <p> Fresh Cucumber  <br> <span class="price">60 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
              <td width="15%">
                   <a href="#" ><img src="capmix.webp" width="75px"></a>
                    <p> Fresh Mix capsicums  <br> <span class="price">45 EGP per 2pc</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
               <td width="15%">
                   <a href="#" ><img src="potato.webp" width="75px"></a>
                    <p> Fresh potato  <br> <span class="price">35 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
               <td width="15%">
                   <a href="#" ><img src="Whonion.webp" width="75px"></a>
                    <p> Fresh White Onion   <br> <span class="price">47 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="redonion.webp" width="75px"></a>
                    <p> Fresh red Onion   <br> <span class="price">43 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="zucchini.webp" width="75px"></a>
                    <p> Fresh zucchini    <br> <span class="price">65 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
                 <td width="15%">
                   <a href="#" ><img src="Carrots.webp" width="75px"></a>
                    <p> Fresh Carrots    <br> <span class="price">45 EGP per 1KG</span></p>
    <img src="addtocart.png" width="35px">
</a>
                </td>
            </tr>
        </table>


    </div>
            <?php require_once('./layout/footer.php'); ?>

</body>
</html>