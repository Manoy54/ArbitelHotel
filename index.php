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
    <title>Arbitel</title>
    <link rel="stylesheet" href="css/indexcss.css">
    <link rel="stylesheet" href="css/dropdown.css">
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
        <a href="index.php" id ="home" class = "nav-links"> Home </a>
        <a href="room.php" class = "nav-links"> Rooms</a>
        <a href="about.php" class = "nav-links"> About Us </a>
        <a href="contact.php" class = "nav-links">Contact </a>
        <a href="events.php" class = "nav-links">Events </a>
    </div>
</nav>

<!--  End Nav-Bar -->


<!--  Carousel Start  -->
<section class="carousel-testimonial-images">
    <div class="content-wrapper">
        <div class="text-section">
            <h1 id = "sona-lux" >Arbitel<br><span style = "color:#DFA974;"> a luxury Hotel</span> </h1>
            <p>Here are the best hotel booking sites, including recommendations for<br>international travel and for finding low-priced hotel rooms.</p>
        </div>


        <?php
        // Include the profile component
        include 'php/profile_component.php';
        ?>

        <div class="form-section">
            <h2>WELCOME TO OUR HOTEL</h2>

            <?php if ($user_display_name == "Guest"): ?>
                <!-- Show this if user is not logged in -->
                <p>Hello, Guest! Please log in or create an account to book your stay.</p>
                <div class="auth-links">
                    <a href="login.php" class="login-link">LOG IN</a>
                    <span class="separator">or</span>
                    <a href="createaccount.php" class="signup-link">SIGN UP</a>
                </div>
            <?php else: ?>
                <!-- Show this if user is logged in -->
                <p>Welcome back, <strong><?php echo htmlspecialchars($user_display_name); ?></strong>!</p>
                <p>Ready to book your next stay with us?</p>
                <a href="booking.php" class="booking-link">START BOOKING</a>
            <?php endif; ?>
        </div>

    </div>
    <br>
    <div class="carousel-navigation">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>

<!--  Carousel End -->


<!--  Mini About Us -->
<section class = "mini-about-us">

    <div class="divider">

        <div class = "divider-texts">
            <h6> About Us </h6>
            <h3> Hotel Built For You  </h3>
            <p> Nestled in the heart of the city,<br>
                with stunning views and exceptional service Enjoy easy access to<br>
                local attractions, dining, and entertainment, making it the perfect <br></p>
            <p> In the city’s vibrant center,<br>
                with stunning views and exceptional service.<br> Enjoy easy access to local attractions.</p>
            <a  href = "about.php" ><p   id = "read-more"> Read More </p></a>

        </div>

        <div class = "two-images">
            <img src = "img/hotellobby.jpg" alt = "haha">
            <img src = "img/hotelseaside.jpg" alt = "haha">
        </div>

    </div>

</section>


<section class = "our-services">

    <div class="services-text">
        <h6> What We Do </h6>
        <h1> Discover our Services </h1>
    </div>

    <div class="services-whole">

        <div class="services-container">
            <div class = "service-box">
                <i class="fa-solid fa-hotel"></i>
                <h3 class = "service-h3"> Travel Plan </h3>
                <p> Tailored itineraries and transportation arrangements to ensure a seamless and enjoyable travel experience.</p>
            </div>
            <div class = "service-box">
                <i class="fa-solid fa-utensils"></i>
                <h3 class = "service-h3"> Catering Services </h3>
                <p>Exquisite dining options featuring a variety of cuisines, perfect for special events or in-room meals.</p>

            </div>
            <div class = "service-box">
                <i class="fa-solid fa-baby-carriage"></i>
                <h3 class = "service-h3"> Baby Sitting </h3>
                <p> Professional childcare services that allow parents to relax while their children are cared for in a safe environment.</p>
            </div>
        </div>

        <div class="services-container2">
            <div class = "service-box">
                <i class="fa-solid fa-shirt"></i>
                <h3 class = "service-h3"> Laundry</h3>
                <p>Convenient laundry services to keep your clothes fresh and clean during your stay.
                </p>
            </div>
            <div class = "service-box">
                <i class="fa-solid fa-car"></i>
                <h3 class = "service-h3">Efficient transit </h3>
                <p> Reliable transportation services with experienced drivers to take you wherever you need to go.
                </p>
            </div>
            <div class = "service-box">
                <i class="fa-solid fa-wine-glass"></i>
                <h3 class = "service-h3"> Bar & Drink  </h3>
                <p> A vibrant bar offering a selection of cocktails, wines, and local beverages for guests to unwind and socialize.</p>
            </div>
        </div>
    </div>
</section>

