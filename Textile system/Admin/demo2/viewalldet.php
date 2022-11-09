<?php 
$sidebar = "staff";
include('include/header.php');
include('include/navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


	<style type="text/css">

p.solid {border-style: solid;}
body {
  margin: 0px;
  padding: 0px;
  font-size: 14px;
  color: #444;
}

.shadowBox {
  padding: 60px;
}
.shadowBox .main {
  display: flex;
  flex-direction: row;
  width: 100%;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.18);
}

.side_left {
  background-color: white;
  width: 35%;
  padding: 30px;
}
.side_left .profile {
  width: 240px;
  height: 240px;
  border-radius: 50%;
  overflow: hidden;
  margin: auto;
  border: solid 5px #000000;
  user-select: none;
  pointer-events: none;
}
.side_left .profile img {
  width: 100%;
}
.side_left .profile_name {
  display: none;
  padding: 60px 0;
  letter-spacing: 1px;
  position: relative;
  min-height: 240px;
}
.side_left .profile_name::after {
  content: "";
  position: absolute;
  right: -40px;
  bottom: 0;
  width: 25px;
  height: 80%;
  background-color: #1572e8;
  border-radius: 50px;
}
.side_left .profile_name h1 {
  font-size: 54px;
  margin: 0;
}
.side_left .profile_name h1 strong {
  color: #000000;
}
.side_left .profile_name h2 {
  font-size: 42px;
  margin: 0;
  opacity: 0.95;
  font-weight: 400;
}
.side_left .boxArea {
  margin: 80px auto;
}
.side_left .boxArea .title {
  display: flex;
  align-items: center;
}
.side_left .boxArea .title span {
  width: 80px;
}
.side_left .boxArea .title span em {
  width: 50px;
  height: 50px;
  background-color: #1572e8;
  border-radius: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  padding: 12px;
}
.side_left .boxArea .title span em svg path {
  fill: #fff;
}
.side_left .boxArea .title h3 {
  font-weight: bold;
  letter-spacing: 1px;
  color: #1572e8;
}
.side_left .boxArea .contentArea {
  margin: auto 40px 0 80px;
  letter-spacing: 0.5px;
  line-height: 1.6;
}
.side_left .boxArea.contact .contentArea {
  margin: 0;
}
.side_left .boxArea.contact .contentArea .contact-list {
  display: flex;
  align-items: center;
}
.side_left .boxArea.contact .contentArea .contact-list:first-child em {
  border-radius: 50px 50px 0 0;
}
.side_left .boxArea.contact .contentArea .contact-list:last-child em {
  border-radius: 0 0 50px 50px;
}
.side_left .boxArea.contact .contentArea .contact-list span {
  width: 80px;
}
.side_left .boxArea.contact .contentArea .contact-list span em {
  width: 50px;
  height: 50px;
  background-color: #1572e8;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  padding: 12px;
}
.side_left .boxArea.contact .contentArea .contact-list span em svg path {
  fill: #fff;
}
.side_left .boxArea.contact .contentArea .contact-list h3 {
  font-size: 16px;
  font-weight: normal;
  margin: 0;
}
.side_left .boxArea.contact .contentArea .contact-list h3 a {
  color: #444;
}
.side_left .boxArea.education .title svg path {
  fill: transparent;
  color: white;
}
.side_left .boxArea.education .contentArea .education_fild {
  margin: 30px auto;
  font-size: 16px;
}
.side_left .boxArea.education .contentArea .education_fild p {
  margin: 0px;
}
.side_left .boxArea.education .contentArea .education_fild strong {
  font-weight: 500;
}

