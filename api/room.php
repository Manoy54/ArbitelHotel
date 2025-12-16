<?php
// Example of how to include the profile component in any page

// Make sure to start the session at the top of your file
session_start();

// Your other PHP code...

// Then where you want the profile container to appear:
include 'php/profile_component.php';

// Rest of your HTML/PHP code...z
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="css/roomscss.css">
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
        <a href="index.php"  class = "nav-links"> Home </a>
        <a href="room.php" id ="home" class = "nav-links"> Rooms</a>
        <a href="about.php" class = "nav-links"> About Us </a>
        <a href="contact.php" class = "nav-links">Contact </a>
        <a href="events.php" class = "nav-links">Events </a>

    </div>
</nav>





<!--  End Nav-Bar -->

<div class="about-head">
    <h2 id = "about-us-header">Rooms</h2>
    <p id ="about-us-sub">Home<span style="color: grey;"> > Rooms</span></p>
</div>


<!-- Regular Room -->
<section class = "rooms-section">

<div class="rooms-title">
        <span class="line left"></span>
        <span class="title">Regular Rooms</span>
        <span class="line right"></span>
    </div>

    <div class = "rooms-row">

        <!-- Regular Rooms Category -->

        <div class = "room-box" >
            <div class = "room-img" id = "room-img3"></div>
            <div class = "room-text">

                <!-- Economy  -->
                <h5> Economy</h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱2,900.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 22 sqm </p>
                        <p class = "uls"> 1-2 guests</p>
                        <p class = "uls">  Single </p>
                        <p class = "uls"> Basic Linens, Basic Amenities ( Wifi, AC ), Coffee Maker, TV,  </p>
                    </div>
                </div>
                <button class="select-button" data-price="2900" data-room-name="Economy" onclick="redirectToBooking('Economy', 2900)">SELECT</button>            </div>
        </div>

        <!-- Standard  -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img1"></div>
            <div class = "room-text">
                <h5> Standard </h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱3,500.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 28 sqm </p>
                        <p class = "uls"> 2 guests</p>
                        <p class = "uls"> Full-Sized  </p>
                        <p class = "uls">Economy Features, Work Desk/Chair, Mini Fridge</p>
                    </div>
                </div>
                <button class="select-button" data-price="3500" data-room-name="Standard" onclick="redirectToBooking('Standard', 3500)">SELECT</button>            </div>
        </div>

        <!-- Deluxe  -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img2"></div>
            <div class = "room-text">
                <h5> Deluxe </h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱5,800.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 32 sqm </p>
                        <p class = "uls">2-3 guests</p>
                        <p class = "uls">  Queen  </p>
                        <p class = "uls">Standard Features, Premium Bedding, Bathtub  </p>
                    </div>
                </div>
                <button class="select-button" data-price="5800" data-room-name="Deluxe" onclick="redirectToBooking('Deluxe', 5800)">SELECT</button>            </div>
        </div>



    </div>
</section>
<!-- END Regular Rooms Category -->

<!-- MasterBed Rooms Category -->
<section class = "rooms-section">

    <div class="rooms-title">
        <span class="line left"></span>
        <span class="title">MasterBed Rooms</span>
        <span class="line right"></span>
    </div>

    <div class = "rooms-row">
        <!-- Luxury Master -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img4"></div>
            <div class = "room-text">
                <h5> Luxury Master </h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱10,500.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 45 sqm </p>
                        <p class = "uls"> 2-3 guests</p>
                        <p class = "uls">  King  </p>
                        <p class = "uls">Premium Linens,Minibar, Smart TV, Work Desk</p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>

        <!-- Executive Master -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img5"></div>
            <div class = "room-text">
                <h5> Executive Master </h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱12,000.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 40 sqm </p>
                        <p class = "uls"> 3-4 guests</p>
                        <p class = "uls">  King  </p>
                        <p class = "uls">Luxury Features, Larger Tub, Minibar, Filled Fridge </p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>

        <!-- Preimum Master -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img6"></div>
            <div class = "room-text">
                <h5> Premium Master </h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱14,300.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 55 sqm </p>
                        <p class = "uls"> 3-5 guests</p>
                        <p class = "uls">  King  </p>
                        <p class = "uls">Executive Features, Dining area, Lounge, Butler Service </p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>
    </div>
</section>

<!-- END MasterbedRooms Category-->

