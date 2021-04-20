<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Css link-->
    <link rel="stylesheet" href="style.css">
    <!--Font-awsome  link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- jQuery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></scrip>
    <link rel="shtylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">

    <script src="script.js"></script>
    <title>Event planner</title>
    <style type="text/css">
      *{
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}

.banner{
    width:100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(../img/banner.jpg);
    background-size: cover;
    background-position:center;
}
.banner .content{
    max-width: 900px;
    text-align: center;
    position: relative;
}
.banner .content h2{
    font-size: 55px;
    color: aliceblue;
}
.banner .content h2:hover{
    color: #009688;
}
.banner .content p{
    font-weight: 400;
    line-height: 25px;
    color: aliceblue;
    margin-top: 10px;
}
.banner .content p:hover{
    color: #009688;
    letter-spacing: 2px;
    font-weight: 400;
}
#mybtn{
    text-decoration: none;
    color: aliceblue;
    padding: 10px 30px;
    border-radius: 25px;
    background: transparent;
    border: 2px solid #009688;
    position: absolute;
    top:110%;
    right: 40%;
}
#mybtn:hover{
    background-color: #009688;
    animation: pulse 1s 2;
}

/* header part ................................................... */
.navigation{
    position: fixed;
    top:0;
    left: 0;
    width: 100%;
    padding: 40px 100px;
    z-index: 10000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition:0.5s;
}
.navigation.sticky{
    background: #fff;
    padding: 10px 100px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}
.logo{
    color: aliceblue;
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
}
.navigation.sticky .logo{
    color: #111;
}
.logo span{
    color: #009688;
}
.logo:hover{
    text-decoration: none;
    color: aliceblue;
}
.navigation li{
    position: relative;
    display: inline-block;
    margin-left: 30px;
    list-style: none;
    margin-right: 20px;
    text-transform: uppercase;
}
.navigation li a{
    text-decoration: none;
    color: aliceblue;
    font-weight: 700;
}
.menuToggle{
    display: none;
}
.navigation ul li::after{
    content: '';
    height: 3px;
    width:0;
    background:#009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navigation ul li:hover::after{
    width: 100%;
}
.navigation.sticky li a{
    color: #111;
}
.navigation.sticky li a:hover{
    color: #009688;
}

/* about................................................................. */
.container h2{
    font-size: 45px;
    font-weight: 1000;
}
.container h2:hover{
    color: #009688;
}
.container p{
    font-size: 25px;
    margin-top: 20px;
    margin-left: 7px;
}
.container button{
    margin-top: 20px;
    padding: 20px;
    padding-right: 45px;
    background-color: #009688;
    color: #222;
    border: none;
    border-radius: 20px;
    font-weight: 700;
    margin-left: 90px;
    position: relative;
    cursor: pointer;
}
    
.container button i{
    position:absolute;
    font-size: 25px;
    font-weight: 500;
    margin-left: 10px;
}
.container button:hover{
    animation: pulse 1s 2;
}

.partner {
    margin-top: 35px;
    position: relative;
}
.partner h3{
    position: absolute;
    left: 35%;
    font-size: 40px;
    font-weight: 700;
}
.partner h3 span{
    color: #009688;
    font-weight:1000px ;
    font-size:50px;
}
.partner h3:hover{
    border-bottom: 2px solid darkcyan;
    cursor: pointer;
}
.partner img{
    margin-top: 65px;
    margin-left: 55px;
}
.partner img:hover{
    animation: heartBeat 1s;
}
/* services...................................................................... */
.services{
    margin-top:80px;
}
.text{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100px;
    margin-left: -20px;
}
.text h3{
    font-size: 45px;
    font-weight: 800;
    position: relative;
}
.text span{
    color: #009688;
    font-weight: 1000;
    font-size: 50px;
}
.text h3::before{
  content: '';
  display: block;
  width: 90px;
  height: 1px;
  background: #555;
  position:absolute;
  left:-35%;
  top: 58%;
  z-index: -2;
}
.text h3::after{
    content: '';
    display: block;
    width: 90px;
    height: 1px;
    background: #555;
    position:absolute;
    right:-35%;
    top: 58%;
    z-index: -2;
}
.text2{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -20px;
    height: 70px;
}
.text2 p{
    font-size: 15px;
    margin-top: -10px;
}
.content2{
    display: flex;
    justify-content: center;
    flex-direction:row-reverse;
    flex-wrap:wrap;
    margin-top: 20px;
}
.content2 .box{
    width: 340px;
    margin: 20px;
    border: 15px solid #fff;
    box-shadow: 0 15px 35px rgba(0,0,0,0.8);
}
.content2 .box .imgBx{
    position: relative;
    width: 100%;
    height:350px
}
.content2 .box .imgBx img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.content2 .box .text3{
    padding: 15px 0 5px;
}
.content2 .box .text3 h3{
   font-weight: 700;
   color: #009688;
}

