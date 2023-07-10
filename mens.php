<?php
	include('Admin/config/connection.php');
	$sql="select * from product_add";
	$result=mysqli_query($conn,$sql)or die("Table Connectivity failed");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men</title>
    <link rel="stylesheet" href="all page filter page/allstyle.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="Mens_CSS/mens.css" />
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="Mens_CSS/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section id="header">
        <div class="navigation">
          <div style="display: flex; width: 693px; height: 60px;" >
            <a href="#"><img src="Images/logo.png" class="logo"  width="125" style="margin-top: 4px;"></a>
            <ul id="navbar">
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="shop.html">Shop</a></li>
              <li><a href="About us/aboutus.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
    
              <div class="dropdown">
                <li><a href="#">Studio <sup style="color: #e02a2d; font-size: 14px;">New</sup></a></li>
    
                <div class="dropdown-content" style="width: 500px; min-height: 400px; top: 22px;;">
    
                  <div class="box1" style="text-align: center;">
                    <img src="Images/st.png" width="150px">
                    <p>Your daily inspiration for everything fashion</p>
                  </div>
                  <div class="box2">
                    <img src="Images/st1.png" alt="" width="100%" height="100%">
                  </div>
                  <div class="box3">
                    <button class="explore-btn">EXPLORE STUDIO > </button>
                  </div>
    
                </div>
              </div>
            </ul>
          </div>
    
    
          <div style="display: flex;">
    
            <!-- <div style="display: flex;"> -->
              <i class="fa fa-search"></i>
              <input type="text" class="header-input" placeholder="Search for products, brands and more">
            <!-- </div> -->
            <ul id="navbar" style="float: right;">
              <div class="dropdown">
                <li><a href="cart.html"><i class="fa fa-solid fa-user dropdown-btn"></i></a></li>
                <div class="dropdown-content" style="width: 240px; position: absolute; left: -80px; top: 25px;">
    
                  <div class="div1">
                    <a href="" style="color: black; font-weight: 600;">Hello User</a>
                    <a href="">8107122911</a>
                  </div>
                  <div class="div2">
                    <a href="">Orders</a>
                    <a href="">Wishlist</a>
                    <a href="">Gift Cards</a>
                    <a href="">Contact Us</a>
                    <a href="">QuickBuy Insider <button class="new-btn">New</button></a>
                  </div>
                  <div class="div3">
                    <a href="">QuickBuy Credit</a>
                    <a href="">Coupons</a>
                    <a href="">Saved Cards</a>
                    <a href="">Saved VPA</a>
                    <a href="">Saved Addresses</a>
                  </div>
                  <div class="div4">
                    <a href="">Edit Profile</a>
                    <a href="">Logout</a>
                  </div>
                </div>
              </div>
              <li><a href="cart/cart.html"><i class="fa fa-bag-shopping"></i></a></li>
              <li><a href="wishlist2/wish.html"><i class="fa-solid fa-heart"></i></a></li>
    
            </ul>
          </div>
        </div>
      </section>
    
      <section id="header2">
    
        <div class="navbar2">
          <div class="navbar2img"><a href="fashion.html"><img src="Images/h2.jpg"><br><a href="#"
                style="padding-left: 20px;">Fashion</a></div>
          <div class="navbar2img"><a href="Mobile/mobile.html"><img src="Images/h4.jpg"><br><a href="#"
                style="padding-left: 20px;">Mobiles</a></div>
          <div class="navbar2img"><a href="electronics.html"><img src="Images/h6.jpg"><br><a href="#"
                style="padding-left: 10px;">Electronics</a></div>
          <div class="navbar2img"><a href="beauty.html"><img src="Images/h5.png"><br><a href="#"
                style="padding-left: 22px;">Beauty</a></div>
          <div class="navbar2img"><a href="furniture/furniture.html"><img src="Images/h3.jpg"><br><a href="#"
                style="padding-left: 20px;">Furniture</a></div>
        </div>
    
      </section>



    <div class="product-name">
        <div>
            <p>Men - <span>17885 items</span></p>
        </div>
    </div>
    <div id="wrapper">
        <div id="filter">
            <div class="a">
                <h3>FILTERS </h3>
                <div>
                    <input type="radio" id="sagar" name="group">
                    <label for="sagar">Men</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">Women</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">Boys</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">Girls</label>
                </div>

            </div>
            <div class="b">
                <h3>CATEGORIES</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Tshirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Shirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Casual Shoes</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Sweatshirts</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Jackets</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Trousers</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Slippers</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Flip Flops</label>
                </div>

            </div>
            <div class="b">
                <h3>BRAND</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">U.S. Polo Assn.</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Roadster</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">KLOTTHE</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Mast & Harbour</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Puma</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">WROGN</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">HRX by Hrithik Roshan</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Flying Machine</label>
                </div>

            </div>
            <div class="b">
                <h3>PRICE</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs 499 to Rs 1349</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs. 1349 to Rs. 2199</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs. 2199 to Rs. 3049</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Rs. 3049 to Rs. 3899</label><br>
                </div>

            </div>
            <div class="b">
                <h3>COLOR</h3>
                <div>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Blue</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Navy Blue</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Black</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">White</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Grey</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Red</label><br>
                    <input type="checkbox" id="cb" name="group">
                    <label for="cb">Green</label><br>
                </div>

            </div>
            <div class="c">
                <h3>DISCOUNT RANGE</h3>
                <div>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">10% and above</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">20% and above</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">30% and aboves</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">40% and above</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">50% and above</label><br>
                    <input type="radio" id="rb" name="group">
                    <label for="rb">60% and above</label><br>


                </div>

            </div>
        </div>
        <!-- product -->

        <div class="product">
        <?php
	while( $row=mysqli_fetch_assoc($result))
	{
		?>

            <div class="product-box">
                
                <img src="Admin/Pimages/<?php echo $row['image'] ?>" alt="">
                <div class="flex pro-details">
                    <h2><?php echo $row['pname'] ?></h2>
                    <p class="pro-title">
                        <?php echo $row['pdetail'] ?>
                    </p>
                        <!-- Outdoor Men Solid Sweatshirts -->
                    <p class="pro-price">₹<?php echo $row['mrp'] - (int)(($row['mrp'] * $row['flatdiscount'])/100);?>
                     <del> ₹<?php echo $row['mrp']?></del>
                     <span><b>(<?php echo $row['flatdiscount'];?>% OFF)</b></span></p>
                </div>
                <div class="rate flex">
                    <p>3.9 <i class="fa-solid fa-star"></i> | 1.5k</p>
                </div>
                <div class="buy-btn">
                        <a href="cart.php?cid=<?php echo $row['sno']; ?>"><button><i class="fa-solid fa-cart-shopping"></i> BUY</button></a>
                </div>

                
            </div>
    <?php } ?>




            


        </div>


    </div>








    <div class="nfoot">
        <div class="in-foot">
    
          <div class="fn1">
            <img src="Images/logo.png" width="140">
            <p style="padding-block: 10px; text-align: left; ">Discover endless shopping possibilities with our user-friendly website, competitive prices, secure payment options, fast shipping, and exceptional customer support. Shop now!</p>
            <a href="#" class="get-started-btn primary-button">Shop Now <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </div>
          <div class="fn2">
            <h4 class="fhead">Contact</h4>
            <p><strong>Office Address: </strong> A-15 Near LIC Office Shastri <br> Nagar, Jodhpur, RAJ</p>
            <p><strong>Phone:</strong> 0291-27765 / (+91) 9253811711</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
              <h4 class="fhead" >Follow Us</h4>
              <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
              </div>
            </div>
          </div>
      
          <div class="fn3">
            <h4 class="fhead">About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
          </div>
      
          <div class="fn4">
            <h4 class="fhead">Navigations</h4>
            <a href="#">Home</a>
            <a href="#">Shop</a>
            <a href="#">Blog</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
      
            <p style="font-weight: bold;">Secured Payment Gateway</p>
            <img src="Images/payment.png" class="pay">
          </div>
      
        </div>
      </div>
    
      <div class="team">
        <div class="tname">
            <p>© 2023 QuickBuy. All Rights Reserved.</p>
            <p>Website Design and Developed By <span 
            style="color: rgb(31, 55, 69);
            font-weight: bold;">WEBTECH TITANS</span></p>
        </div>
      </div>
    
      <script src="https://kit.fontawesome.com/9a63dbdc63.js" crossorigin="anonymous"></script>
      <div class="bell">
        <div class="container bl">
            <i class="fa-regular fa-bell"></i>
        </div>
    </div>


</body>

</html>


<script src="mens.js"></script>