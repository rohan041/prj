<!DOCTYPE html>
<html>
<head>
<style>
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
 background-color: #000000;

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
    background: rgba(255, 255, 255);
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

  .button {
  display: inline-block;
  border-radius: 4px;
  background-color:  #325d88;
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


 .button01 {
  text-decoration-style: none;
  border-radius: 4px;
  background-color:  #325d88;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 7px;
  width: 150px;
  margin: 0.1px;
 }




.button01 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button01 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button01:hover span {
  padding-right: 25px;
}

.button01:hover span:after {
  opacity: 1;
  right: 0;
}


  h1 {
  text-shadow: 2px 2px 5px skyblue;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr {background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #325d88;
  color: white;
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
 </ul>
    </div >


<center><h1 style="color:white;"> HOSTEL SEAT BOOKING </h1></center>
 <a href="gallery001.php" class="button" style="vertical-align:middle"><span>Back</span></a>
<P > <h2 style="color:white;"> HOSTEL FOR : MALE (NATIONAL) </h2></P>

<table id="customers">
  <tr>
    <th>Hostel Name</th>
    <th>Room Occupancy</th>
    <th>Ac / Non-Ac</th>
    <th>Facilities</th>
    <th> Fees(Per Annum)</th>
      <th> Gallery</th>
     
  </tr>
  <tr>
    <td>Shastri Bhawan – A</td>
    <td>3 Students</td>
    <td>Non - Ac</td>
    <td>Common Wash Room</td>
    <td>Rs.75,000</td>
    <th rowspan="3"
    td align='center'><a href="Gallery/gallery01.html" class="button01"><span>Show More</span></a> </th>
  </tr>
  <tr>
    <td>Shastri Bhawan – B</td>
    <td>3 Students</td>
    <td>Non - Ac</td>
    <td>Common Wash Room</td>
    <td>Rs.75,000</td>
    
  </tr>
  <tr>
     <td>Shastri Bhawan – C</td>
    <td>8 Students</td>
    <td>Non - Ac</td>
    <td>Common Wash Room</td>
    <td>Rs.65,000</td>
   
  </tr>
  <tr>
   <td>Tagore Bhawan - A</td>
    <td>3 Students</td>
    <td>Non - Ac</td>
    <td>Attached Wash Room</td>
    <td>Rs.98,000</td>
     <th rowspan="3"
    td align='center'><a href="Gallery/gallery01.html" class="button01"><span>Show More</span></a> </th>
  </tr>
   <tr>
   <td>Tagore Bhawan - B</td>
    <td>3 Students</td>
    <td>Non - Ac</td>
    <td>Attached Wash Room</td>
    <td>Rs.98,000</td>
    
  </tr>
   <tr>
   <td>Tagore Bhawan - C</td>
    <td>3 Students</td>
    <td>Non - Ac</td>
    <td>Attached Wash Room</td>
    <td>Rs.98,000</td>
  </tr>
  <tr>
    <td>Dhyaan Bhawan - A</td>
    <td>3 Students</td>
    <td>Ac</td>
    <td>Attached Wash Room</td>
    <td>Rs.1,15,000</td>
    <th rowspan="3"
    td align='center'><a href="Gallery/gallery01.html" class="button01"><span>Show More</span></a> </th>
  </tr>
  <tr>
    <td>Dhyaan Bhawan - B</td>
    <td>3 Students</td>
    <td>Ac</td>
    <td>Attached Wash Room</td>
    <td>Rs.1,15,000</td>
    
  </tr>
  <tr>
    <td>Dhyaan Bhawan - C</td>
    <td>3 Students</td>
    <td>Ac</td>
    <td>Attached Wash Room</td>
    <td>Rs.1,15,000</td>
    
  </tr>
  
  
</table>
<ul>
  <li style="color:white;"><b>Note : - </b></li>
  <li style="color:white;">Rs.5,000/- refundable security deposit applies in all category hostels.</li>
  <li style="color:white;">The above Fee includes Pure Veg. / Non - Veg  Indian meal with accommodation, limited breakfast with tea, lunch and dinner.i</li>
  
</ul>  
</body>
</html>

