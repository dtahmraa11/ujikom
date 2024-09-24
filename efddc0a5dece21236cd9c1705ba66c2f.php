<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AiraFlorist</title>

    <!--- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
<!-- header section starts -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">AiraFlorist<span>.</span>

        <nav class="navbar">
           <a href="#home">Home</a> 
           <a href="#about">About</a> 
           <a href="#products">Products</a> 
           <a href="#review">Review</a> 
           <a href="#contact">Contact</a> 
        </nav>

        <div class="icons">
            <a href="#products" class="fas fa-heart"></a>
            <a href="<?php echo e(route('shop')); ?>"class="fas fa-shopping-cart"></a>
            <a href="<?php echo e(route('login')); ?>" class="fas fa-user"></a>
        </div>

</header>

<!-- header section ends-->

<!-- home section starts -->

<section class="home" id="home">

    <div class="content">
        <h3>Aira Florist</h3>
        <span class="tagline">Moonlight Blooms</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis repudiandae velit commodi eius animi temporibus veritatis voluptate non consequatur ratione.</p>
        <a href="<?php echo e(route('shop')); ?>" class="btn">Shop Now</a>
    </div>    

</section>

<!-- home  section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="img-container">
            <img src="<?php echo e(asset('asset/images/bunga2.jpeg')); ?>" alt="Flower Image">
            <h3>Best Flower Sellers</h3>
        </div>        

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsa at aliquid, odio vitae soluta delectus quas mollitia ea nostrum maiores sit ipsam placeat modi consectetur voluptatibus minima dolorem deleniti.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste vero molestiae ducimus quae at nesciunt minus nulla ut voluptates. Reiciendis?</p>
            <a href="<?php echo e(route('about')); ?>" class="btn">Learn More</a>
        </div>

    </div>

</section>

<!--about section ends -->

<!-- icons section starts -->

<section class="icons-container">

    <div class="icons">
        <img src="<?php echo e(asset('asset/images/freedelivery.png')); ?>" alt="Flower Image">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all order</span>
        </div>
    </div>

    <div class="icons">
        <img src="<?php echo e(asset('asset/images/money.png')); ?>" alt="Flower Image">
        <div class="info">
            <h3>10 days return</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="<?php echo e(asset('asset/images/gifts.png')); ?>" alt="Flower Image">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all order</span>
        </div>
    </div>

    <div class="icons">
        <img src="<?php echo e(asset('asset/images/payment.png')); ?>" alt="Flower Image">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypa</span>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- products section starts -->

<section class="products" id="products">

    <h1 class="heading"><span class="pink-text">latest</span> products</h1>

    <div class="box-container">

       <div class="box">
            <span class="discount">-10%</span>
            <div class="images">
                <img src="<?php echo e(asset('asset/images/ballon1.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
                <div class="icons">
                    <a href="#" class="fas- fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>fresh with ballon</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
       </div>
    </div>

       <div class="box">
        <span class="discount">-15%</span>
        <div class="images">
            <img src="<?php echo e(asset('asset/images/ballon2.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
            <div class="icons">
                <a href="#" class="fas- fa-heart"></a>
                <a href="#" class="cart-btn">add to cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>
        </div>
        <div class="content">
            <h3>fresh with ballon</h3>
            <div class="price"> $12.99 <span>$15.99</span> </div>
   </div>
</div>

    <div class="box">
            <span class="discount">-5%</span>
            <div class="images">
                <img src="<?php echo e(asset('asset/images/ballon3.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
                <div class="icons">
                    <a href="#" class="fas- fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>fresh with ballon</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
       </div>
    </div>

    <div class="box">
        <span class="discount">-20%</span>
        <div class="images">
            <img src="<?php echo e(asset('asset/images/gift4.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
            <div class="icons">
                <a href="#" class="fas- fa-heart"></a>
                <a href="#" class="cart-btn">add to cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>
        </div>
        <div class="content">
            <h3>gift flower box</h3>
            <div class="price"> $12.99 <span>$15.99</span> </div>
   </div>
</div>

 <div class="box">
            <span class="discount">-17%</span>
            <div class="images">
                <img src="<?php echo e(asset('asset/images/gift2.jpeg')); ?>" style="width: 220px" alt="">
                <div class="icons">
                    <a href="#" class="fas- fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>gift flower box</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
       </div>
    </div>

    <div class="box">
        <span class="discount">-3%</span>
        <div class="images">
            <img src="<?php echo e(asset('asset/images/gift3.jpeg')); ?>" style="width: 220px" alt="">
            <div class="icons">
                <a href="#" class="fas- fa-heart"></a>
                <a href="#" class="cart-btn">add to cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>
        </div>
        <div class="content">
            <h3>gift flower box</h3>
            <div class="price"> $12.99 <span>$15.99</span> </div>
   </div>
