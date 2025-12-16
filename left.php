<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Left</title>
    <link rel="stylesheet" href="css/left.css">
    <!-- Add Font Awesome if you're using those icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Julius+Sans+One&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Julius+Sans+One&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Martel:wght@200;300;400;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Myeongjo&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<style>
    .profile-pic {
        width: 220px;
        height: 220px;
        border-radius: 120px;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        font-size: 14px;
        border: 2px solid var(--border);
        margin-bottom: 30px;
        overflow: hidden;
        position: relative;
        background-image: url("img/user-icon.png");
        background-position: center;
        background-size: cover;
    }
</style>

<body>
<div class="left-sidebar">
    <div class="profile-pic">
    </div>

    <div class="profile-actions">
        <button class="nav-btn active" data-page="right.php"><i class="fa-solid fa-user"></i> &nbsp; Profile</button>
        <button class="nav-btn" data-page="events_history_page.php"><i class="fa-solid fa-calendar"></i> &nbsp; Events</button>
        <button class="logout-btn" onclick="parent.window.location.href='login.php';">
            <i class="fa-solid fa-arrow-right-from-bracket"></i> &nbsp Log Out
        </button>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Get all navigation buttons
            const navButtons = document.querySelectorAll(".nav-btn");

            // Add click event to each button
            navButtons.forEach(btn => {
                btn.addEventListener("click", () => {
                    // Remove 'active' class from all buttons
                    navButtons.forEach(b => b.classList.remove("active"));

                    // Add 'active' class to the clicked button
                    btn.classList.add("active");

                    // Change the frame source in the parent window
                    const pagePath = btn.getAttribute("data-page");
                    if (pagePath) {
                        parent.frames["Right"].location.href = pagePath;
                    }
                });
            });

            // Set the Profile button as active by default (it's already in the HTML, but this ensures it works)
            const profileButton = document.querySelector('.nav-btn[data-page="right.php"]');
            if (profileButton) {
                profileButton.classList.add("active");
            }
        });
    </script>
</body>
</html>