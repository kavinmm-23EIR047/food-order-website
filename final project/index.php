
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>eateasily </title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<body>
   <div class="fluid-container">
    <div class="heading">
    <div class="header">

        <section class="flex">
     
           <a href="#" class="logo">Eat Easily</a>
     
           <div class="navbar">
              <a href="#home">home</a>
              <a href="#about">about</a>
              <a href="#dishes">Dishes</a>
              <a href="#reviews">Reviews</a>
              <a href="#order">Order</a>
              <a href="#contact">contact</a>
              <a href="signup.php">sign up</a>
              <a href="login.php">login</a>
           
<div id="menu-btn" class="fas fa-bars"></div>
</div>
</div>
           
     
        </section>
     
    </div>
    </div>
    <section class="home" id="home">
        <div class="row">
     
           <div class="content">
            <h3>Eat <span>Easily</span></h3>
              <a href="#order" class="btn">Order Now</a>
           </div>
     
           <div class="image">
              <img src="home1.png" alt="">
           </div>
     
        </div>
     
     </section>
     <section class="about" id="about">
      <div class="row">
         <div class="content">
            <h3>about <span>us</span></h3>
            <p>This is a food order website in the online platform to order the food and enjoy the 
                food in easily in since 2023 in order platform started in tirupur and the easy to order the food 
                and find tasty food and 100% non bacterial foods and 24/7 daily services and first order is free delvery
                and more cashbacks
            </p>
         </div>
         <div class="image">
            <img src="about.gif" alt="about">
         </div>
      </div>
     </section>

     <section class="dishes" id="dishes">

<h1 class="heading">our <span>dishes</span></h1>

<div class="swiper dishes-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="dish-1.png" alt="">
         <h3>Cheesy burger</h3>
         <p>Rs 100/-</p>
         <a href="#order">Order</a>
      </div>

      <div class="swiper-slide slide">
         <img src="dish-2.png" alt="">
         <h3>Chicken fries</h3>
         <p>Rs 200/-</p>
         <a href="#order">Order</a>
      </div>

      <div class="swiper-slide slide">
         <img src="dish-3.png" alt="">
         <h3>Chicken </h3>
         <p>Rs 90/-</p>
         <a href="#order">Order</a>
      </div>

      <div class="swiper-slide slide">
         <img src="dish-4.png" alt="">
         <h3>Chessy Pizza</h3>
         <p>Rs 150/-</p>
         <a href="#order">Order</a>
      </div>

      <div class="swiper-slide slide">
         <img src="dish-5.png" alt="">
         <h3>Cakes & Cookies</h3>
         <p>Rs 70/-</p>
         <a href="#order">Order</a>
      </div>

      <div class="swiper-slide slide">
         <img src="dish-6.png" alt="">
         <h3>Chicken Legs</h3>
         <p>Rs 100/-</p>
         <a href="#order">Order</a>
      </div>

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>
   
   <section class="reviews" id="reviews">
<div class="row">
      <h1 class="heading"> customer's <span>reviews</span></h1>
               <p>1.This is a very quaility food thanks for delivering eat easily</p>
               <div class="user">
                  <img src="2.png" alt="">
                  <div class="user-info">
                     <h3>sivaramasamy</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
               <p>2.This is a very quaility food  and fast delivery thanks for delivering eat easily</p>
               <div class="user">
                  <img src="2.png" alt="">
                  <div class="user-info">
                     <h3>amirthasinivasan</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>
</div>
            </section>
   <section class="order" id="order">

      <h1 class="heading"><span>order</span> us</h1>
   
      <div class="row">
   
         <div class="image">
            <img src="order.jpg" alt="">
         </div>
         <form name="myform2" action="connect3.php" method="POST">
         
            <span>your name</span>
            <input type="name" required placeholder="enter your full name" maxlength="50" name="name" class="box">
   
            <span>your email</span>
            <input type="email" required placeholder="enter your valid email" maxlength="50" name="email" class="box">
            <span>your number</span>
            <input type="phone" required placeholder="enter your valid number" name="phone" class="box">
            <span>your Address</span>
            <input type="address" required placeholder="door no,area,city,district,pincode,state" maxlength="100" name="address" class="box">
           
         

           
            <span>select dishes</span>
            <select name="dishes" class="box" required>
               <option value="" disabled selected>select the dishes --</option>
               <option value="Chessy Burger">Chessy Burger</option>
               <option value="Cakes & Cookies">Cakes & Cookies</option>
               <option value="Chessy Pizza">Chessy Pizza</option>
               <option value="Chicken fries">Chicken fries</option>
               <option value="Chicken">Chicken</option>
               <option value="Chicken legs">Chicken legs</option>
               
            </select>
            <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
            <span>mode of payment</span>
            <div class="radio">
               <input type="radio" name="payment" value="online pay" id="online pay">
               <label for="online pay">online pay</label>
               <input type="radio" name="payment" value="cash on delivery" id="cash on delivery">
               <label for="cash on delivery">cash on delivery</label>
            </div>
            <input type="submit" value="send message" class="btn" name="send">
         </form>
   
      </div>
   
   </section>
  
   
   <contact class="contact" id="contact">
      
      <div class="fuild-container">
         <h3>contact</h3>
         <p>+144-7878-09090</p>
         <h3>email</h3>
         <p>eat easily@gmail.com</p>

      <section>
   
         <div class="share">
            <a href="#"class="fab fa-twitter"></a> </a>
            <a href="#"class="fab fa-youtube"></a> </a>
            <a href="#" class="fab fa-instagram"></a> </a>
            <a href="#" class="fab fa-whatsapp"></a>
            <a href="#"class="fab fa-facebook"></a> </a>
         </div>
   
         <div class="credit">copyright @ 2023 by <span>,eat easily</span> | all rights reserved!</div>
      </div>
      </section>
   
   </contact>
   
  
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="dishes.js"></script>

</body>
</html>