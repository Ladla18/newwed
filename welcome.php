<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PWedding Karo</title>
    <link rel="stylesheet" href="All CSS/mainstyle.css">
    <style>
     .bg-dark{
        background-color:#d30b6f!important;
     }
     .navbar{
        padding:2.0rem 1rem;
     }
     *{
        font-size:18px;
     }
     .h3, h3{
        color:white;
        font-size:2.5rem;
        

     }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#vendor">Vendor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Hi ". $_SESSION['username']?>! Welcome To Our Website</h3>
<hr>

</div>

<!-- header section starts  -->



<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <span>WeddingKaro.com</span>
      <h3>
we make every moment special!</h3>
        
    </div>

</section>

<!-- home section ends -->

<section class="step-container">

    <div class="step">
        
        <h3>Engagement</h3>
        <p>Get the outfits and wearables for the engagements.</p>
       
    </div>

  
    <div class="step">
        
        <h3>Wedding Ceremony</h3>
        <p>Get The wedding outfits for the Groom and Bride.</p>
        
    </div>

</section>

<!-- vendor section starts  -->

<section class="vendor" id="vendor">

    <div class="heading">
        <h1>top wedding vendors</h1>
        <img src="https://i.ibb.co/XZMt8zr/header-img.png" alt="">
    </div>

    <div class="box-container">

        <div class="box">
            <img src="https://i.ibb.co/zfh9STs/img1.jpg" alt="">
            <div class="info">
                <h3>Dressing</h3>
                <p>Get The Products For Dressing</p>
                <a href="All Pages\PageAfterDressing.html" class="btn">Load Products</a>
            </div>
        </div>

        <div class="box">
            <img src="https://i.ibb.co/wSK7xNd/img2.jpg" alt="">
            <div class="info">
                <h3>Florist</h3>
                <p>Get the flowers Needed in wedding.</p>
                <a href="All Pages\FlowersPage.html" class="btn">load items</a>
            </div>
        </div>

        <div class="box">
            <img src="https://i.ibb.co/RbFwtbc/img3.jpg" alt="">
            <div class="info">
                <h3>wedding cake</h3>
                <p>The most important Wedding cake.</p>
                <a href="All Pages\CakePage.html" class="btn">Get Here</a>
            </div>
        </div>

        <div class="box">
            <img src="https://i.ibb.co/5RJk6XB/img4.jpg" alt="">
            <div class="info">
                <h3>Venu and Hall</h3>
                <p>Get Loads of venu and hall from our side.</p>
                <a href="#" class="btn">Book Here</a>
            </div>
        </div>

        <div class="box">
            <img src="https://i.ibb.co/1ZTcNrm/img5.jpg" alt="">
            <div class="info">
                <h3>Music and Party</h3>
                <p>Enjoy the best Musics and Party arrangement for wedding from our top artist.</p>
                <a href="#" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="https://i.ibb.co/Jd7MnyZ/img6.jpg" alt="">
            <div class="info">
                <h3>photographer</h3>
                <p>Best Photographer also available for you.</p>
                <a href="#" class="btn">Hire now</a>
            </div>
        </div>

    </div>

</section>

<!-- vendor section ends -->



<!-- team section starts  -->

<section class="team" id="team">

    <div class="heading">
        <h1>our creative team</h1>
        <img src="C:\Users\amanu\Downloads\wedding website\wedding website\images/header-img.png" alt="">
    </div>

    <div class="box-container">

        <div class="box">
            <img src="https://i.ibb.co/ncQNCrC/aman.jpg" alt="">
            <h3 style="background-color:Tomato;">Amanullah Ansari</h3>
           
            <p style="color:MediumSeaGreen;">Contact Us</p>
            <div class="share">
                <a href="https://www.instagram.com/amaan_ans__/" class="fab fa-facebook-f"></a>
             
                <a href="https://www.instagram.com/amaan_ans__/" class="fab fa-instagram"></a>
                
            </div>
        </div>
        <div class="box">
            <img src="https://i.ibb.co/R2RVt5R/shrejal.jpg" alt="">
            <h3 style="background-color:Tomato;">Shrejal Singh</h3>
          
            <p style="color:MediumSeaGreen;">Contact US</p>
            <div class="share">
                <a href="https://www.instagram.com/_sassy_shrej__/" class="fab fa-facebook-f"></a>
               
                <a href="https://www.instagram.com/_sassy_shrej__/" class="fab fa-instagram"></a>
            
            </div>
        </div>
        
    </div>

</section>

<!-- team section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="heading">
        <h1>Enquiry</h1>
        <img src="C:\Users\amanu\Downloads\wedding website\wedding website\images/header-img.png" alt="">
    </div>

<form action="https://formspree.io/f/xnqrlrgv" method="POST">
        <div class="inputBox">
            <input type="text" name="your name" placeholder="name">
            <input type="email" name="your email" placeholder="Email">
        </div>
        <div class="inputBox">
            <input type="number" name="your number" placeholder="Number">
            <input type="text" name="your address" placeholder="Address">
        </div>
        <textarea name="say something" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->



<!-- footer section  -->

<div class="footer"> created by <span>Mr.Amanullah</span> | all rights reserved! </div>

























<script> 

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