<section class = "rooms">
    <div class = "room-boxes" id = "room-box1">
        <div class ="room-text" id = "room-text1">
            <p style = "font-family: Poppins, sans-serif;  font-weight: 300;font-size:2rem;  "> Regular Bedroom </p>
            <p style = "font-family: Poppins, sans-serif;  font-weight: 200;font-size:1rem;  "> Starting Price</p>
            <h6><span style = " color:#F7E7CE; font-size:3rem; font-family: Tinos, serif; ">  ₱2,900 </span> <span style ="color:whitesmoke;"> /perNight</span></h6>
            <div class = "details">
                  <div class = "description">
                    <ul class = "uls"> Size:  </ul>
                    <ul class = "uls"> Capacity:</ul>
                    <ul class = "uls">   Bed:  </ul>
                    <ul class = "uls"> Inclusions</ul>
                   </div>
                  <div class = "numbers">
                    <ul class = "uls"> 25 sqm </ul>
                    <ul class = "uls"> 2 max</ul>
                    <ul class = "uls">  Queen-size  </ul>
                    <ul class = "uls">Wifi, TV, AC...</ul>
                 </div>
            </div>
            <h5 class="more-details-h5"><a href="room.php" class="more-details-link">More Details</a></h5>
        </div>
    </div>
        <div class = "room-boxes"  id = "room-box2" >
                <div class ="room-text">
                <p style = " font-family: Poppins, sans-serif; font-weight: 300;font-size:2rem;  "> Master Bedroom </p>
                    <p style = "    font-family: Poppins, sans-serif; margin:0; font-weight: 200;font-size:1rem;  "> Starting Price</p>

                    <h6><span style = " color:#F7E7CE; font-size:3rem; font-family: Tinos, serif; ">  ₱10,500 </span> <span style ="color:whitesmoke;"> /perNight</span></h6>

                <div class = "details">
                <div class = "description">
                    <ul class = "uls"> Size: </ul>
                    <ul class = "uls"> Capacity:</ul>
                    <ul class = "uls">   Bed:  </ul>
                    <ul class = "uls"> Inclusions</ul>
                </div>
                <div class = "numbers">
                    <ul class = "uls">40 sqm</ul>
                    <ul class = "uls"> 2 max</ul>
                    <ul class = "uls">  King-size  </ul>
                    <ul class = "uls"> Wifi, TV, AC, Mini Bar...</ul>
                </div>
            </div>
                    <h5 class="more-details-h5"><a href="room.php" class="more-details-link">More Details</a></h5>
         </div>
        </div>
    <div class = "room-boxes" id = "room-box3">
        <div class ="room-text">
            <p style = "    font-family: Poppins, sans-serif;margin:0;  font-weight: 300;font-size:2.3rem;  "> Family Room</p>
            <p style = "    font-family: Poppins, sans-serif; margin:0;  font-weight: 200;font-size:1rem;  "> Starting Price</p>

            <h6><span style = " color:#F7E7CE; font-size:3rem; font-family: Tinos, serif; ">  ₱7,200 </span> <span style ="color:whitesmoke;"> /perNight</span></h6>
            <div class = "details">
                <div class = "description">
                    <ul class = "uls"> Size: </ul>
                    <ul class = "uls"> Capacity:</ul>
                    <ul class = "uls">   Bed:  </ul>
                    <ul class = "uls"> Inclusions</ul>
                </div>
                <div class = "numbers">
                    <ul class = "uls"> 65 sqm</ul>
                    <ul class = "uls"> 4-5 max </ul>
                    <ul class = "uls"> 2 king </ul>
                    <ul class = "uls">Wifi, TV, AC, Lounge...</ul>
                </div>
            </div>
            <h5 class="more-details-h5"><a href="room.php" class="more-details-link">More Details</a></h5>
        </div>
    </div>
    <div class = "room-boxes" id = "room-box4">
        <div class ="room-text" id ="rt-4">
            <p style = "    font-family: Poppins, sans-serif; font-weight: 300;font-size:2rem;  "> Suite </p>
            <p style = "    font-family: Poppins, sans-serif;  font-weight: 200; margin:0;  font-size:1rem;  "> Starting Price</p>

            <h6><span style = " color:#F7E7CE; font-size:3rem; font-family: Tinos, serif; ">  ₱19,500 </span> <span style ="color:whitesmoke;"> /perNight</span></h6>

            <div class = "details">
                <div class = "description">
                    <ul class = "uls"> Size: </ul>
                    <ul class = "uls"> Capacity:</ul>
                    <ul class = "uls">   Bed:  </ul>
                    <ul class = "uls"> Inclusions</ul>
                </div>
                <div class = "numbers">
                    <ul class = "uls"> 90 sqm </ul>
                    <ul class = "uls"> 8 max</ul>
                    <ul class = "uls"> 4 king-sized  </ul>
                    <ul class = "uls">Wifi, TV, AC, Premium...</ul>
                </div>
            </div>
            <h5 class="more-details-h5"><a href="room.php" class="more-details-link">More Details</a></h5>
        </div>
    </div>


