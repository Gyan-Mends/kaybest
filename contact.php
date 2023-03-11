<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @media only screen and (max-width:750px) {
            #input {
                width: 330px !important;
            }
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Assets -->
    <!-- Assets -->
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="Assets/all.css">
    <link rel="stylesheet" href="Assets/aos.css">
    <link rel="stylesheet" href="Assets/bootstrap.css">

</head>

<body>

    <!-- navigation bar -->
    <!-- navigation bar -->
    <nav id="nav" class="navbar navbar-expand-lg navbar-light ">
        <a id="kaybesttraveltour" class="navbar-brand" href="#"><b>KayBest Travel & Tour</b></a>
        <button id="fa-bars" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <!-- home page -->
                <hr>
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"> Home</a>
                </li>
                <hr>

                <!-- tour destination page-->
                <li class="nav-item ">
                    <a class="nav-link" href="destination.html">Destination</a>
                </li>
                <hr>

                <!-- tour page -->
                <li class="nav-item ">
                    <a class="nav-link" href="#">Tours</a>
                </li>
                <hr>

                <!-- about us page -->
                <li class="nav-item ">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <hr>

                 <!-- bookings page -->
                 <li class="nav-item ">
                    <a class="nav-link" href="bookings.php">Bookings</a>
                </li>
                <hr>

                <!-- contact us page -->
                <li class="nav-item ">
                    <a style="color: orangered !important; font-size: 20px !important;" class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- contact cover image -->
    <!-- contact cover image -->
    <div id="coverimage"
        style="background-image: url(images/carousel/TRAVEL-AND-TOUR-750x375.jpg);background: -webkit-linear-gradient(rgba(0,0,0,0.7), rgb(0,0,0,0.7)), url(images/carousel/TRAVEL-AND-TOUR-750x375.jpg); background-repeat: no-repeat; background-size: cover; ">
        <p data-aos="zoom-in" data-aos-duration="1000" id="cover_text" class="text-white">
            Contact Us
            <hr data-aos="fade-up" data-aos-duration="2000"
                style="width:100px ; border:1px solid orangered; margin-left:0px; margin-top:-20px;">
        </p>
    </div>

    <div class="text-center m-auto " id="destination_list">
        <P data-aos="zoom-in" data-aos-duration="2000" id="destination"><I>Talk to our team</I></P>
        <h3 data-aos="zoom-in" data-aos-duration="2000">Any Question? Feel Free to Contact Us</h3>
    </div>

    <form action="contact.php" method="post">
        <div class="container">
            <!-- name -->
            <!-- name -->
            <input id="input" style="width: 500px; height:50px;" class="form-control " name="name" placeholder="Enter your name" type="text">

            <!-- email -->
            <!-- email -->
            <input id="input" style="width: 500px; height:50px;" type="email" name="email" class="form-control mt-4 "
                placeholder="Enter your email">

            <!-- message -->
            <!-- message -->
            <textarea style="width: 500px;" class="form-control mt-4" name="message" id="input" cols="30" rows="8"
                placeholder="Leave your message here"></textarea>

            <!-- submit -->
            <!-- submit -->    
            <input style="font-size: 20px; height: 60PX;" id="appointmentButton" type="Submit" name="submit" value="SEND A MESSAGE">
        </div>
    </form>

    <!-- location-->
    <!-- location-->
    <div data-aos="zoom-in" data-aos-duration="2000" id="location">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.2429921847674!2d-1.761895785736614!3d4.89894474127195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfe779fbbbe8ab2d%3A0x6f82f3a0c2e1d637!2sMarket%20Cir%2C%20Takoradi!5e0!3m2!1sen!2sgh!4v1659248342118!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- footer -->
    <!-- footer -->
    <footer>
        <div class="row">

            <div data-aos="zoom-in" data-aos-duration="2000" class="col-sm-4 text-center m-auto">
                <div class="text-center m-auto">
                    <P style="font-size: 27px;" id="destination"><I>Contact Us</I></P>
                </div>
                <p class="text-white">
                    <i class="fa fa-phone "></i> +233 548 348 485
                </p>
                <p class="text-white">
                    <i class="fa fa-envelope "></i> gyankwadwomends2001@gmail.com
                </p>
                <p class="text-white">
                    <i class="fa fa-map-marker "></i> Takoradi,market circle
                </p>
            </div>

            <div data-aos="zoom-in" data-aos-duration="2000" class="col-sm-4 mt-4 text-center m-auto">
                <div class="text-center m-auto">
                    <P style="font-size: 27px;" id="destination"><I>Quick Links</I></P>
                </div>
                <div>
                    <a class="nav-link" href="index.html"> Home</a>

                    <a class="nav-link" href="">Destination</a>

                    <a class="nav-link" href="#">Tours</a>

                    <a class="nav-link" href="about.html">About</a>

                    <a class="nav-link" href="bookings.php">Bookings</a>

                    <a class="nav-link" href="contact.php">Contact</a>
                </div>
            </div>

            <div data-aos="zoom-in" data-aos-duration="2000" class="col-sm-4 mt-4 text-center m-auto">
                <div class="text-center m-auto">
                    <P style="font-size: 27px;" id="destination"><I>Follow Us</I></P>
                    <p style="font-size: 15px; color: white; text-align: center;">
                        Follow us on our social media platforms to join us in our conversation. Feel free to ask any question that borders your mind too on any of our platforms. 
                    </p>
                </div>
                <div class="ml-4">
                    <i class="fab fa-facebook fa-2x"></i>
                    <a href="https://wa.me/+233 0248139469"> <i class="fab fa-whatsapp fa-2x"></i></a>
                    <i class="fab fa-instagram fa-2x"></i>
                    <a href=""> <i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <!--Script -->
    <!--Script -->
    <script src="Assets/jquery-3.6.0.min.js"></script>
    <script src="Assets/bootstrap.js"></script>
    <script src="Assets/aos.js"></script>
    <script src="Assets/all.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<?php
if(isset($_POST["submit"])){
    //database connection
    $db_connection=mysqli_connect("localhost","root","","kabest_db");

    //reading data from the webpage
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    //inserting data into database
    $query = mysqli_query($db_connection,"INSERT INTO contact_us (`NAME`,EMAIL,`MESSAGE`) VALUES('$name','$email','$message')");

    //checking if connected
    if($query){
        echo'<script>';
        echo 'alert("Data inserted successfully")';
        echo '</script>';
    }else{
        echo'<script>';
        echo 'alert("Data not inserted")';
        echo '</script>';
    }
}
?>