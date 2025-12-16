<?php
// Example of how to include the profile component in any page

// Make sure to start the session at the top of your file
session_start();

// Your other PHP code...

// Then where you want the profile container to appear:
include 'php/profile_component.php';

// Rest of your HTML/PHP code...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="your-custom-style.css">

    <!-- Google Fonts -->
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
        <a href="room.php" class = "nav-links"> Rooms</a>
        <a href="about.php" id ="home" class = "nav-links"> About Us </a>
        <a href="contact.php" class = "nav-links">Contact </a>
        <a href="events.php" class = "nav-links">Events </a>
    </div>
</nav>

<!--  End Nav-Bar -->



<div class="about-head">
    <h2 id = "about-us-header">About us</h2>
    <p id ="about-us-sub">Home<span style="color: grey;"> > About</span></p>
</div>

<div class="container">

    <div class="flex-section">

        <div class="text">
            <h1>Welcome To  <span style ="color:#DFA974"> Arbitel</span>.</h1>
            <p id ="built-in">
                Built in 1910 during the Belle Epoque period, this hotel is located in
                the center of Paris, with easy access to the city's tourist attractions.
                It offers tastefully decorated rooms.
            </p>
        </div>

        <div class="list">
            <ul>
                <li>Cozy Room Discounts</li>
                <li>Free Daily Breakfast</li>
                <li>Daily Laundry Service</li>
                <li>Complimentary Wi-Fi</li>
                <li>Food & Drink Discounts</li>
            </ul>
        </div>

    </div>
</div>

<!-- Luxury Hotel Section -->
<div class="luxury-hotel-section">
    <div class="luxury-hotel-container">
        <div class="hotel-image">
            <img src="img/main-about.jpg" alt="Luxury Hotel Room">
            <div class="image-overlay">
                <div class="award-badge">
                    <i class="fa-solid fa-award"></i>
                </div>
            </div>
        </div>
        <div class="hotel-info">
            <div class="hotel-subtitle">LUXURY STAY YOU DESERVE</div>
            <h2 class="hotel-title">LUXURY REST HOTEL IN CITY<br>LEGAZPI CITY</h2>
            <p class="hotel-description">
                Tucked away from the busy streets of the city lies a modern luxury retreat for the weary traveler. Arbitel hotels offers exceptional service, elegant accommodations, and an unforgettable experience that will have you coming back through our doors.
            </p>
            <div class="hotel-stats">
                <div class="stat-item">
                    <span class="stat-number">250k</span>
                    <span class="stat-label">Reviews</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.9+</span>
                    <span class="stat-label">Customer Rating</span>
                </div>
            </div>
            <a href="room.php" class="book-now-btn">BOOK NOW</a>
        </div>
    </div>
</div>

<br>

<!--
<div class="container-images">
    <div class="images-boxes">
        <div class="image" id="cont-img1" style="grid-area: img-box1"></div>
        <div class="image" id="cont-img2" style="grid-area: img-box2"></div>
        <div class="image" id="cont-img3" style="grid-area: img-box3"></div>
    </div>
</div>
-->

<br>
<br>
<br>
<br>
<!-- COVER VID SECTION -->
<section class="cover">
    <img src="img/hotelseaside.jpg" alt="Hotel Seaside View" id="hotel-video">
    <div class="brand-identity">
        <h2 class="brand-name">arbitel</h2>
        <p class="brand-est">EST 2025</p>
    </div>

</section>

<!-- END -->


<br>
<br>

<div class= "container">
    <h6 class="gallery-text1" > GALLERY</h6>
    <h6 class="gallery-text" > Our Works </h6>
</div>

<div class="gallery">
    <div class="gallery-item bed">
        <a href="#">
            <img src="img/service.jpg" alt="bed">
            <div class="overlay">Room Service</div>
        </a>
    </div>
    <div class="gallery-item hallway">
        <a href="#">
            <img src="img/staff.jpg" alt="hallway">
            <div class="overlay">Staffs</div>
        </a>
    </div>
    <div class="gallery-item room">
        <a href="#">
            <img src="img/hotel-wed.jpg" alt="room">
            <div class="overlay">Events</div>
        </a>
    </div>
    <div class="gallery-item stairs">
        <a href="#">
            <img src="img/staff2.jpg" alt="stairs">
            <div class="overlay">Room Cleaning</div>
        </a>
    </div>
</div>
<br>
<br>

<section class = "footer">
    <div class = "footer-texts">
        <div class = "footer-text-box" id = "ftb1" style="grid-area: ftbox1">
            <h2 id="footer-h2">  Arbitel </h2>
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
            <p>  shangri-la@gmail.com</p>
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

<script src="js/dropdown.js"></script>
</body>
</html>