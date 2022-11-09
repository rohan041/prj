<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form css grid</title>
    <link rel="stylesheet" type="text/css" href="main.css">

  
    <!--animatecss.cdn for ANIMATION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
      <meta charset="utf-8">
      <title>CSS3 - Neumorphic Social Icons</title>
      <link rel="stylesheet" href="style1.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

  background-color: #34495e;
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
body {
  margin: 0;
  padding: 0;
  font-family: 'montserrat', sans-serif;
}

.container {
  position: absolute;
  width: 100%;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
}

.content {
  width: 250px;
  height: 150px;
  display: inline-block;
  background: #ffffff;
  margin: 10px;
  color: white;
  position: relative;
  cursor: pointer;

}

.content:hover i{
  transform: translateY(-180px);
}

.content i {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  font-size: 30px;
  line-height: 140px;
  background: #34495e;
  z-index: 1;
  transition: transform 0.6s;
}

.content span {
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 0;
  padding: 10px 0;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  text-align: center;
  background: #34495e;
  width: 100%;

}
.icons{
  display: flex;
  margin: 40px 0;
}
li{
  position: relative;
  list-style: none;
  height: 70px;
  width: 70px;
  margin: 0 10px;
  border-radius: 50%;
  background: #dde1e7;
  cursor: pointer;
  box-shadow: -3px -3px 7px #ffffff73,
              3px 3px 5px rgba(94,104,121,0.288);
}
li a{
  line-height: 70px;
  font-size: 27px;
  color: #b6bbc5;
}
.first li.shadow-1{
  box-shadow: inset -3px -3px 7px #ffffff73,
              inset 3px 3px 5px rgba(94,104,121,0.288);
}
.first li.shadow-1 a{
  font-size: 25px;
}
.second li.shadow-2 a{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 55px;
  width: 55px;
  line-height: 55px;
  border-radius: 50%;
  background: #dde1e7;
  font-size: 24px;
  box-shadow: inset -3px -3px 7px #ffffff73,
              inset 3px 3px 5px rgba(94,104,121,0.288);
}
li:nth-child(1).fill-color a{
  color: #4267B2;
}
li:nth-child(2).fill-color a{
  color: #1DA1F2;
}
li:nth-child(3).fill-color a{
  color: #E1306C;
}
li:nth-child(4).fill-color a{
  color: #2867B2;
}
li:nth-child(5).fill-color a{
  color: #333;
}
.button {
  background-color: #ffffff; /* Green */
  border: none;
  color:  #34495e;
  padding: 27px 90px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

  .button012 {
  display: inline-block;
  border-radius: 4px;
  background-color:  #34495e;
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

.button012 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button012 span:after {
  content: '\00ab';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -50px;
  transition: 0.5s;
}

.button012:hover span {
  padding-right: 25px;
}

.button012:hover span:after {
  opacity: 1;
  left: -30px;
}


</style>
</head>
<body div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <a href="home01.php" class="button012" style="vertical-align:middle"><span>Back</span></a>
           </ul>
    </div >  
   
 
    <div class='container'>

  <div class='content'>

      

    <i class='fa fa-envelope'></i>
    <img src="mailme.png" height="150" width="150">
    <br><br>
    <button class="button button2"> <a href="contact01.html"><b>Mail Us</b> </a>  </button>
   

  </div>
  <div class='content'>
    <i class='fa fa-phone'></i>
    <img src="profile.png" height="150" width="220">
    <br><br>
   <button class="button button2"><a href="contact-card01.html"><b>Call Us</b> </a></button>
  </div>
  <div class='content'>
    <i class='fa fa-map-marker'></i>
     <img src="map.png" height="150" width="220">
     <br><br>
   <button class="button button2"><a href="map.php"><b>Reach Us</b></a></button>
  </div>


</body>
</html>