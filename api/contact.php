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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Us </title>
    <link rel="stylesheet" href="css/contact.css"/>
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/contact-modal.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="your-custom-style.css"/>



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
        <a href="about.php"  class = "nav-links"> About Us </a>
        <a href="contact.php" id ="home" class = "nav-links">Contact </a>
        <a href="events.php" class = "nav-links">Events </a>
    </div>
</nav>

<!--  End Nav-Bar -->




<div class="container contact-section">
    <div class="row">

        <div class="col-md-6">
            <h2 id = "col-md-6-h2">Contact Info</h2>

            <p><span style="font-family: 'Montserrat', sans-serif; color: #603808; font-weight: 500; font-size: 1rem;">ADDRESS:</span> <span style="font-family: 'Roboto', sans-serif; color: #603808; font-weight: 200; font-size: 1rem;">EMS Barrio, Legazpi City, Albay</span></p>
            <p><span style="font-family: 'Montserrat', sans-serif; color: #603808; font-weight: 500; font-size: 1rem;">EMAIL:</span> <span style="font-family: 'Roboto', sans-serif; color: #603808; font-weight: 200; font-size: 1rem;">Arbitel@gmail.com</span></p>
            <p><span style="font-family: 'Montserrat', sans-serif; color: #603808; font-weight: 500; font-size: 1rem;">PHONE:</span> <span style="font-family: 'Roboto', sans-serif; color: #603808; font-weight: 200; font-size: 1rem;">+63 912 345 6789</span></p>
            <p><span style="font-family: 'Montserrat', sans-serif; color: #603808; font-weight: 500; font-size: 1rem;">FACEBOOK:</span> <span style="font-family: 'Roboto', sans-serif; color: #603808; font-weight: 200; font-size: 1rem;">Arbitel Hotel</span></p>
            <p><span style="font-family: 'Montserrat', sans-serif; color: #603808; font-weight: 500; font-size: 1rem;">INSTAGRAM:</span> <span style="font-family: 'Roboto', sans-serif; color: #603808; font-weight: 200; font-size: 1rem;">@Arbitel_HotelPH</span></p>

            <div class="mt-4">
                <h5 >Transportation</h5> <br>

                <p><i class="fas fa-car me-2"></i> 15 min from <a href="https://bicolairport.ph/" style="text-decoration: none; color:#DFA974;">Legazpi Airport</a></p>
                <p><i class="fas fa-bus me-2"></i> 5 min from <a href="https://www.facebook.com/grandterminalphilippines/" style="text-decoration: none; color:#DFA974;">Legazpi Grand Terminal</a></p>
                <p><i class="fas fa-train me-2"></i> 10 min from <a href="#" style="text-decoration: none; color:#DFA974;">Legazpi Railway Station</a></p>

            </div>
        </div>


        <div class="col-md-6">
            <h2 id="col-md-6-h2-2">Send Us a Message</h2>
            <form id="contact-form">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your full name" required/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email address" required/>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Subject of your message"/>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" placeholder="Type message here..." required></textarea>
                </div>
                <button id="button-submit" type="submit" class="btn btn-success">SEND MESSAGE <i class="fas fa-paper-plane ms-2"></i></button>
            </form>
        </div>


    </div>


    <div class="row mt-5">
        <div class="col-12">
            <h2 >Our Location & Nearby Attractions</h2>
            <div class="map-container">
                <div class="map-overlay">
                    <h5><i class="fas fa-map-marker-alt me-2"></i> Nearby Attractions</h5>
                    <ul>
                        <li><strong>Mayon Volcano</strong> - 8km</li>
                        <li><strong>Legazpi Boulevard</strong> - 1.5km</li>
                        <li><strong>Lignon Hill</strong> - 3km</li>
                        <li><strong>Embarcadero de Legazpi</strong> - 2km</li>
                        <li><strong>Albay Capitol</strong> - 1km</li>
                    </ul>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.227084014044!2d123.73377431534476!3d13.13921749078748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA4JzIxLjIiTiAxMjPCsDQ0JzAxLjYiRQ!5e0!3m2!1sen!2sph!4v1620000000000!5m2!1sen!2sph&markers=color:0xDFA974%7C13.139217,123.733774&zoom=15"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>


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


<!-- Place these modal divs right before the closing </body> tag -->
<!-- Success Modal -->
<div id="successModal" class="booking-confirmation-modal">
    <div class="confirmation-content">
        <div class="confirmation-icon success-icon">
            <i class="fas fa-check"></i>
        </div>
        <h3>Message Sent!</h3>
        <p>Thank you for reaching out to us. We'll get back to you shortly.</p>
        <button class="close-modal-btn">Close</button>
    </div>
</div>

<!-- Error Modal -->
<div id="errorModal" class="booking-confirmation-modal">
    <div class="confirmation-content error-content">
        <div class="confirmation-icon error-icon">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <h3>Oops!</h3>
        <p>Something went wrong. Please try again or contact us directly.</p>
        <button class="close-modal-btn">Close</button>
    </div>
</div>

<script src = "js/dropdown.js" > </script>
<script>

        document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.querySelector('form');
        const successModal = document.getElementById('successModal');
        const errorModal = document.getElementById('errorModal');
        const closeButtons = document.querySelectorAll('.close-modal-btn');

        // Form submission handler
        contactForm.addEventListener('submit', function(event) {
        event.preventDefault();

        // Basic form validation
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (name && email && message) {
        // Here you would typically send the form data to a server
        // For this example, we'll just show the success modal

        // Simulate form submission (replace with your actual form submission code)
        setTimeout(() => {
        // Show success modal
        successModal.classList.add('show');

        // Reset form
        contactForm.reset();
    }, 500);
    } else {
        // Show error modal if validation fails
        errorModal.classList.add('show');
    }
    });

        // Close modal buttons
        closeButtons.forEach(button => {
        button.addEventListener('click', function() {
        successModal.classList.remove('show');
        errorModal.classList.remove('show');
    });
    });

        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
        if (event.target === successModal) {
        successModal.classList.remove('show');
    }
        if (event.target === errorModal) {
        errorModal.classList.remove('show');
    }
    });
    });


</script>
<script src = "js/email.js" ></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.0/flowbite.min.js"> </script>

</body>
</html>