<!-- Testimonials -->
</section>

<section class="testimonials">
    <i class="fi fi-sr-angle-left prev-arrow"></i>
    <div class="testimonial-boxes">
        <div class="testimonial-box">
            <p class="t-p">TESTIMONIALS</p>
            <p class="t-header">What Customer Says? </p>
            <p class="t-sentence">
                I had an amazing stay at this hotel! The staff was incredibly friendly and went out of their way to make us feel welcome. The room was pristine and offered stunning views of the city. I can't wait to return on my next trip!            </p>
            <div class="stars-text">
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>

                <p> - Noriel Malate</p>
            </div>
            <img src = "img/noriel1.png">
        </div>
        <!-- Testimonial Box 2 -->
        <div class="testimonial-box">
            <p class="t-p">TESTIMONIALS</p>
            <p class="t-header">What Customer Says? </p>
            <p class="t-sentence">
                This hotel exceeded all my expectations! The amenities were top-notch, and the location was perfect for exploring the area. I especially loved the complimentary breakfast; it was delicious and varied. Highly recommend!              </p>
            <div class="stars-text">
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>

                <p> - Lebron James</p>
            </div>
            <img src = "img/lolobron.jpg">
        </div>
        <!-- Testimonial Box 3 -->
        <div class="testimonial-box">
            <p class="t-p">TESTIMONIALS</p>
            <p class="t-header">What Customer Says? </p>
            <p class="t-sentence">
                I booked a weekend getaway and couldn't have been happier with my choice. The spa services were divine, and the pool area was a relaxing oasis. The attention to detail in the decor and service made my stay truly special. Thank you for a wonderful experience!            </p>
            <div class="stars-text">
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>
                <i class="fi fi-ss-star"></i>

                <p> - John Loyd Cuario</p>
            </div>
            <img src = "img/loyd.jpg">
        </div>
    </div>
    <i class="fi fi-sr-angle-right next-arrow"></i>

</section>
<!-- END OF Testimonials -->

<!-- Start News-Section  -->

<section class ="news-section">

    <div class = "new-texts">
    <p class ="hotel-news"> HOTEL NEWS</p>
    <h1> Event Highlights</h1>
    </div>

    <div class ="new-container-grid">

        <div class = "box-news" id = "box-news1" style ="grid-area: box1">
            <div class = "colored-header">
                <p class = "box-colored"> TRAVEL ESCAPADE</p>
            </div>
            <p class ="box-header">  Coastal Excursion</p>
            <div class = "box-date-icon">
                <i class="fa-regular fa-clock"></i>
                 <p class ="box-date"> May 20 2025</p>
             </div>
        </div>

        <div class = "box-news"  id = "box-news2" style ="grid-area: box2">
            <div class = "colored-header">
                <p class = "box-colored"> WEDDING FESTS</p>
            </div>
            <p class ="box-header"> Celebrity Nuptials</p>

            <div class = "box-date-icon">
                <i class="fa-regular fa-clock"></i>
                <p class ="box-date"> June 5 1025</p>
            </div>
        </div>
        <div class = "box-news" id = "box-news3" style ="grid-area: box3">
            <div class = "colored-header">
                <p class = "box-colored"> HOLIDAY GETAWAY </p>
            </div>
            <p class ="box-header">  Holiday Celebrations</p>

            <div class = "box-date-icon">
                <i class="fa-regular fa-clock"></i>
                <p class ="box-date"> December 22 2025</p>
            </div>
        </div>
        <div class = "box-news" id = "box-news4" style ="grid-area: box4">
            <div class = "colored-header">
                <p class = "box-colored"> MENU TWISTS </p>
            </div>
            <p class ="box-header">  Menu Expansion</p>

            <div class = "box-date-icon">
                <i class="fa-regular fa-clock"></i>
                <p class ="box-date"> July 29 2025</p>
            </div>
        </div>
        <div class = "box-news" id = "box-news5" style ="grid-area: box5">
            <div class = "colored-header">
                <p class = "box-colored"> YOGA SESSIONS </p>
            </div>
            <p class ="box-header">  Wellness Yoga Session</p>

            <div class = "box-date-icon">
                <i class="fa-regular fa-clock"></i>
                <p class ="box-date"> Sept.20 1025</p>
            </div>
        </div>

        </div>

</section>



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



<script src="js/index.js"></script>
<script src="js/dropdown.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.0/flowbite.min.js"> </script>
</body>
</html>

