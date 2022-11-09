<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<style type="text/css">


@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    font-family: 'Exo', sans-serif;
}


.context {
    width: 100%;
    position: absolute;
    top:50vh;
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
    margin-top: -350px;
}


.area{
    background-color: #0d1318;
   
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845);  
    width: 100%;
    height:100vh;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }
}

@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,300&display=swap");
* {
  margin: 0;
  padding: 0;
  list-style: none;
  /* Track */
  /* Handle */
  /* Handle on hover */
}

* ::-webkit-scrollbar {
  width: 5px;
}

* ::-webkit-scrollbar-track {
  background: #0d1318;
}

* ::-webkit-scrollbar-thumb {
  background: #283a4a;
}

* ::-webkit-scrollbar-thumb:hover {
  background: #162029;
}

.h2-animate {
    -webkit-animation: h2-animate 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
            animation: h2-animate 0.8s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

 @-webkit-keyframes h2-animate {
  0% {
    letter-spacing: -0.5em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}
@keyframes h2-animate {
  0% {
    letter-spacing: -0.5em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}



body {
  font-family: Poppins, sans-serif;
  position: relative;
  min-height: 100vh;
  background-color: #485461;
  background-image: linear-gradient(315deg, #485461 0%, #28313b 74%);
}

body h2 {
  margin-top: 20px;
  color: #fffbfb;
  text-align: center;
  font-size: 45px;
  margin-bottom: 30px;
}

.card-section {
  position: relative;
  margin: auto;
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.card-section .card {
  padding: 20px;
  margin: 15px;
  border-radius: 5px;
  max-width: 300px;
  min-width: 300px;
  min-height: 390px;
  -webkit-box-shadow: 1px 1px 13px #000000;
  box-shadow: 1px 1px 13px #000000;
  background-color: #0d1318;
}

.card-section .card h3 {
  color: #fffbfb;
  font-size: 23px;
  padding: 10px;
}

.card-section .card p {
  max-height: 220px;
  overflow: auto;
  color: #fffbfb;
  padding: 15px;
}

.card-section .card img {
  margin-top: 5px;
  -o-object-fit: cover;
     object-fit: cover;
  width: 100px;
  height: 100px;
  border: 2px solid #fffbfb;
  border-radius: 60px;
}

.card-section .card .card-footer {
  position: relative;
  display: block;
  
}

.card-section .card .card-footer button {
  position: relative;
  min-width: 120px;
  top:30px;
  border: none;
  padding: 10px 15px 10px 15px;
  border-radius: 2px;
  cursor: pointer;
  background-color: #fffbfb;
  color: #0d1318;
  font-weight: bold;
  -webkit-transition: all .4s;
  transition: all .4s;
}

.animate-btn {
    -webkit-animation: animate-btn 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
            animation: animate-btn 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
}

 @-webkit-keyframes animate-btn {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes animate-btn {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

.animate-img {
    -webkit-animation: animate-img 0.5s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
            animation: animate-img 0.5s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
}

 @-webkit-keyframes animate-img {
  0% {
    -webkit-transform: rotateX(0);
            transform: rotateX(0);
  }
  100% {
    -webkit-transform: rotateX(-360deg);
            transform: rotateX(-360deg);
  }
}
@keyframes animate-img {
  0% {
    -webkit-transform: rotateX(0);
            transform: rotateX(0);
  }
  100% {
    -webkit-transform: rotateX(-360deg);
            transform: rotateX(-360deg);
  }
}




.card-section .card .card-footer button:hover {
  background-color: #2C3E50;
  color: #fffbfb;
}

.card-section .card .card-footer button:focus {
  outline: none;
}

.card-section .card .card-footer a {
  position: relative;
  margin: 10px;
  text-decoration: none;
  color: #fffbfb;
  font-size: 20px;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.card-section .card .card-footer a i {
  transition: all .4s;
}

.card-section .card .card-footer a i:hover {
  text-shadow: 1px 0px 8px #ffffff;
  transform: scale(1.3);
}

.card-section .card ul {
  padding: 0 30px 0 30px;
  margin-bottom: 30px;
  font-weight: lighter;
  text-align: left;
}



@media screen and (max-width: 1366px) {
  .card-section {
    max-width: 100%;
    flex-wrap: wrap;
  }

}

@media screen and (max-width: 600px) {
  .card-section {
    max-width: 100%;
    flex-direction: column;
  }

  .card {
    max-width: 100%;
  }
}

.card-section .card ul li {
  color: #fffbfb;
}

.footer {
  position:fixed;
  bottom:5px;
}

.footer p {
  font-family: 'Montserrat', sans-serif;
  font-size:12px;
  color:gray;
}

.footer a {
  color: #fff;
  transition: all .4s;
}

.footer a:hover {
  color: #eaeaeb;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color:  #0d1318;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 7px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00ab';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -50px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  left: -30px;
}
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400&family=Poiret+One&family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400&family=Quicksand:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400&display=swap');

*{
  box-sizing: border-box;
  margin: 0;
}
body{
  background-color: #000000;
}
header{
  background-color: #000000;
  padding: 8px 16px;
  box-shadow: 0px 0px 4px 2px #565656;
}
header div.navbar{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

div.navbar div.logo{
  color: #f5f5f5;
  font-family: "Quicksand", sans-serif;
}
div.logo h2{
  font-size: 1.3rem;
  cursor: pointer;
}

div.nav-links ul.links{
      list-style: none;
      display: flex;
      justify-content: flex-end;
}
ul.links li{
  margin: 0px 8px;
}
ul.links li:last-child{
  margin-right: 0;
}
ul.links li a{
  color: white;
  text-decoration: none;
  font-family: "Quicksand", sans-serif;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 700;
  transition: all .3s ease-in-out;
}
ul.links li a:hover,
ul.links li a:focus{
  color: #4b70e2;
}

div.menu-trigger{
  display: none;
}
button.close-nav{
  display: none;
}
div.menu-trigger button{
  background: transparent;
  border: none;
  color: white;
  font-size: 1rem;
}
div.menu-trigger button:focus,
div.menu-trigger button:hover{
  color: #f3f26f;
}
div.content{
  margin-top: 150px;
  text-align: center;
}
div.content p{
  font-family: "Roboto", sans-serif;
  color: #464686;
  font-size: 1.3rem;
}
div.content a{
  margin-top: 30px;
  display: block;
  color: grey;
  font-family: "Roboto", sans-serif;
  transition: all .3s ease-out;
}
div.content a:hover{
  color: red;
}
@media screen and (min-width: 1000px){
  header{
    margin: 0px 10%;
  }
}
@media screen and (max-width: 600px){
  html,body{
    width: 100%;
    height: 100%;
  }
  body{
    background-color: #f3f26f;
  }
  div.nav-links{
    display: none;
    background-color: #252525;
    position: fixed;
    min-width: 200px;
    height: 100%;
    top: 0;
    padding: 0;
    right: 0;
    z-index: 1;
    animation: appear 0.7s ease-in-out;
  }
  @keyframes appear{
    0%{
        right: -300px;
    }
    100%{
      right: 0px;
    }
  }
  div.nav-links ul.links{
    display: block;
    width: 100%;
    padding: 0px;
    margin-top: 30px;
  }
  ul.links li{
    margin: 0;
  }
  ul.links li a{
    display: block;
    width: 100%;
    padding: 8px 12px;
  }
  ul.links li a:hover,
  ul.links li a:focus{
    background: #efefef;
    color:#595907;
  }
  button.close-nav{
    display: block;
    background: transparent;
    border: none;
    color: white;
    font-size: 1.2rem;
    position: absolute;
    top: 8px;
    left: 168px;
    cursor: pointer;
  }
  button.close-nav:focus{
    color: red;
  }
  div.menu-trigger{
    display: block;
  }
}

body {
  background: #000000;
  color: #333;
  font: 100% Lato, Arial, Sans Serif;
  height: 100vh;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

#background-wrap {
    bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: -1;
}



body {
  background: #000000;
}

.Iam {
  padding: 2em 5em;
  font: normal 40px/50px Montserrat, sans-serif;
  color: #999;
}
.Iam p {
  height: 50px;
  float: left;
  margin-right: 0.3em;
}
.Iam b {
  float: left;
  overflow: hidden;
  position: relative;
  height: 50px;
  top: 40px;
}
.Iam .innerIam {
  display: inline-block;
  font-family: "Quicksand", sans-serif;
  color: #4b70e2;
  position: relative;
  white-space: nowrap;
  top: 0;
  left: 0;


}
@media screen and (max-width: 600px){
  html,body{
    width: 100%;
    height: 100%;
  }
  body{
    background-color: #f3f26f;
  }
  div.nav-links{
    display: none;
    background-color: #252525;
    position: fixed;
    min-width: 200px;
    height: 100%;
    top: 0;
    padding: 0;
    right: 0;
    z-index: 1;
    animation: appear 0.7s ease-in-out;
  }
  @keyframes appear{
    0%{
        right: -300px;
    }
    100%{
      right: 0px;
    }
  }
  div.nav-links ul.links{
    display: block;
    width: 100%;
    padding: 0px;
    margin-top: 30px;
  }
  ul.links li{
    margin: 0;
  }
  ul.links li a{
    display: block;
    width: 100%;
    padding: 8px 12px;
  }
  ul.links li a:hover,
  ul.links li a:focus{
    background: #efefef;
    color:#595907;
  }
  button.close-nav{
    display: block;
    background: transparent;
    border: none;
    color: white;
    font-size: 1.2rem;
    position: absolute;
    top: 8px;
    left: 168px;
    cursor: pointer;
  }
  button.close-nav:focus{
    color: red;
  }
  div.menu-trigger{
    display: block;
  }
}

body {
  background: #000000;
  color: #333;
  font: 100% Lato, Arial, Sans Serif;
  height: 100vh;
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}

#background-wrap {
    bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: -1;
}


body {
  background: #000000;
}

.Iam {
  padding: 2em 5em;
  font: normal 40px/50px Montserrat, sans-serif;
  color: #999;
}
.Iam p {
  height: 50px;
  float: left;
  margin-right: 0.3em;
}
.Iam b {
  float: left;
  overflow: hidden;
  position: relative;
  height: 50px;
  top: 40px;
}
.Iam .innerIam {
  display: inline-block;
  font-family: "Quicksand", sans-serif;
  color: #4b70e2;
  position: relative;
  white-space: nowrap;
  top: 0;
  left: 0;



</style>
</head><header>

  <div class="navbar">
    <div class="logo"><img src="sewing-machine.png"; width="100" height="100"></div>
      <div class="nav-links">
          <button class="close-nav" onclick="closemenu()"><i class="fas fa-times-circle"></i></button>
          <ul class="links">
            <li><a href="/Textile system/Home page/homepage.php"><h1>Home</h1></a></li>
            <!-- <li><a href="#"><h1>Info</h1></a></li> -->
            <li><a href="Cs1.php"><h1> About Us</h1></a></li>
            <li><a href="Contact.php"><h1>Contact Us</h1></a></li>
            <li><a href="/Textile system/Login Form/login2/login2.php"><h1>LOGIN/SIGNUP</h1></a></li>
          </ul>
      </div>
    <div class="menu-trigger"><button onclick="openmenu()"><i class="fas fa-bars"></i></button></div>
    </div>

  </div>

</header>

<body>  
<br><br><br><br><br>
<!-- 
<h2 class="h2-animate">QUICK CONTACT</h2> -->

<!-- <a href="contact.php" class="button" style="vertical-align:middle"><span>Back</span></a> -->
<!-- Please Copy Area Start -->
    <section class="card-section">
        <div class="card">
              <h3>For New Worker</h3>
            <img class="animate-img" src="010.jpg" alt="bugra.work">
            <div class="card-content">
                <p>Sanket Nakrani</p>
                <ul>
           
                    <li>Phone: 9974750572</li>
                    <li>sanket3113nakrani@gmail.com</li>
                     <li>Mon to Sat: 9:am to 6pm</li>
                </ul>
            </div>
            <div class="card-footer animate-btn">
                <a href="https://www.facebook.com/sanket.nakrani.14"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/patel_sanket_31/"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
              
              
        </div>
        <div class="card">

             
            <h3>For Salary</h3>
             <img class="animate-img" src="01.jpg" alt="bugra.work">
            <div class="card-content">
                <p>Rohan Padasala</p>
                <ul>
                    
                    <li>Phone: 9374536586</li>
                    <li>rohanpadasala041@gmail.com</li>
                     <li>Mon to Sat: 9:am to 6pm</li>
                </ul>
            </div>
            <div class="card-footer animate-btn">
                <a href="https://www.facebook.com/rohan.padasala.16"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/rahul_padasala"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/_r_a_h_u_l_._41/"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
              
        </div>
        <div class="card">
             <h3>For Inquiries</h3>
                        <img class="animate-img" src="1619315080101-01.jpeg" alt="bugra.work">
            <div class="card-content">
                <p>Piyush Raghuvanshi</p>
                <ul>
                   
                    <li>Phone: 702453224</li>
                    <li>Email: contact@bugra.work</li>
                     <li>Mon to Sat: 9:am to 6pm</li>
                </ul>
            </div>
            <div class="card-footer animate-btn">
                <a href="https://www.facebook.com/piyush.raghuvanshi.125"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/itzdjpiyush/"><i class="fab fa-instagram"></i></a>
                <a href="https://web.whatsapp.com/"><i class="fab fa-linkedin-in"></i></a>
            </div>
           
        </div>
</section>

<!-- Please Copy Area End -->

<!-- <div class="footer">
        <p>design by <a rel="dofollow" target="_blank" href="https://bugra.work">bugra.work</a></p>
      </div>
     -->

</body>
</html>