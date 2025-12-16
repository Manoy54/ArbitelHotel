<?php
session_start(); // 🔑 Start the session

require 'db_connect.php';

// ✅ Get user ID from session
if (!isset($_SESSION['user_id'])) {
    // Not logged in
    die("Access denied. Please log in first.");
}

$user_id = $_SESSION['user_id']; // use the ID of the logged-in user

// Fetch user information
$sql = "SELECT username, email, phone, created_at FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Fetch latest reservation that has a future check-in date
// CHANGED: Modified query to show upcoming reservations properly
$upcomingSQL = "SELECT * FROM reservations 
                WHERE user_id = ? 
                AND check_in_date >= CURDATE() 
                ORDER BY check_in_date ASC
                LIMIT 1";

$upcomingStmt = $conn->prepare($upcomingSQL);
$upcomingStmt->bind_param("i", $user_id);
$upcomingStmt->execute();
$upcomingResult = $upcomingStmt->get_result();
$upcoming = $upcomingResult->fetch_assoc();

// If no upcoming reservation with future check-in date, get the most recent reservation
if (!$upcoming) {
    $latestSQL = "SELECT * FROM reservations
                  WHERE user_id = ?
                  ORDER BY reservation_date DESC
                  LIMIT 1";
    $latestStmt = $conn->prepare($latestSQL);
    $latestStmt->bind_param("i", $user_id);
    $latestStmt->execute();
    $latestResult = $latestStmt->get_result();
    $upcoming = $latestResult->fetch_assoc();
    $latestStmt->close();
}

// Fetch reservation statistics
$statsSQL = "SELECT 
                COUNT(*) as total_stays,
                SUM(nights) as total_nights,
                MAX(check_out_date) as last_stay,
                (
                    SELECT room_category 
                    FROM reservations 
                    WHERE user_id = ? 
                    GROUP BY room_category 
                    ORDER BY COUNT(*) DESC 
                    LIMIT 1
                ) as preferred_room
            FROM reservations 
            WHERE user_id = ?";
$statsStmt = $conn->prepare($statsSQL);
$statsStmt->bind_param("ii", $user_id, $user_id);
$statsStmt->execute();
$statsResult = $statsStmt->get_result();
$stats = $statsResult->fetch_assoc();

// Close all statements and connection
$stmt->close();
$upcomingStmt->close();
$statsStmt->close();
$conn->close();

// Calculate reward points (example formula: 100 points per night)
$rewardPoints = ($stats['total_nights'] ?? 0) * 100;

