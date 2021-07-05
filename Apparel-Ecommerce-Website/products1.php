<?php
session_start();
include('db.php');
$status="";
$cart_count=0;
if (isset($_POST['code']) && $_POST['code']!=""){
    $code = $_POST['code'];
    $result = mysqli_query($con,"SELECT * FROM `products1` WHERE `code`='$code'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $price = $row['price'];
    $image = $row['image'];

    $cartArray = array(
       $code=>array(
           'name'=>$name,
           'code'=>$code,
           'price'=>$price,
           'quantity'=>1,
           'image'=>$image)
   );

    if(empty($_SESSION["shopping_cart"])) {
       $_SESSION["shopping_cart"] = $cartArray;
       $status = "<div class='box'>Product is added to your cart!</div>";
   }else{
       $array_keys = array_keys($_SESSION["shopping_cart"]);
       if(in_array($code,$array_keys)) {
          $status = "<div class='box' style='color:red;'>
          Product is already added to your cart!</div>";	
      } else {
       $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
       $status = "<div class='box'>Product is added to your cart!</div>";
   }

}
}
?>


<html>
<head>
    <title>Apparel-Products</title>
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
                    <a href="cart1.php"><img src="cart-icon.png" />Cart<span></a> 
                    </div>

                    <img src="ecommerce/images/menu.png" class="menu-icon" onclick="menutoggle()">
                    
                </div>
            </div>
        </div>
        
        <div class="container1">
           
            <h2 class="title"> All Products</h2>   

            <div class="message_box" >
                <?php echo $status; ?>
            </div>

            <div class="container3"> 

                <?php
                if(!empty($_SESSION["shopping_cart"])) {
                    $cart_count = count(array_keys($_SESSION["shopping_cart"]));


                    ?>

                    <div class="container3">  
                        <?php
                    }


                    $result = mysqli_query($con,"SELECT * FROM `products1`");
                    while($row = mysqli_fetch_assoc($result)){
                      echo "<div class='col-5'>
                      <form method='post' action=''>
                      <input type='hidden' name='code' value=".$row['code']." />
                      <div class='image' id='center'><img src='".$row['image']."' /></div>
                      <div class='name'>".$row['name']."</div>
                      <div class='price'>"."Rs.".$row['price']."</div>
                      <button 'buy' >Add to cart </button>
                      </form>
                      </div>";
                  }
                  mysqli_close($con);
                  ?>

                  <!-- </div> -->
                  <div style="clear:both;"></div>

                  <br /><br />
              </div>

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


            <!--------Footer---------->

            <div class="footer" >

                <div class="container1">
                    <div class="row3">
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