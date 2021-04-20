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
    <div class="col-xl-12 col-md-none">
      <div style="background: #fff; border-radius: 10px;">
        <div class="container">
          <br>
          
          <div class="container">
            <div class="row">
               <div class="col-xl-6">
                <img src="https://static-2.gumroad.com/res/gumroad/1211634803146/asset_previews/7fae28c65fc1366320b504d8436c5372/retina/gamer-monochrome-thumbnail.png" style="height: 500px" class="imga">
              </div>
              <div class="col-xl-6 col-md-12">
                <br>
                <h3 class="mt-3">Registration</h3>
                                 
                                 <div class="row mt-4">
                                  <div class="col-md-6">
                                    <h6 class="head_tex" style="padding-top: 10px;">First Name</h6>
                                 <input type="text" name="f_name" placeholder="Enter First Name" class="form-control" required>
                                  </div>
                                  <div class="col-md-6">
                                    <h6 class="head_tex" style="padding-top: 10px;">Last Name</h6>
                                    <input type="text" name="l_name" placeholder="Enter Last Name" class="form-control" required>
                                  </div>
                                 </div>

                                 <div class="row mt-1">
                                  <div class="col-md-6">
                                    <h6 class="head_tex" style="padding-top: 10px;">Email Id</h6>
                                    <input type="text" name="email" placeholder="Enter Email Name" class="form-control" required>
                                  </div>
                                  <div class="col-md-6">
                                    <h6 class="head_tex" style="padding-top: 10px;">Phone Number</h6>
                                    <input type="text" name="phone" placeholder="Enter Phone Name" class="form-control" required>
                                  </div>
                                 </div>

                                 <div class="row mt-1">
                                  <div class="col-md-6">
                                    <h6 class="head_tex" style="padding-top: 10px;">Password</h6>
                                    <input type="password" name="pass" placeholder="Enter Password" class="form-control" required>
                                  </div>
                                  <div class="col-md-6">
                                    <h6 class="head_tex" style="padding-top: 10px;">Confirm Password</h6>
                                    <input type="password" name="cpass" placeholder="Enter Confirm Password" class="form-control" required>
                                  </div>
                                 </div>

                              

<br>
                                <div class="btoo"> <input type="submit" name="submit" value="Registration" class="btn rounded-pill" style="background: #2D84FB; color: #fff; width: 12rem;"><br>
                                 <h6 class="head_tex" style="padding-top: 12px;">I Have an account ? <a href="log.php" style="text-decoration: none;">Sign Up</a></h6></div>
<br><br>



              </div>
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

if (isset($_POST['submit'])) 
{
  
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

  $pass = md5($pass);
  $cpass = md5($cpass);

  $sql =" insert into regi (f_name,l_name,email,phone,pass,cpass) values ('$f_name','$l_name','$email','$phone','$pass','$cpass') ";

  if (mysqli_query($conn,$sql)) 
  {
    echo "Done";
  }
  else
  {
    echo "Not Done";
  }


}


?>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>