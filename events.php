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
    <title> Events </title>
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/event-booking-additions.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/font@1.0.0/css/flaticon.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



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
        <a href="about.php" class = "nav-links"> About Us </a>
        <a href="contact.php" class = "nav-links">Contact </a>
        <a href="events.php"  id ="home"  class = "nav-links">Events </a>
    </div>
</nav>

<!--  End Nav-Bar -->


<div class="about-head">
    <h2 id = "about-us-header">Events</h2>
    <p id ="about-us-sub">Home<span style="color: grey;"> > Events</span></p>
</div>


<section class = "main-image">

    <div class = "middle-image" id ="middle-image-box">
    </div>

    <div class="events-info-grid">
        <div class="even-info-box" id="box1" style="grid-area: box1" >
            <p id = "events-header"> EVENTS</p>
            <p id = "first-box-header"> Arbitel WebSsys Project Bro</p>
            <p class = "box-p" >Our hotel hosts a variety of engaging events,
                from elegant gala dinners to lively themed parties,
                ensuring a memorable experience for all guests.
                Join us for special workshops and community gatherings
                that foster connection and celebration in a stunning setting.</p>
        </div>

        <div class="even-info-box" id="box2" style="grid-area: box2">
        </div>

        <div class="even-info-box" id="box3" style="grid-area: box3">
            <div class="icon-holder">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <p class = "box-header" >Personalized</p>
            <p class = "box-p" >Represents tailored experiences that make each guest feel valued and unique.</p>
        </div>

        <div class="even-info-box" id="box4" style="grid-area: box4">
            <div class="icon-holder">
                <i class="fa-solid fa-spa"></i>
            </div>
            <p class = "box-header" >Quality Amenities</p>
            <p class = "box-p" >Symbolizes modern technology and facilities for comfort and convenience.</p>
        </div>

        <div class="even-info-box" id="box5" style="grid-area: box5">
            <div class="icon-holder">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <p class = "box-header" >Skilled Staff</p>
            <p class = "box-p" >Our knowledgeable and attentive staff are committed to delivering exceptional service.</p>
        </div>

        <div class="even-info-box" id="box6" style="grid-area: box6">
            <div class="icon-holder">
                <i class="fa-solid fa-border-all"></i>
            </div>
            <p class = "box-header" >Versatile Spaces</p>
            <p  class = "box-p" >Our adaptable event spaces can be customized to suit any occasion at your desire</p>
        </div>


    </div>



</section>

<section class = "main-image2">

    <div class = "info-grid">

        <div class = "info-grid-box" id = "info-box1"></div>
             <div class = "info-grid-box" id = "info-box2">

                 <p id = "box1-h">PROFESSIONAL BUSINESS MEETINGS</p>
                 <p id = "box1-p">Our hotel provides a quiet, well-equipped environment ideal for focused business meetings, complete with high-speed Wi-Fi, ergonomic seating, and on-demand technical support to keep your agenda on track.</p>

                 <p id = "box1-h2">DYNAMIC CORPORATE CONFERENCES</p>
                 <p id = "box1-p2">Designed for larger gatherings, our conference facilities offer spacious layouts, advanced presentation tools, and flexible seating arrangements to support engaging, impactful corporate events.</p>


             </div>



        <div class = "info-grid-box" id = "info-box3">
            <h4 id ="latest"> Events  &  Meetings </h4>
            <hr>

            <div class = "box3-grid">
                <!-- Box 1 -->
                 <div class = "infob3-box" id ="ib3-box1" style ="grid-area:box1"></div>
                <!-- Box 2 -->
                    <div class = "infob3-box"  id ="ib3-box2" style ="grid-area:box2">
                        <p class = "box-3-mini"> Corporate </p>
                        <p class = "box-3-main">  CORPORATE RETREAT</p>
                        <p class = "box-3-p"  > Enjoy tailored corporate retreat packages with customizable meeting spaces, team-building activities, and comfortable accommodations.</p>
                     </div>
                <!-- Box 3 -->
                <div class = "infob3-box"  id ="ib3-box3" style ="grid-area:box3"></div>
                <!-- Box 4 -->
                <div class = "infob3-box" id ="ib3-box4" style ="grid-area:box4">
                    <p class = "box-3-mini"> Conference </p>
                    <p class = "box-3-main">  CONFERENCE MEETING</p>
                    <p class = "box-3-p"  >  Host your conference in our versatile meeting rooms, equipped with advanced audio-visual technology and catering services.</p>
                </div>

            </div>

        </div>

        <div class = "info-grid-box" id = "info-box4">
            <h4 id = "customer-p">Customer Review </h4>
            <hr id ="box4-hr">

            <div class = "box-4-review">
                <i class="fa-solid fa-quote-left"></i>
                <div class = "p-container">
                    <p>
                    I recently attended a corporate conference at this hotel,
                    and I was genuinely impressed. The meeting rooms were modern,
                    spacious, and perfectly set up for our needs.
                    From the audio-visual equipment to the comfortable seating and fast Wi-Fi,
                    everything was seamless. The staff was incredibly professional and attentive always ready
                    to assist with a smile. I would absolutely recommend this hotel for any business event
                    or professional gathering.
                    <br>
                    <br>

                     <span style="font-weight: 400"> Lebron James </span> &nbsp; -  &nbsp; Corporate Client
                    </p>

                </div>
                <img id = "lolobron-pic" src = "img/lolobron.jpg">

            </div>

        </div>

    </div>

