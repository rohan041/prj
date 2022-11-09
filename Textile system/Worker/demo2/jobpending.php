<html>
  <head>
    <title>Online Textile Portal</title>

    <style type="text/css">

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

* {
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

.main {
  width: 100%;
  height: 30vh;

  background-repeat: no-repeat;
  background-size: 100%;
  background-position: bottom;

  /*Optional*/
  display: flex;
  align-items: center;
  justify-content: center;
}

.card-container {
  width: 100%;
  max-width: 400px;
  height: auto;
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.25);
  box-shadow: 0 0 25px 0 rgba(255, 255, 255, 0.25);
  backdrop-filter: blur(4px);
  border-radius: 8px;
  border: 1px solid rgba(255, 255, 255, 0.25);
}
.card-container .image-container img {
  width: 120px;
  max-width: 400px;
  height: 120px;
  border-radius: 8px;
  align-content: center;
  margin-left: 20px;

}
.card-container .card-header h4 {
  font-size: 18px;
  font-weight: 800;
  margin-bottom: 0px;
}
.card-container .card-header p {
  font-size: 15px;
  font-weight: 400;
  text-align: justify;
}
.card-container .card-btn {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  margin-top: 8px;
}
.card-container .card-btn a {
  width: auto;
  height: auto;
  padding: 8px;
  text-decoration: none;
  border-radius: 8px;
  background-color: rgba(255, 255, 255, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.25);
  color: black;
  font-size: 15px;
  font-weight: 600;
}
body {
  margin: 0;
  width: 100%;
  height: 100vh;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradientBG 15s ease infinite;
}
@keyframes gradientBG {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.container {
  width: 100%;
  position: absolute;
  top: 35%;
  text-align: center;
}

/* Design By: Halil Demirci */

    </style>
  </head>
  <body> 
<div class="container main">   <!-- <section class="main"> -->
     
      <div class="card-container">
        <div class="image-container"><a href="/Textile system/Home page/homepage.php" target="_blank" class="block">
          <img src="sewing-machine.png" ></a>
        </div><br>
        <div class="card-header">
          <h4>Pending Job request</h4>
          <p>We will inform to you via mail so.. check the mail for furthur appllication.</p>
        </div>
        <div class="card-btn">
          <a href="/Textile system/Home page/homepage.php">Back To Home >></a>
        </div>
      </div>
      </div> 
 <!--    </section> -->

  </body>
</html>
<!-- Design By: Halil Demirci -->