<?php

session_start();
$status="";
$cart_count=0;
if (isset($_POST['action']) && $_POST['action']=="remove"){
    if(!empty($_SESSION["shopping_cart"])) {
       foreach($_SESSION["shopping_cart"] as $key => $value) {
          if($_POST["code"] == $key){
              unset($_SESSION["shopping_cart"][$key]);
              $status = "<div class='box' style='color:red;'>
              Product is removed from your cart!</div>";
          }
          if(empty($_SESSION["shopping_cart"]))
              unset($_SESSION["shopping_cart"]);
      }		
  }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}

}
?>
<html>
<head>
    <title>Apparel - Shopping Cart</title>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>


<body>

    <div class="header">
        <div class="container1">
            <div class="navbar">
                <div class="logo"> 
                    <a href=""><img src='ecommerce/images/logo.png' width="150px" ></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li> <a href="index.php"> Home </a> </li>
                        <li> <a href="products1.php"> Products </a> </li>
                        <li> <a href=""> About</a> </li>
                        <li> <a href=""> Contact </a> </li>
                        
                    </ul>
                </nav>
                <div class="cart_div">
                    <a href="cart1.php"><img src="cart-icon.png" />Cart  </a> 
                </div>

                <img src="ecommerce/images/menu.png" class="menu-icon" onclick="menutoggle()">
                
            </div>
        </div>
    </div>


    <h2 class="title">Shopping Cart</h2> 

    <div class="message_box" style="margin:10px 0px;"> 
        <?php echo $status; ?>
    </div>


    <div style="overflow-x:auto;">

        <div style="margin:50px auto" align="center"  > 


            <?php
            if(!empty($_SESSION["shopping_cart"])) {
                $cart_count = count(array_keys($_SESSION["shopping_cart"]));
                ?>


                <?php
            }
            ?>

            <div class="cart">
                <?php
                if(isset($_SESSION["shopping_cart"])){
                    $total_price = 0;
                    ?>	


                    <table class="table">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>ITEM NAME</td>
                                <td>QUANTITY</td>
                                <td>UNIT PRICE</td>
                                <td>ITEMS TOTAL</td>
                            </tr>	
                            <?php		
                            foreach ($_SESSION["shopping_cart"] as $product){
                                ?>
                                <tr>
                                    <td><img src='<?php echo $product["image"]; ?>' width="15" height="90" /></td>
                                    <td><?php echo $product["name"]; ?><br />
                                        <form method='post' action=''>
                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                            <input type='hidden' name='action' value="remove" />
                                            <button type='submit' class='remove'>Remove Item</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method='post' action=''>
                                            <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                                            <input type='hidden' name='action' value="change" />
                                            <select name='quantity' class='quantity' onchange="this.form.submit()">
                                                <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
                                                <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
                                                <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
                                                <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
                                                <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td><?php echo "Rs.".$product["price"]; ?></td>
                                    <td><?php echo "Rs.".$product["price"]*$product["quantity"]; ?></td>
                                </tr>
                                <?php
                                $total_price += ($product["price"]*$product["quantity"]);
                            }
                            ?>
                            <tr>
                                <td colspan="5" align="right">
                                    <strong>TOTAL: <?php echo "Rs.".$total_price; ?></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>		
                    <?php
                }else{
                   echo "<div class='message_box'> <div class='box' style='color:red;'>
                   Your Cart Is Empty!</div> </div>";
               }
               ?>
           </div>
       </div>

       <div style="clear:both;"></div>


       <br /><br />


       <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle()
        {
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight="200px";
            }
            else
            {
                MenuItems.style.maxHeight="0px";
            }
        }
    </script>
</div>

<div class="container1">
    <div class="footer" >

        
        <div class="row3"  width=100%>
            <div class = "footer-col-1">
                <h3 align="center"> Download Our App</h3>
                <p align="center">Download App for Andriod and iOS</p>
            </div>
            <div class = "footer-col-2">
                <img src="ecommerce/images/logo.png" width="150px"> 
                <br>
                <br>
                <p>Our Purpose Is To Provide Sustainable Goods Of Quality</p>
            </div>
            <div class = "footer-col-3">
                <h3> Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog</li>
                    <li>Return Policy</li>
                    <li>Affiliations</li>
                </ul>
            </div>
            <div class = "footer-col-4">
                <h3> Socials</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Email</li>
                </ul>
            </div>
        </div>
        
        <div class="copyright"> 
            <p>Copyright &copy; Apparel</p>
        </div>
    </div>
</div>

</body>
</html>