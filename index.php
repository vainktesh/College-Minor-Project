<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cookbook_Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>

<a href="#" class="logo"><i class="fas fa-utensils"></i>cookbook</a>

<nav class="navbar">
    <a class="active" href="#home">home</a>
    <a href="#dishes">dishes</a>
    <a href="#about">about</a>
    <a href="#menu">menu</a>
    <a href="#review">review</a>
    <a href="#order">order</a>
</nav>

<div class="icons">
    <i class="fas fa-bars" id="menu-bars"></i>
    <i class="fas fa-search" id="search-icon"></i>
    <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
    <a href="logout.php" class="fa fa-sign-out" style="font-size:24px"></a>
    
    
</div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
<input type="search" placeholder="search here..." name="" id="search-box">
<label for="search-box" class="fas fa-search"></label>
<i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

<div class="swiper-container home-slider">

    <div class="swiper-wrapper wrapper">

        <div class="swiper-slide slide">
            <div class="content">
                <span>our special dish</span>
                <h3>spicy noodles</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="image">
                <img src="images/home-img-1.png" alt="">
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="content">
                <span>our special dish</span>
                <h3>fried chicken</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="image">
                <img src="images/home-img-2.png" alt="">
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="content">
                <span>our special dish</span>
                <h3>hot pizza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="image">
                <img src="images/home-img-3.png" alt="">
            </div>
        </div>

    </div>

    <div class="swiper-pagination"></div>

</div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

<h3 class="sub-heading"> our dishes </h3>
<h1 class="heading"> popular dishes </h1>

<div class="box-container">

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/dish-1.png" alt="">
        <h3>Burger</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>₹150.00</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/dish-2.png" alt="">
        <h3>Chicken Nugget</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>₹80.00</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/dish-3.png" alt="">
        <h3>Roast chicken</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>₹60.00</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/dish-4.png" alt="">
        <h3>Pizza</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>₹40.00</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/dish-5.png" alt="">
        <h3>Fudge coockie</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>₹90.00</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/dish-6.png" alt="">
        <h3>Fried Chicken</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>₹60.00</span>
        <a href="#" class="btn">add to cart</a>
    </div>

</div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h3 class="sub-heading"> about us </h3>
<h1 class="heading"> why choose us? </h1>

<div class="row">

    <div class="image">
        <img src="images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>best food in the country</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-shipping-fast"></i>
                <span>free delivery</span>
            </div>
            <div class="icons">
                <i class="fas fa-dollar-sign"></i>
                <span>easy payments</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 service</span>
            </div>
        </div>
        <a href="#" class="btn">learn more</a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

<h3 class="sub-heading"> our menu </h3>
<h1 class="heading"> today's speciality </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/menu-1.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hawaiian Pizza</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹120.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-2.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Cheese bhurger</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹110.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-3.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Palatschinke</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹100.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-4.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Waffle</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹100.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-5.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Pancake</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹150.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-6.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Muffin</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹140.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-7.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Orange juice</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹190.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-8..jpeg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Litti chokha</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹170.00</span>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/menu-9.jpg" alt="">
            <a href="#" class="fas fa-heart"></a>
        </div>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Orange juice</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi, accusantium.</p>
            <a href="#" class="btn">add to cart</a>
            <span class="price">₹130.00</span>
        </div>
    </div>

</div>

</section>

<!-- menu section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h3 class="sub-heading"> customer's review </h3>
<h1 class="heading"> what they say </h1>

<div class="swiper-container review-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/danish.jpeg" alt="">
                <div class="user-info">
                    <h3>Danish Khan</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>food delivery within minutes..in Amravati city & in trains.
                Restaurant with seating capacity of 75+
                Food delivery is free above 100/-.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/sonu.jpeg" alt="">
                <div class="user-info">
                    <h3>Sonu Kumer</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Very nice place, friendly staff, superb constantly best quality of food which is served hot and hygienically. Serving and packaging is just wow. Cost effective with huge variety of menu to offer.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/hero.jpeg" alt="">
                <div class="user-info">
                    <h3>Anurag Kumar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>amazing taste, hot and fresh food serving restaurant, reasonable prices and quick service, very impressive food on call Amravati.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/vainktesh.jpg" alt="">
                <div class="user-info">
                    <h3>Vainktesh Dwivedi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>This place provides you with a whole lot of variety and good tastes and that too even at a very good price. overall a very nice place to have lunch.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/hero1.jpg" alt="">
                <div class="user-info">
                    <h3>Shashank</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>This place provides you with a whole lot of variety and good tastes and that too even at a very good price. 
                overall a very nice place to have lunch.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/f.jpg" alt="">
                <div class="user-info">
                    <h3>Sita</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Very bad service.
               Delivery partner and customer support don't know how to give service and also don't have knowledge about the customer and their ordered food.</p>
        </div>

        <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="images/ram.jpeg" alt="">
                <div class="user-info">
                    <h3>Ramsukhdas</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>The Food on call service is good, innovative and fast. Food taste is also good.
                But the food is little bit spicy and oily.
                Need to improve a little.</p>
        </div>

    </div>

</div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h3 class="sub-heading"> order now </h3>
<h1 class="heading"> free and fast </h1>

<form action="">

    <div class="inputBox">
        <div class="input">
            <span>your name</span>
            <input type="text" placeholder="enter your name">
        </div>
        <div class="input">
            <span>your number</span>
            <input type="number" placeholder="enter your number">
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your order</span>
            <input type="text" placeholder="enter food name">
        </div>
      
    </div>
    <div class="inputBox">
        <div class="input">
            <span>how musch</span>
            <input type="number" placeholder="how many orders">
        </div>
        
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your address</span>
            <textarea name="" placeholder="enter your address" id="" cols="20" rows="10"></textarea>
        </div>
       
    </div>

    <input type="submit" value="order now" class="btn">

</form>

</section>

<!-- order section ends -->

<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>locations</h3>
        <a href="#">Pune</a>
        <a href="#">Kolkata</a>
        <a href="#">New Delhi</a>
        <a href="#">Bihar</a>
        <a href="#">Varanasi</a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#">home</a>
        <a href="#">dishes</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">reivew</a>
        <a href="#">order</a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#">8873311644</a>
        <a href="#">9939475520</a>
        <a href="#">vainkteshdwivedi2020@gmail.com</a>
        <a href="#">vainkteshdwivedi007@gmail.com</a>
        <a href="#">Durgakund Varanasi india - 221005</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/vainkteshdwivedi.vainktesh">facebook</a>
        <a href="https://www.instagram.com/vainktesh007/">instagram</a>
        <a href="https://www.linkedin.com/in/vainktesh-kumar-dwivedi-786a50215/">linkedin</a>
    </div>

</div>

<div class="credit"> copyright @ 2023 by <span>mr. vainktesh kumar Dwivedi</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
<img src="images/loader.gif" alt="">
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>




    
    </body>
</html>