</div>

         <div class="box">
            <span class="discount">-18%</span>
            <div class="images">
                <img src="<?php echo e(asset('asset/images/rose2.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
                <div class="icons">
                    <a href="#" class="fas- fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>rose bouquet</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
       </div>
    </div>

    <div class="box">
        <span class="discount">-18%</span>
        <div class="images">
            <img src="<?php echo e(asset('asset/images/rose3.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
            <div class="icons">
                <a href="#" class="fas- fa-heart"></a>
                <a href="#" class="cart-btn">add to cart</a>
                <a href="#" class="fas fa-share"></a>
            </div>
        </div>
        <div class="content">
            <h3>rose bouquet</h3>
            <div class="price"> $12.99 <span>$15.99</span> </div>
   </div>
</div>

 <div class="box">
            <div class="col-3"></div>
            <span class="discount">-5%</span>
            <div class="images">
                <img src="<?php echo e(asset('asset/images/rose4.jpeg')); ?>" style="width: 220px" alt="Ballon Image">
                <div class="icons">
                    <a href="#" class="fas- fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>rose bouquet</h3>
                <div class="price"> $12.99 <span>$15.99</span> </div>
       </div>
    </div>

    </div>

</section>

<!-- products section ends -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="Name" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Number Telephone" class="box">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea> 
            <button type="submit" class="btn btn-primary">Send Message</button> 
        </form>

        <div class="images">
            <img src="<?php echo e(asset('asset/images/cebu.jpeg')); ?>" style="width: 380px;" alt="Gambar Cebu">
        </div>
        
    </div>

</section>

<!-- contact section ends -->



<!-- review section starts -->

<section class="review" id="review">
    <h1 class="heading">Customer's <span>Review</span></h1>

    <div class="box-container">
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et corrupti mollitia maiores odit, fuga maxime. Mollitia consequatur vel dolor consequuntur.</p>
            <div class="user">
                <img src="<?php echo e(asset('asset/images/cowo.jpeg')); ?>" alt="User Photo">
                <div class="user-info">
                    <h3>Muhammad Simon Saputra</h3>
                    <span>Happy Customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et corrupti mollitia maiores odit, fuga maxime. Mollitia consequatur vel dolor consequuntur.</p>
            <div class="user">
                <img src="<?php echo e(asset('asset/images/cewe.jpeg')); ?>" alt="User Photo">
                <div class="user-info">
                    <h3>Jane Doe</h3>
                    <span>Happy Customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et corrupti mollitia maiores odit, fuga maxime. Mollitia consequatur vel dolor consequuntur.</p>
            <div class="user">
                <img src="<?php echo e(asset('asset/images/bando.jpeg')); ?>" alt="User Photo">
                <div class="user-info">
                    <h3>Alex Smith</h3>
                    <span>Happy Customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
    </div>
</section>


<section class="footer mt-5 py-5">
 
    
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Products</a>
            <a href="#">Review</a>
            <a href="#">Contact</a>
        </div>
    
        <div class="box">
            <h3>Next Links</h3>
            <a href="#">My Account</a>
            <a href="#">My Order</a>
            <a href="#">My Favorite</a>
        </div>
    
        <div class="box">
            <h3>Locations</h3>
            <a href="#">Garut</a>
            <a href="#">Bandung</a>
            <a href="#">Cimahi</a>
            <a href="#">Bogor</a>
        </div>
    
        <div class="box">
            <h3>Contact Info</h3>
            <a href="#">+62-895-2118-6116</a>
            <a href="#">florist@gmail.com</a>
            <a href="#">Kab.Garut, Jawa Barat - 400104</a>
            <img src="<?php echo e(asset('asset/images/cart.jpeg')); ?>" style="width: 50px" alt="Cart Image">
        </div>    
  
    

    </section>
    <div class="row">
        <div class="credit">
            Created by <span>Dita Humaira Putri</span> | All rights reserved
        </div>
    </div>


    <?php /**PATH C:\xampp1\htdocs\MoonlightBlooms\resources\views/home.blade.php ENDPATH**/ ?>