<?php
// 1. Start session
session_start();

// 2. If no user is logged in, redirect to login
if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// 3. Include profile component (now that we know the user is logged in)
include 'php/profile_component.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/dropdown.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_orange.css">


    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Julius+Sans+One&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Julius+Sans+One&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Martel:wght@200;300;400;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Myeongjo&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- FontAwesome (Latest Version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <!-- Flaticon Icons (Regular Rounded) -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css">

    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- BootStrap -->
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.0/flowbite.min.css" rel="stylesheet">


</head>
<body>

<!-- Head Links -->

<!-- Head Links -->

<div class="top-links">

    <div class="links">
        <div class="item1">
            <i class="fi fi-rr-phone-call"></i>
            <p>0920434343</p>
        </div>
        <div id="standing-hr"></div>
        <div class="item2">
            <i class="fa-regular fa-envelope"></i>
            <p>Main@gmail</p>
        </div>
    </div>

    <div class="right-elements">
        <div class="social-media-icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>

        <div class="booking-now" id="profile-container">
            <i class="fa-regular fa-user"></i>
            <p><?php echo htmlspecialchars($user_display_name); ?></p>
            <div class="dropdown-menu">
                <div class="welcome-text">Welcome Back</div>
                <div class="user-name"><?php echo htmlspecialchars($user_display_name); ?></div>
                <div class="menu-items">
                    <a href="Profile.php">Dashboard</a>
                    <a href="login.php" class="sign-out">Sign Out</a>
                </div>
            </div>
        </div>

    </div>

</div>

<!--  End Head Links -->

<!--  Nav-Bar -->

<nav class = "navbar">
    <h3> Arbitel</h3>
    <div class = "navbar-links">
        <a href="index.php"  class = "nav-links"> Home </a>
        <a href="room.php"   class = "nav-links"> Rooms</a>
        <a href="about.php" class = "nav-links"> About Us </a>
        <a href="contact.php" class = "nav-links">Contact </a>
        <a href="events.php" class = "nav-links">Events </a>

    </div>
</nav>

<!--  End Nav-Bar -->

<div class="about-head">
    <h2 id = "about-us-header"> Rooms Booking</h2>
    <p id ="about-us-sub">Rooms<span style="color: grey;"> > Book</span></p>
</div>



<!-- Booking Date -->

<!-- End Booking Date -->

<!-- Booking Forms  -->

<h2 id = "booking-h2"> Booking Form </h2>

<div class = "booking-warning">
    <i class="fa-solid fa-circle-exclamation"></i>
    <p> Please check all the details before confirming </p>
</div>

<h3 id ="contact-info-header"> Contact Information </h3>
<section class = "booking-forms">

    <div class = "book-form">
        <input type = "text" placeholder="Firstname" class = "booking-box" id = "box1" style = "grid-area: box1" >
        <input  type = "text" placeholder="Lastname" class = "booking-box" id = "box2" style = "grid-area: box2"></input>
        <input  type = "text" placeholder="Email" class = "booking-box" id = "box3" style = "grid-area: box3"></input>
        <input type = "text" placeholder="Phone Number"  class = "booking-box" id = "box4" style = "grid-area: box4"></input>
        <input type = "text" placeholder="Address" class = "booking-box" id = "box5" style = "grid-area: box5"></input>
        <div  class = "booking-box" id = "box6" style = "grid-area: box6">SPECIAL INSTRUCTIONS</div>
        <textarea placeholder="" class="booking-box" id="box7" style="grid-area: box7"></textarea>
    </div>

    <div class="book-summary">
        <div class="book-summary-box" id="book-summaryb1" style="grid-area: book-box1;">
            <h6> BOOKING SUMMARY</h6>
        </div>

        <!--Category of the Room -->
        <div class="book-summary-box"  id="book-summaryb2" style="grid-area: book-box2;">
            <p>Regular Room</p>
        </div>
        <div class="book-summary-box" id="book-summaryb3" style="grid-area: book-box3;">
            <p> Standard Room</p>
        </div>
        <div class="book-summary-box" id="book-summaryb4" style="grid-area: book-box4;">
            <p> One Night</p>
        </div>
        <!-- Sample Value -->
        <div class="book-summary-box" id="book-summaryb5" style="grid-area: book-box5;">
            <p> P 1500.50</p>
        </div>
        <div class="book-summary-box" id="book-summaryb6" style="grid-area: book-box6;">
            <p> Service Charge</p>
        </div>
        <!-- Sample Value -->
        <div class="book-summary-box" id="book-summaryb7" style="grid-area: book-box7;">
            <p> P 600</p>
        </div>
        <div class="book-summary-box" id="book-summaryb8" style="grid-area: book-box8;">
            <p> VAT</p>
        </div>
        <!-- Sample Value -->
        <div class="book-summary-box" id="book-summaryb9" style="grid-area: book-box9;">
            <p> P 566</p>
        </div>
        <div class="book-summary-box" id="book-summaryb10" style="grid-area: book-box10;">
            <p>Check In </p>
        </div>
        <div class="book-summary-box" id="book-summaryb11" style="grid-area: book-box11;">
            <input type="date" class="styled-date">
        </div>
        <div class="book-summary-box" id="book-summaryb12" style="grid-area: book-box12;">
            <p>Check Out</p>
        </div>
        <div class="book-summary-box" id="book-summaryb13" style="grid-area: book-box13;">
            <input type="date" class="styled-date">
        </div>
        <div class="book-summary-box" id="book-summaryb14" style="grid-area: book-box14;">
            <p> Total Price</p>
        </div>
        <div class="book-summary-box" id="book-summaryb15" style="grid-area: book-box15;">
            <p> P 6056.00</p>
        </div>
        <div class="book-summary-box" id="book-summaryb16" style="grid-area: book-box16;">
            <button > CONFIRM </button>
        </div>

    </div>


</section>

<!-- End  Booking Forms  -->


<section class = "footer">
    <div class = "footer-texts">
        <div class = "footer-text-box" id = "ftb1" style="grid-area: ftbox1">
            <h2 id="footer-h2"> Arbitel </h2>
            <p> We motivate and connect with millions of <br> travelers through 90 local websites.</p>

            <div class = "footer-icons">
                <div class = "footer-icon-circle">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class = "footer-icon-circle">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class = "footer-icon-circle">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class = "footer-icon-circle">
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class = "footer-text-box" id = "ftb2" style="grid-area: ftbox2">
            <p id ="contact-us"> CONTACT US </p>
            <p> (63+) 0923525925</p>
            <p>  arbitel@gmail.com</p>
            <p> Rizal Street, Legazpi City </p>
            <p> Albay, Philippines</p>

        </div>
        <div class = "footer-text-box" id = "ftb3" style="grid-area: ftbox3">
            <p id ="contact-us"> OUR BRANCHES </p>
            <p> Quezon City</p>
            <p> Cam Sur</p>
            <p> Boracay Island </p>
            <p> Baguio City</p>

        </div>
    </div>
    <div class = "lower-footer">
        Copyright © 2025 All rights reserved | Designed for Hotel Project |    </div>

</section>




<script src = "js/booking.js"> </script>
<script src="js/dropdown.js"></script>
<!-- Include this in your booking.php file, before the closing </body> tag -->

<script>

</script>

</body>
</html>