/* gallery part.......................................................... */

.gallery-section{
    width: 100%;
    padding: 60px 0;
    margin-top: 100px;
}

.inner-width{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}
.gallery-section h2{
    text-align: center;
    font-size: 30px;
    font-weight: 700;
}
.gallery-section h2 span{
    font-size:35px;
    color: #009688;
}
.border{
    width: 180px;
    height: 4px;
    background: #009688;
    margin: 60px auto;
}
.gallery-section .gallery{
    display: flex;
    flex-wrap: wrap-reverse;
    justify-content: center;
}

.gallery-section .image{
    flex: 25%;
    overflow: hidden;
    cursor: pointer;
}
.gallery-section .image img{
    width: 100%;
    height: 100%;
    transition: 0.4s;
}
.gallery-section .image:hover img{
    transform: scale(1.2) rotate(10deg);
    border-radius: 10px;
}

@media screen and (max-width:960px){
    .gallery-section .image{
        flex: 33.33%;
    }
}
@media screen and (max-width:768px){
    .gallery-section .image{
        flex: 50%;
    }
}
@media screen and (max-width:480px){
    .gallery-section .image{
        flex: 90%;
    }
    .banner{
        width: 110%;
        margin: 0;
    }
    .navigation.sticky{
        padding-top: 20px;
        margin-top: 10px;
    }
    .menuToggle{
        margin-right: 20px;
    }
    .partner h3{
        left: 20%;
    }
    .container button{
        margin-left: 20px;
        padding: 30px;
        padding-left: 12px;
    }
    .text h3{
        font-size: 35px;
    }
    .text h3::before{
        content: '';
        display: block;
        width: 50px;
        height: 1px;
        background: #555;
        position:absolute;
        left:-25%;
        top: 58%;
        z-index: -2;
    }
    .text h3::after{
        content: '';
        display: block;
        width: 70px;
        height: 1px;
        background: #555;
        position:absolute;
        right:-35%;
        top: 58%;
        z-index: -2;
    }
}


/* header mediaQuery */
@media (max-width: 991px)
{
    .navigation ,
    .navigation.sticky
    {
        padding: 20px 20px;
    }
    header .b{
        display: none;
    }
    header .b.active{
        width: 100%;
        height: calc( 100% - 60px);
        position: fixed;
        top: 68px;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background:bisque ;
    }
    .navigation li{
        margin: 0;
        margin-top: 30px;
    }
     header .navigation li a{
        text-decoration: none;
        color: #111;
        font-size: 50px;
        font-weight: 700;
        margin-top: 30px;
        padding: 30px;
    }
    .menuToggle{
        position: relative;
        width: 40px;
        height: 40px;
        background-size: 30px;
        font-size: 30px;
        color: #009688;
        cursor: pointer;
        display: block;
    }
    header.sticky .menuToggle{
        filter: invert(1);
    }
    section{
        padding: 20px;
    }
    .banner .content h2{
        font-size: 3em;
    }
}
    </style>
</head>

<body>
  <!-- header part................................................................... -->
   