// Function to handle deletion of reservations via AJAX
function deleteReservation($id)
{
    // To be implemented in separate file
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <link href="css/right.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Julius+Sans+One&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Julius+Sans+One&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Libre+Caslon+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Martel:wght@200;300;400;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Myeongjo&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>

    </style>
</head>

<body>

    <div class="profile-info">
        <h1><?php echo htmlspecialchars($user['username'] ?? 'Guest'); ?></h1>
        <p id="subtitle" class="subtitle2">Valued Guest</p>

        <ul class="info-list">
            <span style="font-family: 'Poppins', sans-serif; font-weight: 400; margin:0; font-size: 1rem;"> Member Since
                - &nbsp; </span> <span
                style="font-family: 'Poppins', sans-serif; font-weight: 300; margin:0; font-size: 14px;"><?php echo isset($user['created_at']) ? date('F, Y', strtotime($user['created_at'])) : 'N/A'; ?>
            </span>
        </ul>

        <p><span style="font-family: 'Poppins', sans-serif; font-weight: 500"> Email: &nbsp; </span>
            <?php echo htmlspecialchars($user['email'] ?? 'N/A'); ?></p>
        <p><span style="font-family: 'Poppins', sans-serif; font-weight: 500"> Phone Number: &nbsp;</span>
            <?php echo htmlspecialchars($user['phone'] ?? 'N/A'); ?></p>

        <hr>

        <!-- ✅ UPCOMING RESERVATION SECTION -->
        <p class="upcoming">Upcoming Reservation</p>
        <div class="upcoming-reservation">
            <?php if ($upcoming): ?>
                <div class="reservation-room">
                    <strong><?php echo htmlspecialchars($upcoming['room_name']); ?></strong> -
                    <span class="room-category"><?php echo htmlspecialchars($upcoming['room_category']); ?></span>
                </div>
                <p> <span style="font-weight:400">Check-in:</span>
                    <?php echo isset($upcoming['check_in_date']) ? date('M d, Y', strtotime($upcoming['check_in_date'])) : 'N/A'; ?>
                    |
                    <span style="font-weight:400">Check-out:</span>
                    <?php echo isset($upcoming['check_out_date']) ? date('M d, Y', strtotime($upcoming['check_out_date'])) : 'N/A'; ?>
                </p>
                <p><span style="font-weight:400">Confirmation #:</span> <span
                        class="highlight">RS-<?php echo str_pad($upcoming['reser_id'], 8, '0', STR_PAD_LEFT); ?></span></p>
                <p><span style="font-weight:400">Booked on:</span>
                    <?php echo isset($upcoming['reservation_date']) ? date('M d, Y', strtotime($upcoming['reservation_date'])) : 'N/A'; ?>
                </p>
                <p class="price-info"><span style="font-weight:400">Total Price:&nbsp;
                        ₱</span><?php echo number_format($upcoming['total_price'], 2); ?></p>
                <?php if (!empty($upcoming['special_instructions'])): ?>
                    <div class="special-instructions">
                        <strong>Special Instructions:</strong>
                        <?php echo htmlspecialchars($upcoming['special_instructions']); ?>
                    </div>
                <?php endif; ?>
                <button class="cancel-btn" onclick="deleteReservation(<?php echo $upcoming['reser_id']; ?>)">Cancel
                    Reservation</button>
            <?php else: ?>
                <p>No upcoming reservations found.</p>
                <p><a href="room.php" class="book-now-btn" target="_top">Book Now</a></p>
            <?php endif; ?>
        </div>

        <hr>

        <p class="upcoming">Reservation History</p>
        <?php
        require 'db_connect.php';
        $historySQL = "SELECT reser_id, room_name, room_category, reservation_date, check_in_date, check_out_date, nights, status, total_price, special_instructions
                  FROM reservations 
                  WHERE user_id = ? 
                  ORDER BY reservation_date DESC";
        $historyStmt = $conn->prepare($historySQL);
        $historyStmt->bind_param("i", $user_id);
        $historyStmt->execute();
        $historyResult = $historyStmt->get_result();
        ?>

        <?php if ($historyResult->num_rows > 0): ?>
            <?php while ($row = $historyResult->fetch_assoc()):
                $statusClass = '';
                switch (strtolower($row['status'])) {
                    case 'confirmed':
                        $statusClass = 'status-confirmed';
                        break;
                    case 'completed':
                        $statusClass = 'status-completed';
                        break;
                    case 'cancelled':
                        $statusClass = 'status-cancelled';
                        break;
                    default:
                        $statusClass = '';
                }
                ?>
                <!-- 🔽 Accordion Header -->
                <button class="accordion">
                    <span style="color:#DFA974"> <?php echo htmlspecialchars($row['room_category']); ?></span> -
                    <?php echo htmlspecialchars($row['room_name']); ?> |
                    <?php echo isset($row['check_in_date']) ? date('M d, Y', strtotime($row['check_in_date'])) : 'N/A'; ?> |
                    Status: <span
                        style="background-color: #e0f7fa; color: #006064; padding: 4px 8px; border-radius: 4px; font-size: 14px; font-weight: 500;"><?php echo htmlspecialchars($row['status']); ?></span>

                </button>
                <!-- 🔽 Accordion Content -->
                <div class="panel">
                    <div class="panel-content">
                        <p><span style="font-weight:400">Check-in:</span>
                            <?php echo isset($row['check_in_date']) ? date('M d, Y', strtotime($row['check_in_date'])) : 'N/A'; ?>
                        </p>
                        <p><span style="font-weight:400">Check-out:</span>
                            <?php echo isset($row['check_out_date']) ? date('M d, Y', strtotime($row['check_out_date'])) : 'N/A'; ?>
                        </p>
                        <p><span style="font-weight:400">Confirmation #: </span><span
                                class="highlight">RS-<?php echo str_pad($row['reser_id'], 8, '0', STR_PAD_LEFT); ?></span></p>
                        <p><span style="font-weight:400">Booked on: </span>
                            <?php echo isset($row['reservation_date']) ? date('M d, Y', strtotime($row['reservation_date'])) : 'N/A'; ?>
                        </p>
                        <p><span style="font-weight:400">Nights:</span> <?php echo $row['nights']; ?></p>
                        <p class="price-info"><span style="font-weight:400"> Total Price:</span>
                            ₱<?php echo number_format($row['total_price'], 2); ?></p>
                        <?php if (!empty($row['special_instructions'])): ?>
                            <p><strong>Special Instructions:</strong> <?php echo htmlspecialchars($row['special_instructions']); ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($row['status'] != 'completed' && $row['status'] != 'cancelled'): ?>
                            <button class="delete-btn" onclick="deleteReservation(<?php echo $row['reser_id']; ?>)">Cancel
                                Reservation</button>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No past reservations found.</p>
        <?php endif; ?>

        <?php
        $historyStmt->close();
        $conn->close();
        ?>

    </div>

    <script src="js/right.js" defer></script>

</body>

</html>