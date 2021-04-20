<?php

session_start();

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <title>Register</title>
    <style type="text/css">
      body
      {
        font-family: 'Poppins', sans-serif;
        background: #F5F5F5;
      }
       .text_p
{
    color: #2D84FB;
    font-size: 15px;
}
.text_p1
{
    color: #969494;
    font-size: 15px;
}
.head_tex
{
    color: #969494;
    font-size: 13px;
}
.head_tex_p
{
    color: #969494;
    font-size: 18px;
}
@media only screen and (max-width: 1200px) {
.imga
{
  display: none;
}
.btoo
{
    text-align: center;
}
}
    </style>
  </head>
  <body>




<form method="post">
  



<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <div style="background: #fff; border-radius: 10px;">

        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <img src="https://static-2.gumroad.com/res/gumroad-public-storage/variants/pt3170dxpj61yqd0is1ews5xembk/3298c3eb001bbed90f1d616da66708480096a0a1b6e81bd4f8a2d6e9b831d301" style="height: 510px; width: 80%;" class="imga">
            </div>
            <div class="col-xl-4 col-md-6"><br><br>
              
              <h3>Welcome Back</h3>
              <h6 class="head_tex" style="padding-top: 0px;">Welcome to Railway Ticket Booking </h6>

              
              <div class="row">
                <div class="col-md-10 mt-3">
                  <h6 class="head_tex" style="padding-top: 10px;">Email Id</h6>
              <input type="text" name="email" placeholder="Enter Email Id" class="form-control">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-10">
                  <h6 class="head_tex" style="padding-top: 10px;">Password</h6>
              <input type="password" name="pass" placeholder="Enter Password" class="form-control">
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-10">
                  <input type="submit" name="submit" value="Log In" class="btn rounded-pill" style="background: #2D84FB; color: #fff; width: 12rem;">
                </div>

              </div>
<h6 class="head_tex" style="padding-top: 12px;">I Don't have an account ? <a href="index.php" style="text-decoration: none;">Create Account</a></h6>
<h6 class="head_tex" style="padding-top: px;">
  Log ? 
<a href="a_log.php" style="text-decoration: none;">Admin</a>
</h6>

<br>


            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>





</form>




	<?php

      $conn = mysqli_connect("localhost","root","","plan");

      if (isset($_POST{'submit'})) 
      {
      	
          
          $email = $_POST['email'];
          $pass = $_POST['email'];

          $pass = md5($pass);

          $sql = " select * from regi where email = '$email' or pass = '$pass' ";

          $run = mysqli_query($conn,$sql);

          if (mysqli_num_rows($run)) 
          {
          	
            $_SESSION['email'] = $email;

            header("location:../User/index.php");

          }
          else
          {
          	echo "Sorry Plese Check Pass and EMail ID";
          }


      }



	?>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>