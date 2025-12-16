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
    <title>Events Booking</title>
    <link rel="stylesheet" href="css/events-booking.css">
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
        <a href="room.php"  class = "nav-links"> Rooms</a>
        <a href="about.php" class = "nav-links"> About Us </a>
        <a href="contact.php" class = "nav-links">Contact </a>
        <a href="events.php"  id ="home" class = "nav-links">Events </a>

    </div>
</nav>

<!--  End Nav-Bar -->

<div class="about-head">
    <h2 id = "about-us-header">Events Booking</h2>
    <p id ="about-us-sub">Events<span style="color: grey;"> > Book</span></p>
</div>

<!------------------------------------------------------------------------>

<h2 id = "booking-h2"> Booking Form </h2>
<div class = "booking-warning">
    <i class="fa-solid fa-circle-exclamation"></i>
    <p> Please check all the details before confirming </p>
</div>



<!-- BOOKING FORMS START -->

<section class = "booking-forms">

    <div class="event-form-container">
        <div class="logo-box">
            <div class="book-summary">
                <h4 class="summary-title">Events Summary</h4>
                <span style = "color:#DFA974" class="summary-label">Venue Name</span>

                <div class="summary-main-item">
                    <span class="summary-value">Room Name</span>
                    <!-- This is where the initial price is at -->
                    <span class="summary-price">₱20,500</span>
                </div>

                <div class="charge">
                    <div class="charge-header">
                        <span class ="catering">Catering per Head</span>
                        <span class ="catering" >₱250</span>
                    </div>

                    <div class="charge-item">
                        <span class="charge-label">Number of Head</span>
                        <span class="charge-value">50</span>
                    </div>

                    <div class="charge-item">
                        <span class="charge-label">Number of Days</span>
                        <span class="charge-value">2</span>
                    </div>

                    <div class="charge-item">
                        <span class="charge-label">Total Catering Charge</span>
                        <span class="charge-value">₱10,500</span>
                    </div>

                    <div class="charge-item">
                        <span class="charge-label">Service Charge</span>
                        <span class="charge-value">₱1,242</span>
                    </div>

                    <div class="charge-item">
                        <span class="charge-label">VAT</span>
                        <span class="charge-value">₱564</span>
                    </div>
                </div>

                <div class="summary-total">
                    <span  style = "color:#DFA974" class="total-label">Total Charge</span>
                    <span class="total-value">₱50,000</span>
                </div>
            </div>


        </div>

        <div class="form-content">
            <h2 class="form-title">Booking Form</h2>

            <div class="event-form-grid">
                <div class="date-input-wrapper" style="grid-area: box1">
                    <label for="event-form-box1" class="date-label">Start Date</label>
                    <input class="event-form-box" type="date" id="event-form-box1">
                </div>
                <div class="date-input-wrapper" style="grid-area: box2">
                    <label for="event-form-box2" class="date-label">End Date</label>
                    <input class="event-form-box" type="date" id="event-form-box2">
                </div>

                <input class="event-form-box" placeholder="Number of Attendees" type="number" id="event-form-box3" style="grid-area: box3">

                <div class="time-container" style="grid-area: box4">
                    <div class="time-input-wrapper">
                        <label for="event-form-box4-start" class="time-label">Start Time</label>
                        <input class="time-input" type="time" id="event-form-box4-start">
                    </div>
                    <div class="time-input-wrapper">
                        <label for="event-form-box4-end" class="time-label">End Time</label>
                        <input class="time-input" type="time" id="event-form-box4-end">
                    </div>
                </div>

                <input class="event-form-box" placeholder="Company Name" id="event-form-box5" style="grid-area: box5">
                <input class="event-form-box" placeholder="Event Group Name" id="event-form-box6" style="grid-area: box6">
                <input class="event-form-box" placeholder="Contract Person ( Fullname )" id="event-form-box7" style="grid-area: box7">
                <input class="event-form-box" placeholder="Email Address" id="event-form-box8" style="grid-area: box8">
                <input class="event-form-box" placeholder="Phone Number" id="event-form-box9" style="grid-area: box9">
                <input class="event-form-box" placeholder="Event Type" type="text" id="event-form-box10" style="grid-area: box10">

                <div class="event-form-box" id="event-form-box11" style="grid-area: box11">
                    <p>Do you need a catering service</p>
                    <label><input type="radio" name="need_option" value="Yes"> Yes</label>
                    <label><input type="radio" name="need_option" value="No"> No</label>
                </div>
`
                <div class="event-form-box" id="event-form-box12" style="grid-area: box12">
                    <p> Special Instructions</p>
                </div>

                <input class="event-form-box" id="event-form-box13" style="grid-area: box13; resize: none;"></input>

                <button type="button" id="event-form-box14" style="grid-area: box14"> CONFIRM </button>
            </div>
        </div>
    </div>
    <div class="booking-confirmation-modal" id="bookingModal">
        <div class="confirmation-content">
            <div class="confirmation-icon">✔</div>
            <h3>Booking Confirmed!</h3>
            <p>Your reservation has been successfully submitted.</p>
            <button class="close-modal-btn" id="closeModalBtn">Close</button>
        </div>
    </div>

</section>



<!-- END BOOKING FORMS-->


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



<script src="js/dropdown.js"></script>




<script src="/js/event-booking.js"></script>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.0/flowbite.min.js"> </script>
</body>
</html>

