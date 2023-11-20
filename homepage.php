<?php
session_start();
$username = $_SESSION['username'];
if(!$username){
  header("Location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Fonts CDN-->

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--- Custom Css --->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Internal CSS -->

    <style>
      .slideUpBtn {
    padding: 12px 24px;
    background-color: transparent;
    border: 2px solid seagreen(243, 80%, 62%);
    border-radius: 6px;
    position: relative;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(1,.15,.34,.92)
}

.slideUpBtn span {
    display: inline-block;
    transition: inherit;
    color: seagreen(243, 80%, 62%);
}

.slideUpBtn:hover span {
    opacity: 0;
    transform: translateY(-100%)
}

.slideUpBtn::before {
    content: "";
    background-color: seagreen(243, 80%, 62%);;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform: translateY(100%);
    transition: inherit;
    width: 100%;
    transition: transform 0.5s cubic-bezier(1,.15,.34,.92)
}

.slideUpBtn::after {
    content: 'Vote Now';
    align-items: center;
    display: flex;
    height: 100%;
    justify-content: center;
    left: 0;
    position: absolute;
    top: 0;
    transition: inherit;
    transform: translateY(100%);
    width: 100%;

}

.slideUpBtn:hover::before {
    transform: translateY(0) scale(3);
    transition-delay: .025s;
}

.slideUpBtn:hover::after {
    opacity: 1;
    color: seagreen(222, 100%, 95%);
    transform: translateY(0);
}
    </style>
<!-- End Internal CSS -->
</head>
<body>

<!------------------  Navbar Section ------------------>

<div class="container-fluid" id="cont-3">
<header id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href=homepage.php  style="color: white; font-weight: 600; margin-top: 15px;">OVS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
        <li class="nav-item" >
          <a class="nav-link" href="homepage.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="year.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
        </li>
      
        <li class="nav-item" >
          <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
        </li>
      
        <li class="nav-item" >
          <a class="nav-link" href="logout.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!------------------  HomePage Section ------------------>

<section id="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 animate__animated animate__bounceInLeft" style="text-align: center;">
        <h1>ONLINE VOTING SYSTEM</h1>
        <p>Online voting systems are software platforms used to securely conduct votes and elections. As a digital platform, they eliminate the need to cast your votes using paper or having to gather in person.</p>
      </div>
      
      <div class="col-md-6"> 
             <img src="img/2.svg" alt="" srcset="" height="400vh " width="90%" class="animate__animated animate__bounceInRight " style="margin-left: 10px; margin-top: 20px;" >
                </div> 
            </div>  
         </div>
        </div>
      </div>
    </div>
</section>
 <!------------------  Space Section ------------------> 
  
<section class="space">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
    
      </div>
    </div>
</section>
</div>

<!------------------  Candidate Section ------------------>

<div class="container">
  <div class="row">
    <div class="col-md-12">     
      <h1>Online Voting System</h1>
    </div>
    <div class="col-md-12" style=" width: 100%; ">
      <img src="img/10.svg" alt="" srcset="">
    </div>


      <div class="col-md-12">
      <a href="year.php" ><span ><button style="margin-top: 20px;" class="slideUpBtn">Vote Now</button></span></a>
    </div>  
    </div>
  </div>
  </div>
</div>

<!------------------  About Section ------------------>
<section>
    <div class="container-fluid" style="margin-top: 50px;">
      <div class="row" style="background: linear-gradient(to right, darkseagreen,lightseagreen );" width="100%">
        <div class="col-md-12" style="background-image: linear-gradient(to right, darkseagreen,lightseagreen ); color: white;">
          <h1 style="text-align: center; background-image: linear-gradient(to right, darkseagreen,lightseagreen ); color: white;"> About Voting</h1>
          <p> About Voting In Beif</p>
        </div>
        <div class="col-md-6" >
          <img src="img/4.svg" alt="" srcset="" >
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h1 style="color: white; margin-top: 40px;" class=" ">About</h1>
          <p style="color: white;" class=" ">Voting is a method for a group, such as a meeting or an electorate, in order to make a collective decision or express an opinion usually following discussions, debates or election campaigns. Democracies elect holders of high office by voting. Residents of a place represented by an elected official are called "constituents", and those constituents who cast a ballot for their chosen candidate are called "voters". There are different systems for collecting votes, but while many of the systems used in decision-making can also be used as electoral systems, any which cater for proportional representation can only be used in elections.</p>
        </div>
      </div>
      </div>
    </div>
</section>
<!------------------  Contact Form Section ------------------>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1> Contact Form </h1>
          <p style="padding-bottom:50px;">Any Queries , Drop Contact Form  </p>  
        </div>
        <div class="col-md-4" style="border-radius: 6px; border: 3px  darkseagreen solid;">
          <h2 style="padding-top: 30px;">Contact Form</h2>
          <form action="contact.php" method="post">
            <table>
              <tr>
                <label style="float: left; position: absolute; margin-top: 25px; margin-left: -160px; outline:none;"> Name :</label>
				      	<td style="padding-top: 50px;"><input placeholder="Enter Your Name" type="text" name="txtName" ></td>
              </tr>
              <tr >
                <label style="float: left; position: absolute; margin-top: 100px;  margin-left: -160px;"> Email :</label>
					      <td style="padding-top: 50px;"><input required placeholder="Enter Your Email id " type="email" name="txtEmail"></td>
              </tr>
              <tr>
                <label style="float: left; position: absolute; margin-top: 175px; margin-left: -160px;"> Message :</label>
                <td style="padding-top: 50px;"><textarea placeholder="Enter Your Message" name="txtMessage" rows="3" cols="22"></textarea></td>
              
              </tr>
              <tr>
              <td style="padding-top: 50px; padding-bottom: 30px;"><button class="magnifyBtn">Submit</button></a></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="col-md-8" style="padding-left: 50px; width: 100%; padding-top: 30px;">
          <img src="img/6.svg" alt="" srcset="">
        </div>
      </div>
    </div>
</section>

<section>
  <div class="container-fluid" style="margin-top: 50px;">
    <div class="row" style="background: linear-gradient(to right, darkseagreen,lightseagreen );" width="100%">
      <div class="col-md-12" style="background-image: linear-gradient(to right, darkseagreen,lightseagreen ); color: white;">
        <h1 style="text-align: center; background-image: linear-gradient(to right, darkseagreen,lightseagreen ); color: white;"> Become Candidate</h1>
        <p>Become a Candidate</p>
      </div>
      <div class="col-md-6" >
        <img src="img/11.svg" style="height: 400px;" >
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <h1 style="color: white; margin-top: 40px; margin-bottom: 40px;" class=" ">Apply</h1>
        <p style="color: white;" >
          If you want to become a candidate, then you click on the link below, then you will be redirected. In the second
           page, by filling that, you can request for a candidateAfter that, the administrator will approve your request so you can become a candidate.
           </p>
           <a href="insert_cand_year.php"><button class="magnifyBtn" style="margin-bottom: 40px;">Apply</button></a>
      </div>
    </div>
    </div>
  </div>
</section>

<!------------------  Footer Section ------------------>

<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <hr>
      <div class="Footer">
        <ul style="display: flex;">
          <li style="list-style: none; padding: 10px; "><a href="homepage.html" style="text-decoration: none; color: darkseagreen;">Home</a></li>
          <li style="list-style: none; padding: 10px; "><a href="about.php" style="text-decoration: none; color: darkseagreen;">About</a></li>
          <li style="list-style: none; padding: 10px; "><a href="contact_form.php" style="text-decoration: none; color: darkseagreen;">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <hr>
      <div class="social-icon">
        <ul >
                        <li>
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
      </div>
    </div>
  </div>
</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
 
  </body>
</html>