</section>

<div class="events-venue-header">
    <hr id="hr-left">
    <h1>EVENTS VENUE</h1>
    <hr id="hr-right">
</div>



<section class = "events-venue">

    <!-- WHOLE EVENTS VENUE CONTAINER -->
    <div class = "events-boxes">

        <!---------------------------------------------------------------------------------->

        <!-- EVENT VENUE BOX1 -->
            <div class="event-box" id="event-box1">

                <div class="left">

                        <h3 class = "venue-header">Imperial Hall</h3>
                        <br>
                        <div class="price">
                            <p class = "starts-at">RATE</p>
                            <p class = "price-number">P57,500</p>
                        </div>
                        <br>
                        <div class="details">
                            <table class="details-table">
                                <tr>
                                    <td class = "info">Capacity</td>
                                    <td class = "detail"> 300 Guests</td>
                                </tr>
                                <tr>
                                    <td class = "info">Size:</td>
                                    <td class = "detail">650 sq. meters </td>
                                </tr>
                                <tr>
                                    <td class = "info">Ceiling Height</td>
                                    <td class = "detail">6 meters</td>
                                </tr>
                                <tr>
                                    <td class = "info">Primary Use:</td>
                                    <td class = "detail"> Conferences, gala dinners, corporate events</td>
                                </tr>
                                <tr>
                                    <td class = "info">Location</td>
                                    <td class = "detail">Ground floor, with private access</td>
                                </tr>
                            </table>

                            <p> <span style="font-family: 'Montserrat', sans-serif;
                                font-weight: 500;"> Description </span> <br>
                                The Grand Ballroom offers a sophisticated setting
                                ideal for corporate gatherings and formal
                                celebrations. It features advanced AV equipment including
                                an HD projector, surround sound, LED wall, and wireless
                                microphones—with customizable seating arrangements to suit
                                various event styles.</p>
                        </div>

                </div>

                <div class = "right">
                    <img src = "img/imperial-hall.jpg">
                    <button class="event-button" onclick="selectVenue('Imperial Hall', 'P57,500')"> SELECT </button>                </div>

        </div>

        <!---------------------------------------------------------------------------------->

        <!-- EVENT VENUE BOX2 -->

        <div class="event-box" id="event-box2">

            <div class="left">

                <h3 class = "venue-header">Executive Boardroom</h3>
                <br>
                <div class="price">
                    <p class = "starts-at">RATE</p>
                    <p class = "price-number">P25,000</p>
                </div>
                <br>
                <div class="details">
                    <table class="details-table">
                        <tr>
                            <td class = "info">Capacity</td>
                            <td class = "detail"> 20 Guests</td>
                        </tr>
                        <tr>
                            <td class = "info">Size:</td>
                            <td class = "detail">80 sq. meters </td>
                        </tr>
                        <tr>
                            <td class = "info">Ceiling Height</td>
                            <td class = "detail"> 3 meters</td>
                        </tr>
                        <tr>
                            <td class = "info">Primary Use:</td>
                            <td class = "detail"> Executive meetings, strategic planning, small team sessions</td>
                        </tr>
                        <tr>
                            <td class = "info">Location</td>
                            <td class = "detail"> 2nd floor, near business lounge</td>
                        </tr>
                    </table>

                    <p> <span style="font-family: 'Montserrat', sans-serif;
                                font-weight: 500;"> Description </span> <br>
                        The Executive Boardroom is a modern, private space
                        designed for focused discussions and high-level meetings.
                        It comes equipped with a smart TV, built-in video
                        conferencing system, wireless microphones, and a
                        high-speed internet connection—offering a seamless
                        environment for productive collaboration.</p>
                </div>

            </div>

            <div class = "right">
                <img src = "img/boardroom.jpg">
                <button class="event-button" onclick="selectVenue('Executive Boardroom', 'P25,000')"> SELECT </button>
            </div>

        </div>

        <!---------------------------------------------------------------------------------->

        <!-- EVENT VENUE BOX3 -->
        <div class="event-box" id="event-box3">

            <div class="left">

                <h3 class = "venue-header">Business Lounge</h3>
                <br>
                <div class="price">
                    <p class = "starts-at">RATE</p>
                    <p class = "price-number">P43,000</p>
                </div>
                <br>
                <div class="details">
                    <table class="details-table">
                        <tr>
                            <td class = "info">Capacity</td>
                            <td class = "detail"> 40 guests</td>
                        </tr>
                        <tr>
                            <td class = "info">Size:</td>
                            <td class = "detail">100 sq. meters </td>
                        </tr>
                        <tr>
                            <td class = "info">Ceiling Height</td>
                            <td class = "detail">3.5 meters</td>
                        </tr>
                        <tr>
                            <td class = "info">Primary Use:</td>
                            <td class = "detail">  Informal meetings, networking, business receptions</td>
                        </tr>
                        <tr>
                            <td class = "info">Location</td>
                            <td class = "detail">  Lobby level, adjacent to café and co-working area</td>
                        </tr>
                    </table>

                    <p> <span style="font-family: 'Montserrat', sans-serif;
                                font-weight: 500;"> Description </span> <br>
                        The Workshop Studio provides a flexible,
                        tech-enabled space ideal for interactive
                        sessions and hands-on learning. Equipped
                        with dual projectors, whiteboards, portable
                        sound system, and modular seating, it adapts
                        easily to various professional event needs.
                        </p>
                </div>

            </div>

            <div class = "right">
                <img src = "img/lounge.jpg">
                <button class="event-button" onclick="selectVenue('Business Lounge', 'P43,000')"> SELECT </button>
            </div>

        </div>

        <!---------------------------------------------------------------------------------->

        <!-- EVENT VENUE BOX4 -->
        <div class="event-box" id="event-box4">

            <div class="left">

                <h3 class = "venue-header">Garden Pavilion</h3>
                <br>
                <div class="price">
                    <p class = "starts-at">RATE</p>
                    <p class = "price-number">P64,500</p>
                </div>
                <br>
                <div class="details">
                    <table class="details-table">
                        <tr>
                            <td class = "info">Capacity</td>
                            <td class = "detail">  80 guests</td>
                        </tr>
                        <tr>
                            <td class = "info">Size:</td>
                            <td class = "detail">300 sq. meters </td>
                        </tr>
                        <tr>
                            <td class = "info">Ceiling Height</td>
                            <td class = "detail">Open-air with tent canopy</td>
                        </tr>
                        <tr>
                            <td class = "info">Primary Use:</td>
                            <td class = "detail">  Networking events, creative retreats, informal corporate gatherings</td>
                        </tr>
                        <tr>
                            <td class = "info">Location</td>
                            <td class = "detail"> Outdoor garden area, adjacent to main hotel wing</td>
                        </tr>
                    </table>

                    <p> <span style="font-family: 'Montserrat', sans-serif;
                                font-weight: 500;"> Description </span> <br>
                        The Garden Pavilion offers a refreshing semi-outdoor
                        venue surrounded by landscaped greenery, perfect for
                        relaxed and creative corporate functions. It includes
                        portable AV support, ambient lighting, wireless microphones,
                        and open seating layout options for a more informal yet
                        elegant event experience.

                    </p>
                </div>

            </div>

            <div class = "right">
                <img src = "img/outdoor.jpg">
                <button class="event-button" onclick="selectVenue('Garden Pavilion', 'P64,500')"> SELECT </button>
            </div>

        </div>
    </div>

</section>


<!-- FOOTER START -->
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
        Copyright © 2025 All rights reserved | Designed for Hotel Project |   </div>

</section>






<script src="js/dropdown.js"></script>
<script src="js/event-booking.js"></script>
<script>
    function selectVenue(name, price) {
        localStorage.setItem('selectedVenue', name);
        localStorage.setItem('selectedPrice', price);
        window.location.href = 'event-booking.php'; // Redirect to booking page
    }
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.0/flowbite.min.js"> </script>
</body>
</html>