<!-- Family Rooms Category  -->
<section class = "rooms-section">

    <div class="rooms-title">
        <span class="line left"></span>
        <span class="title">Family Rooms</span>
        <span class="line right"></span>
    </div>

    <div class = "rooms-row">
        <!-- Tri Bed -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img7"></div>
            <div class = "room-text">
                <h5> Tri-Bed</h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱7,200.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 38 sqm </p>
                        <p class = "uls"> 3-6 guests</p>
                        <p class = "uls" > 3 Full-Sized </p>
                        <p class = "uls">Larger Space, Large Fridge, Children Amenities</p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>

        <!-- Triple Room -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img8"></div>
            <div class = "room-text">
                <h5> Triple Room</h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱8,500.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 42 sqm </p>
                        <p class = "uls"> 4-6 guests</p>
                        <p class = "uls" id ="fr2">  1 Queen, 2 Full-size  </p>
                        <p class = "uls">Tri Bed Features, Kitchenette, Sound Proofing, Extra Linens</p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>

        <!-- Family Suite -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img9"></div>
            <div class = "room-text">
                <h5> Family Suite</h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱12,000.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 50 sqm </p>
                        <p class = "uls"> 4-7 guests</p>
                        <p class = "uls" id ="fr3">  2 Queen, 2 Full-Size  </p>
                        <p class = "uls">Triple Room Features, Larger Lounge, Full Kitchen</p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>
    </div>
</section>

<!--  END Family Category  -->

<!-- Suites Category-->
<section class = "rooms-section">

    <div class="rooms-title">
        <span class="line left"></span>
        <span class="title"> Suites</span>
        <span class="line right"></span>
    </div>


    <div class = "rooms-row">
        <!-- Junior Suite -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img10"></div>
            <div class = "room-text">
                <h5> Junior</h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱19,500.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 48 sqm </p>
                        <p class = "uls"> 2-4 guests</p>
                        <p class = "uls">  2 King, 1 Queen  </p>
                        <p class = "uls">Premium Linens, Living Area, Minibar, Work Area </p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>

        <!-- Executive Suite -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img11"></div>
            <div class = "room-text">
                <h5> Executive </h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱24,300.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 60 sqm </p>
                        <p class = "uls"> 3-4 guests</p>
                        <p class = "uls">  3 King, 1 Queen   </p>
                        <p class = "uls">Junior Features,Guest Bathroom, Lounge, </p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>

        <!-- Regular Room3 -->
        <div class = "room-box" >
            <div class = "room-img" id = "room-img12"></div>
            <div class = "room-text">
                <h5> Presidential</h5>
                <p><span style = "color:#DFA974; font-size:2rem; font-family: Tinos, serif; ">  ₱37,800.00 </span> <span style ="color:white;"> /perNight</span></p>
                <div class = "room-details">
                    <div class = "room-description">
                        <p class = "uls"> Size:  </p>
                        <p class = "uls"> Capacity:</p>
                        <p class = "uls">   Bed:  </p>
                        <p class = "uls"> Inclusions</p>
                    </div>
                    <div class = "numbers">
                        <p class = "uls"> 80 sqm </p>
                        <p class = "uls"> 4-6 guests</p>
                        <p class = "uls">  3 King, 2 Queen   </p>
                        <p class = "uls">Executive Features, Private Chef, Private Butler</p>
                    </div>
                </div>
                <button class = "select-button"> SELECT</button>
            </div>
        </div>
        <!-- END Suite Category  -->

    </div>


</section>

<!-- END OF ROOMS  -->

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
        Copyright © 2025 All rights reserved | Designed for Hotel Project |    </div>

</section>


<script src = "js/room.js" defer></script>
<script src = "js/dropdown.js"></script>

<script>
    // Function to handle redirection to booking page
    function redirectToBooking(roomName, price) {
        // Determine the room category based on the room name
        let category = '';

        if (['Economy', 'Standard', 'Deluxe'].includes(roomName)) {
            category = 'Regular Room';
        } else if (['Luxury Master', 'Executive Master', 'Premium Master'].includes(roomName)) {
            category = 'MasterBed Room';
        } else if (['Tri-Bed', 'Triple Room', 'Family Suite'].includes(roomName)) {
            category = 'Family Room';
        } else if (['Junior', 'Executive', 'Presidential'].includes(roomName)) {
            category = 'Suite';
        }

        // Redirect to booking.php with parameters
        window.location.href = `booking.php?room=${encodeURIComponent(roomName)}&price=${price}&category=${encodeURIComponent(category)}`;
    }

    // Apply onclick handlers to all SELECT buttons
    document.addEventListener('DOMContentLoaded', function() {
        const selectButtons = document.querySelectorAll('.select-button');

        selectButtons.forEach(button => {
            // Only add onclick if it doesn't already have one
            if (!button.hasAttribute('onclick')) {
                const roomBox = button.closest('.room-box');
                if (roomBox) {
                    const roomName = roomBox.querySelector('h5').textContent.trim();
                    const priceText = roomBox.querySelector('span[style*="color:#DFA974"]').textContent.trim();
                    const price = parseFloat(priceText.replace(/[^0-9.]/g, ''));

                    button.setAttribute('onclick', `redirectToBooking('${roomName}', ${price})`);
                }
            }
        });
    });
</script>

<script src="js/dropdown.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.0/flowbite.min.js"> </script>
</body>
</html>

