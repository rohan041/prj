<?php 

if(isset($_POST['submit'])){
   $conn = mysqli_connect('localhost','root');
    mysqli_select_db($conn,'hostel');
    $sql = "INSERT INTO feedback (Name, Email, Phone, Faculty, Message) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[Faculty]','$_POST[message]')";
    if(mysqli_query($conn, $sql)){
        echo "Data Submit!";
    }else{
        echo "Error";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form css grid</title>
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- fontawesome.cdn for ICONS-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--animatecss.cdn for ANIMATION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
    <style type="text/css">

{
    box-sizing: border-box;
}

body{
    background-image: bmap.jpg;
 
    color: #000000;
    line-height: 1.6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 1em;
}

.container{
    max-width:1170px;
    max-height: 200px;
    margin-left: auto;
    margin-right: auto;
    padding: 1em;
}

ul{
    list-style: none;
    padding: 0;
}

.brand{
    text-align: center;
}
.brand span{
    color: #fff;
}

.wrapper{
    box-shadow: 0 0 20px 0 rgb(255,255,255);
} 

.wrapper {
    padding: 1em;
}

.company-info{
    background: #000000;
    text-align: center;
}

.company-info h3, .company-info ul{
    text-align: center;
    margin: 0 0 1rem 0;
}

.contact{
    background-color: white;
}

/* FORM CONTACTS
 MOBILE SIZE FIRST */

.contact form{
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
}

.contact form label{
    display: block;
}

.contact form p{
    margin:0; 
}

.contact form .full{
    grid-column: 1/3;
}

.contact form button, .contact form input, .contact form textarea{
    width: 100%;
    padding: 1em;
    border: 1px solid #000000;
}

.contact form button{
    background: #c9e6ff;
    border: 0;
    text-transform: uppercase;
}

.contact form button:hover, .contact form button:focus{
    background: #92bde7;
    color: #fff;
    outline:0;
    transition: background-color 0.5 s ease-out;
}

/* LARGE SCREENS */
@media(min-width:700px){
    .wrapper{
        display: grid;
        grid-template-columns: 1fr 2fr;
    }

    .wrapper>*{
        padding:2em;
    }

    .company-info h3, .company-info ul, .brand{
        text-align: left;
    }
}
</style>
</head>
<body background="bmap.jpg">
    <div class='container'>
        <h1 class='brand'><p style="color:white;">Hostel Seat Booking</p></h1>

        <!--animated bounceInLeft class for selection what will be animated-->
        <div class='wrapper animated bounceInLeft'>
            <div class='company-info'>
                <img src="0123.png" height="450" width="500">
               <!-----  <h3>Hostel Seat Booking</h3>
               <ul>
                    <li><i class="fa fa-road"></i> Time Square  A-404</li>
                    <li><i class="fa fa-phone"></i> 6352559858</li>
                    <li><i class="fa fa-envelope"></i> spr307@gmail.com</li>
                </ul-------->
        </div>
        <div class='contact'>
            <h3>Email Us</h3>
            <form action="#" method="POST">
                <p>
                    <label><b>Name</b></label>
                    <input type="text" name='name'> 
                </p>

                <p>
                    <label><b>Faculty</b></label>
                    <input type="text" name='Faculty'>
                </p>

                <p>
                    <label><b>Email Adress</b></label>
                    <input type="email" name='email'> 
                </p>

                <p>
                    <label><b>Phone Number</b></label>
                    <input type="text" name='phone'> 
                </p>

                <p class='full'>
                    <label><b>Message</b></label>
                    <textarea name="message" rows="5"></textarea> 
                </p>

                <p class='full'>
                    <button name="submit"><b><p style="color:white;">Submit</p></b></button>
                </p>
            </form>
        </div>
    </div>
   
</div>
</body>
</html>