<?php include 'header.php'; ?>

    <section class="banner" id="banner">
        <div class="content">
            <h2>LET US HELP YOU ARRANGE<br>YOUR BIG EVENT!</h2>
            <p>Find event planner & consultant for your special occasion</p>
            <a href="#service" id="mybtn"> LEARN MORE</a>
        </div>
    </section>

    <!-- about .................................................................................-->
    <section class="about" id="about"><br><br>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 mt-5">
              <h2>Almost two<br>
                decades of event<br> planner expertise</h2>
              <p>Since 2002, The Events Company are<br> proud to have had the opportunity to <br>work with large
                corporations,<br> established businesses, charities,<br> individuals and growing micro<br> ventures of all
                shapes and sizes.</p>
            </div>
            <div class="col-sm-6 mt-5">
              <h2>Corporate<br> Events Management</h2>
              <p>We are a collection of visionaries,<br> strategists, planners and creators,<br> brought together to
                offer<br>
                extraordinary events.</p>
              <button type="button">BUILD YOUR EVENT TODAY<i class="fal fa-long-arrow-right"></i></button>
            </div>
          </div>
          <div class="partner">
            <h3>Our<span>P</span>artner </h3>
            <br><br>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="../img/partner1.png">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="../img/partner2.png">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <img src="../img/partner3.png">
              </div>
            </div>
          </div>
        </div>
      </section>
    <br>
      <!-- Services ................................................................................-->
      <section class="services" id="service"><br><br>
        <div class="container">
          <div class="text">
            <h3>Our<span>S</span>ervices</h3>
          </div>
          <br>
          <div class="text2">
            <p>- It has survived not only five centuries, but also the leap into electronic typesetting, remaining
              essentially unchanged.
            </p>
          </div>
          <div class="content2">
            <div class="box" data-aos="fade-left">
              <div class="imgBx">
                <img src="../img/box-1.jpg">
              </div>
              <div class="text3">
                <h3>Caterers</h3>
              </div>
            </div>
            <div class="box" data-aos="fade-right">
              <div class="imgBx">
                <img src="../img/box-2.jpg">
              </div>
              <div class="text3">
                <h3>Decor</h3>
              </div>
            </div>
            <div class="box" data-aos="fade-left">
              <div class="imgBx">
                <img src="../img/box-3.jpg">
              </div>
              <div class="text3">
                <h3>DJ</h3>
              </div>
            </div>
            <div class="box" data-aos="fade-right">
              <div class="imgBx">
                <img src="../img/box-4.jpg">
              </div>
              <div class="text3">
                <h3>Photographer</h3>
              </div>
            </div>
            <div class="box" data-aos="fade-left">
              <div class="imgBx">
                <img src="../img/box-5.jpg">
              </div>
              <div class="text3">
                <h3>Cake Service</h3>
              </div>
            </div>
            <div class="box" data-aos="fade-right">
              <div class="imgBx">
                <img src="../img/box-6.jpg">
              </div>
              <div class="text3">
                <h3>venue</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Gallery part........................................................................ -->

      <div class="gallery-section" id="gallery">
        <div class="inner-width">
          <h2>Events<span>PHOTO</span>gallery</h2>
          <div class="border"></div>
          <div class="gallery">

            <a href="../img/g-1.jpg" class="image">
              <img src="../img/g-1.jpg">
            </a>

            <a href="../img/g-2.jpg" class="image">
              <img src="../img/g-2.jpg">
            </a>

            <a href="../img/g-3.jpg" class="image">
              <img src="../img/g-3.jpg">
            </a>

            <a href="../img/g-4.jpg" class="image">
              <img src="../img/g-4.jpg">
            </a>

            <a href="../img/g-5.jpg" class="image">
              <img src="../img/g-5.jpg">
            </a>

            <a href="../img/g-6.jpg" class="image">
              <img src="../img/g-6.jpg">
            </a>
          </div>
        </div>
      </div>
    

    <!-- Optional link -->
    <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></scrip>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- aos link -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 300,
        duration: 1000,
    });
  </script>
</body>