@media (max-width: 767px) {
  .main {
    flex-direction: column !important;
  }
  .main .side_left,
.main .side_Right {
    width: 100% !important;
  }
  .main .side_left .profile_name {
    display: block !important;
    min-height: 0;
    padding: 30px 0;
    padding-bottom: 10px;
    text-align: center;
  }
  .main .side_left .profile_name::after {
    display: none;
  }
  .main .side_left .profile_name h1 {
    font-size: 18px !important;
  }
  .main .side_left .profile_name h2 {
    font-size: 32px !important;
  }
  .main .side_left .boxArea {
    margin: 60px auto;
  }
  .main .side_Right {
    padding: 30px !important;
  }
  .main .side_Right .profile_name {
    display: none !important;
  }
  .main .side_Right .areaBox {
    margin: 50px auto !important;
  }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .side_left {
    width: 45% !important;
  }

  .side_Right {
    width: calc(100% - 45%) !important;
    padding: 30px 40px !important;
  }
}
.side_Right {
  background-color: black;
  padding: 30px 80px;
  width: calc(100% - 35%);
}
.side_Right .profile_name {
  padding: 60px 0;
  letter-spacing: 1px;
  position: relative;
  min-height: 240px;
}
.side_Right .profile_name::after {
  content: "";
  position: absolute;
  right: -40px;
  bottom: 0;
  width: 25px;
  height: 80%;
  background-color: #0066DD;
  border-radius: 50px;
}
.side_Right .profile_name h1 {
  font-size: 54px;
  margin: 0;
}
.side_Right .profile_name h1 strong {
  color: #ffffff;
}
.side_Right .profile_name h2 {
  font-size: 42px;
  margin: 0;
  opacity: 0.95;
  font-weight: 400;
}
.side_Right .areaBox {
  margin: 60px auto;
}
.side_Right .areaBox h3 {
  font-weight: bold;
  letter-spacing: 1px;
  color:#1572e8;
}
.side_Right .areaBox.experience .list {
  font-size: 16px;
  margin: 40px auto;
}
.side_Right .areaBox.experience .list strong {
  font-weight: bold;
  text-transform: uppercase;
}
.side_Right .areaBox.experience .list p {
  margin: 0;
}
.side_Right .areaBox.skill .list {
  margin: 30px auto;
  display: flex;
  align-items: center;
  position: relative;
}
.side_Right .areaBox.skill .list strong {
  width: 130px;
  font-size: 14px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.side_Right .areaBox.skill .list span {
  width: 300px;
  height: 5px;
  border-radius: 10px;
  background-color: #1572e8;
  position: relative;
}
.side_Right .areaBox.skill .list span::after {
  content: "";
  position: absolute;
  top: -5px;
  left: 100%;
  width: 15px;
  height: 15px;
  border-radius: 50px;
  background-color:#1572e8;
}
.side_Right .areaBox.skill .list.p-90 span::after {
  left: 90%;
}
.side_Right .areaBox.skill .list.p-80 span::after {
  left: 80%;
}
.side_Right .areaBox.skill .list.p-75 span::after {
  left: 75%;
}
.side_Right .areaBox.skill .list.p-70 span::after {
  left: 70%;
}
.side_Right .areaBox.skill .list.p-60 span::after {
  left: 60%;
}
.side_Right .areaBox.skill .list.p-50 span::after {
  left: 50%;
}
.side_Right .areaBox.interests .box {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  font-size: 16px;
  margin: 30px auto;
}
.side_Right .areaBox.interests .box p {
  margin: 0;
  margin-right: 30px;
}
.side_Right .areaBox.portfolio a {
  display: block;
  margin: 20px auto;
  font-size: 16px;
  color: #444;
}

@media (max-width: 1023px) {
  .shadowBox {
    padding: 0px !important;
  }
}
.button {
  background-color: green; /* Green */
  border:none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:0px 2px 3px 2px;
  cursor: pointer;
  border-radius: 2px;
}
.button1 {
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin:0px 2px 3px 2px;
  cursor: pointer;
  border-radius: 2px;
}



	</style>
</head>
<body>
<div class="main-panel">
<div class="content">
	<div class="page-inner">
		<div class="col-md-12">
<div class="solid">
<div class="shadowBox">
<?php 
		include("db.php");
		$id=$_REQUEST['id'];
		$sql= mysqli_query($con,"select * from jobs where id=$id");
		$row=mysqli_fetch_assoc($sql);
	?>
	
        <section class="main">
            <!-- leftSide -->
            <div class="side_left">
                <div class="profile">
                    <?php echo '<img src="../../Worker/demo2/images/'.$row['proof']. '" class="img-fluid"/>'?>
                </div>

                <div class="profile_name">
                    <h1><strong><?php echo $row['name']; ?></strong></h1>
                   
                </div>

                <div class="boxArea about">
                    <div class="title">
                       
                    </div>
                    <div class="contentArea">
                      
                    </div>
                </div>

                <div class="boxArea contact">
                    <div class="title">
                        <span>

                        </span>
                        <h3>Contact Me</h3>
                    </div>
                    <div class="contentArea">
                        <div class="contact-list">
                            <span>
                                <em>
                                    <?xml version="1.0" ?><svg id="Layer_1" height="22"
                                        style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M351.5,339.3c-18.8-4.1-41.3,3.1-49.4,20.6c-4.7,10.1-5.4,23.9-15.6,28.4c-7.3,3.3-15.7-0.4-22.7-4.3  c-34.4-19.2-103.4-156.4-98.2-195.5c1-7.9,3.2-16.9,10.1-20.8c9.7-5.5,21.2,2.2,32.1,4.4c18.9,4,38-9.8,46-27.3  c8-17.5,7.1-37.8,4.4-56.9c-3.2-22.3-9.2-45.2-24-62.1c-42.2-48-104.5,0.4-129.4,40.9C88.8,92.8,80,122.7,75.8,152.8  C66.7,217,182,446.4,239,477.5c26.7,14.6,55.9,25.3,86.2,28c47.4,4.2,123.4-16.9,110.1-79.4c-4.7-22-19.5-40.5-35.5-56.3  C386,356.2,370.3,343.4,351.5,339.3z"
                                            id="XMLID_1_" /></svg>
                                </em>
                            </span>
                            <h3 style="color:black;"/><?php echo "+91".$row['phno1']; ?></h3>
                           
                        </div>
                        <div class="contact-list">
                            <span>
                                <em>
                                    <?xml version="1.0" ?><svg id="Layer_1" height="22"
                                        style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M351.5,339.3c-18.8-4.1-41.3,3.1-49.4,20.6c-4.7,10.1-5.4,23.9-15.6,28.4c-7.3,3.3-15.7-0.4-22.7-4.3  c-34.4-19.2-103.4-156.4-98.2-195.5c1-7.9,3.2-16.9,10.1-20.8c9.7-5.5,21.2,2.2,32.1,4.4c18.9,4,38-9.8,46-27.3  c8-17.5,7.1-37.8,4.4-56.9c-3.2-22.3-9.2-45.2-24-62.1c-42.2-48-104.5,0.4-129.4,40.9C88.8,92.8,80,122.7,75.8,152.8  C66.7,217,182,446.4,239,477.5c26.7,14.6,55.9,25.3,86.2,28c47.4,4.2,123.4-16.9,110.1-79.4c-4.7-22-19.5-40.5-35.5-56.3  C386,356.2,370.3,343.4,351.5,339.3z"
                                            id="XMLID_1_" /></svg>
                                </em>
                            </span>
                            <h3 style="color:black;"/><?php echo "+91".$row['phno2']; ?></h3>
                             
                        </div>
                        <div class="contact-list">
                            <span>
                                <em>

                                    <?xml version="1.0" ?>
                                    <!DOCTYPE svg
                                        PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                    <svg height="28" id="Layer_1" style="enable-background:new 0 0 16 16;" version="1.1"
                                        viewBox="0 0 16 16" width="16px" xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M8,10c-0.266,0-0.5-0.094-1-0.336L0,6v7c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1V6L9,9.664C8.5,9.906,8.266,10,8,10z M15,2  H1C0.45,2,0,2.45,0,3v0.758l8,4.205l8-4.205V3C16,2.45,15.55,2,15,2z" />
                                    </svg>
                                </em>
                            </span>
                            <h3 style="color:black;"/><?php echo $row['emailid']; ?></h3>
                        </div>
                        <div class="contact-list">
                            <span>
                                <em>

                                    <?xml version="1.0" ?>
                                    <!DOCTYPE svg
                                        PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                                    <svg height="28" id="Layer_1" style="enable-background:new 0 0 16 16;" version="1.1"
                                        viewBox="0 0 16 16" width="16px" xml:space="preserve"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M15.45,7L14,5.551V2c0-0.55-0.45-1-1-1h-1c-0.55,0-1,0.45-1,1v0.553L9,0.555C8.727,0.297,8.477,0,8,0S7.273,0.297,7,0.555  L0.55,7C0.238,7.325,0,7.562,0,8c0,0.563,0.432,1,1,1h1v6c0,0.55,0.45,1,1,1h3v-5c0-0.55,0.45-1,1-1h2c0.55,0,1,0.45,1,1v5h3  c0.55,0,1-0.45,1-1V9h1c0.568,0,1-0.437,1-1C16,7.562,15.762,7.325,15.45,7z" />
                                    </svg>
                                </em>
                            </span>
                            <h3 style="color:black;"/><?php echo $row['adress'],$row['state'],$row['city'],$row['pincode']; ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- rightSide -->
            <div class="side_Right">
                <div class="profile_name">
                    <h1><strong><?php echo $row['name']; ?></strong></h1>
                   
                </div>

                <div class="areaBox experience">
                    <h3>Age
                        <strong style="color:white;"/>=<?php echo $row['age']; ?></strong></h3>
					<h3>Birth date
					<strong style="color:white;"/>=<?php echo $row['birthdate']; ?></strong></h3>
					<h3>Gender
                        <strong style="color:white;"/>=<?php echo $row['gender']; ?></strong></h3>
					<h3>Salary
                        <strong style="color:white;"/>=<?php echo $row['salarye']; ?></strong></h3>
					<h3>Shift
                        <strong style="color:white;"/>=<?php echo $row['shift']; ?></strong></h3>
					<h3>Address
                        <strong style="color:white;"/>=<?php echo $row['adress']; ?></strong></h3>
					<h3>City
                        <strong style="color:white;"/>=<?php echo $row['city']; ?></strong></h3>
					<h3>State
                        <strong style="color:white;"/>=<?php echo $row['age']; ?></strong></h3>
                    </div>	
		



    <!-- for print button  -->
                </div>

              
              
            </div>
			
        </section>
	
    </div>


</div>













</div>
</div>
</div>
</div>

</body>
</html>