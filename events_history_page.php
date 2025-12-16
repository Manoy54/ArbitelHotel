<?php
// Start the session at the very beginning of the file
session_start();

// Connect to database
require 'db_connect.php';

// Get user ID from session
$user_id = $_SESSION['user_id'] ?? 0;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event Bookings History</title>
    <link href="css/event_history_page.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Martel:wght@200;300;400;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Myeongjo&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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

</head>

<body>

    <div class="event-bookings-info">
        <h3>Event Bookings</h3>
        <p class="subtitle"></p>

        <hr>

        <!-- UPCOMING EVENT SECTION -->
        <p class="upcoming-h">Upcoming Event</p>
        <div class="upcoming-event">
            <?php
            // Fetch upcoming event (future start date)
            $upcomingSQL = "SELECT * FROM event_bookings 
                        WHERE user_id = ? 
                        AND start_date >= CURDATE() 
                        ORDER BY start_date ASC
                        LIMIT 1";

            $upcomingStmt = $conn->prepare($upcomingSQL);
            $upcomingStmt->bind_param("i", $user_id);
            $upcomingStmt->execute();
            $upcomingResult = $upcomingStmt->get_result();
            $upcoming = ($upcomingResult && $upcomingResult->num_rows > 0) ? $upcomingResult->fetch_assoc() : false;
            $upcomingStmt->close();

            if ($upcoming):
                ?>
                <div class="event-venue">
                    <strong><?php echo htmlspecialchars($upcoming['venue_name']); ?></strong>
                    <span
                        class="event-type-tag"><?php echo htmlspecialchars($upcoming['event_type'] ?? 'Corporate Event'); ?></span>
                </div>
                <p> <span style="font-weight: 400;">Start Date:</span>
                    <?php echo date('M d, Y', strtotime($upcoming['start_date'])); ?></p>
                <span style="font-weight: 400;">End Date:&nbsp;&nbsp;&nbsp;</span> <span
                    style="font-weight: 200;"><?php echo date('M d, Y', strtotime($upcoming['end_date'])); ?></span>
                <?php if (!empty($upcoming['start_time']) && !empty($upcoming['end_time'])): ?>
                    <p><span style="font-weight: 400">Time:
                            &nbsp;&nbsp;&nbsp;</span><?php echo date('h:i A', strtotime($upcoming['start_time'])); ?> -
                        <?php echo date('h:i A', strtotime($upcoming['end_time'])); ?>
                    </p>
                <?php endif; ?>
                <p><span style="font-weight: 400">Company:&nbsp;&nbsp;&nbsp;</span>
                    <?php echo htmlspecialchars($upcoming['company_name'] ?? 'N/A'); ?></p>
                <p><span style="font-weight: 400">Contact: &nbsp;&nbsp;&nbsp;</span>
                    <?php echo htmlspecialchars($upcoming['contact_person']); ?> |
                    <?php echo htmlspecialchars($upcoming['phone']); ?>
                </p>
                <p><span style="font-weight: 400">Attendees:&nbsp;&nbsp;&nbsp; </span>
                    <?php echo $upcoming['num_attendees']; ?> people</p>
                <p><span style="font-weight: 400">Catering:&nbsp;&nbsp;&nbsp; </span>
                    <?php echo $upcoming['catering_needed'] ? 'Yes' : 'No'; ?></p>
                <p class="price-info"><span style="font-weight: 800">Total:</span>:&nbsp;
                    ₱<?php echo number_format($upcoming['total_charge'], 2); ?></p>
                <?php if (!empty($upcoming['special_instructions'])): ?>
                    <div class="special-instructions">
                        <strong>Special Instructions:</strong>
                        <?php echo htmlspecialchars($upcoming['special_instructions']); ?>
                    </div>
                <?php endif; ?>
                <button class="cancel-btn" onclick="cancelBooking(<?php echo $upcoming['booking_id']; ?>)">Cancel
                    Booking</button>
            <?php else: ?>
                <p>No upcoming event bookings found.</p>
                <p><a href="events.php" class="book-now-btn" target="_top">Book Now</a></p>
            <?php endif; ?>
        </div>

        <hr>

        <p class="upcoming-h">Reservation History</p>
        <?php
        // Fetch all bookings history
        $historySQL = "SELECT * FROM event_bookings 
                  WHERE user_id = ? 
                  ORDER BY booking_date DESC";

        $historyStmt = $conn->prepare($historySQL);
        $historyStmt->bind_param("i", $user_id);
        $historyStmt->execute();
        $historyResult = $historyStmt->get_result();

        if ($historyResult && $historyResult->num_rows > 0):
            while ($row = $historyResult->fetch_assoc()):
                // Determine status based on dates
                $today = date('Y-m-d');
                $status = '';
                $statusClass = '';

                if ($row['end_date'] < $today) {
                    $status = 'Completed';
                    $statusClass = 'status-completed';
                } elseif ($row['start_date'] > $today) {
                    $status = 'Upcoming';
                    $statusClass = 'status-upcoming';
                } else {
                    $status = 'In Progress';
                    $statusClass = 'status-upcoming';
                }
                ?>
                <!-- Accordion Header -->
                <button class="accordion">
                    <span style="color:#DFA974"><?php echo htmlspecialchars($row['event_type'] ?? 'Event'); ?></span> -
                    <span style="color:#DFA974"><?php echo htmlspecialchars($row['venue_name']); ?> </span> |
                    <?php echo date('M d, Y', strtotime($row['start_date'])); ?> |
                    Status: <span class="booking-status <?php echo $statusClass; ?>"><?php echo $status; ?></span>
                </button>
                <!-- Accordion Content -->
                <div class="panel">
                    <div class="panel-content">
                        <div class="event-details">

                            <p><strong>Venue:&nbsp;&nbsp;</strong> <?php echo htmlspecialchars($row['venue_name']); ?></p>
                            <p><strong>Event Type:&nbsp;&nbsp;</strong>
                                <?php echo htmlspecialchars($row['event_type'] ?? 'N/A'); ?></p>
                            <p><strong>Company:&nbsp;&nbsp;</strong>
                                <?php echo htmlspecialchars($row['company_name'] ?? 'N/A'); ?></p>
                            <p><strong>Group:&nbsp;&nbsp;</strong>
                                <?php echo htmlspecialchars($row['event_group_name'] ?? 'N/A'); ?></p>

                            <p><strong>Dates:</strong> <?php echo date('M d, Y', strtotime($row['start_date'])); ?> to
                                <?php echo date('M d, Y', strtotime($row['end_date'])); ?>
                                (<?php echo $row['num_days']; ?> days)
                            </p>

                            <?php if (!empty($row['start_time']) && !empty($row['end_time'])): ?>
                                <p><strong>Time:&nbsp;&nbsp;</strong> <?php echo date('h:i A', strtotime($row['start_time'])); ?> -
                                    <?php echo date('h:i A', strtotime($row['end_time'])); ?>
                                </p>
                            <?php endif; ?>

                            <p><strong>Contact:&nbsp;&nbsp;</strong> <?php echo htmlspecialchars($row['contact_person']); ?> |
                                <?php echo htmlspecialchars($row['email']); ?> |
                                <?php echo htmlspecialchars($row['phone']); ?>
                            </p>

                            <p><strong>Attendees:&nbsp;&nbsp;</strong> <?php echo $row['num_attendees']; ?> people</p>
                            <p><strong>Catering Required:&nbsp;&nbsp;</strong>
                                <?php echo $row['catering_needed'] ? 'Yes' : 'No'; ?></p>

                            <p><strong>Booking Date:&nbsp;&nbsp;</strong>
                                <?php echo date('M d, Y', strtotime($row['booking_date'])); ?></p>
                            <p><strong>Booking ID:&nbsp;&nbsp;</strong> <span
                                    class="highlight">EB-<?php echo str_pad($row['booking_id'], 8, '0', STR_PAD_LEFT); ?></span>
                            </p>

                            <?php if (!empty($row['special_instructions'])): ?>
                                <div class="special-instructions">
                                    <strong>Special Instructions:&nbsp;&nbsp;</strong>
                                    <?php echo htmlspecialchars($row['special_instructions']); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Cost Breakdown Section -->
                            <div class="cost-breakdown">
                                <h4>Cost Breakdown</h4>
                                <div class="cost-item">
                                    <span>Base Venue Price:</span>
                                    <span
                                        style="font-weight: 300">₱<?php echo number_format($row['base_venue_price'], 2); ?></span>
                                </div>
                                <?php if ($row['catering_charge'] > 0): ?>
                                    <div class="cost-item">
                                        <span>Catering Charge:</span>
                                        <span
                                            style="font-weight: 300">₱<?php echo number_format($row['catering_charge'], 2); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="cost-item">
                                    <span>Service Charge:</span>
                                    <span
                                        style="font-weight: 300">₱<?php echo number_format($row['service_charge'], 2); ?></span>
                                </div>
                                <div class="cost-item">
                                    <span>VAT:</span>
                                    <span style="font-weight: 300">₱<?php echo number_format($row['vat'], 2); ?></span>
                                </div>
                                <div class="cost-total">
                                    <span>Total:</span>
                                    <span style="font-weight: 300">₱<?php echo number_format($row['total_charge'], 2); ?></span>
                                </div>
                            </div>

                            <?php if ($status == 'Upcoming' || $status == 'In Progress'): ?>
                                <button class="cancel-btn" onclick="cancelBooking(<?php echo $row['booking_id']; ?>)">Cancel
                                    Booking</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        else:
            ?>
            <p>No event booking history found.</p>
            <?php
        endif;

        // Close database connection
        // Close database connection
        $historyStmt->close();
        $conn->close();
        ?>

    </div>

    <script>
        // Function to show the confirmation modal
        function showCancellationModal(bookingId) {
            // Create modal container
            const modal = document.createElement('div');
            modal.className = 'booking-confirmation-modal';

            // Create modal content
            modal.innerHTML = `
        <div class="confirmation-content">
            <div class="confirmation-icon warning-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <h3>Are you sure you want to cancel this booking?</h3>
            <p>This action cannot be undone and will permanently remove the booking from the database.</p>
            <div class="modal-buttons">
                <button class="keep-booking-btn">No, Keep Booking</button>
                <button class="confirm-cancel-btn">Yes, Cancel Booking</button>
            </div>
        </div>
    `;

            // Add modal to the DOM
            document.body.appendChild(modal);

            // Add event listeners
            const keepBtn = modal.querySelector('.keep-booking-btn');
            keepBtn.addEventListener('click', () => {
                document.body.removeChild(modal);
            });

            const confirmBtn = modal.querySelector('.confirm-cancel-btn');
            confirmBtn.addEventListener('click', () => {
                processCancellation(bookingId, modal);
            });
        }

        // Function to process the actual cancellation
        function processCancellation(bookingId, modal) {
            // Update the modal to show loading state
            const modalContent = modal.querySelector('.confirmation-content');
            modalContent.innerHTML = `
        <div class="confirmation-icon">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
        <h3>Processing</h3>
        <p>Please wait while we process your cancellation...</p>
    `;

            // Use AJAX to call the server-side script for cancellation
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "cancel_booking.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (this.readyState === XMLHttpRequest.DONE) {
                    if (this.status === 200) {
                        try {
                            var response = JSON.parse(this.responseText);
                            if (response.success) {
                                // Show success message
                                modalContent.innerHTML = `
                            <div class="confirmation-icon success-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <h3>Booking Cancelled!</h3>
                            <p>Your reservation has been successfully cancelled.</p>
                            <button class="close-modal-btn">Close</button>
                        `;

                                // Add event listener to the new close button
                                modal.querySelector('.close-modal-btn').addEventListener('click', () => {
                                    document.body.removeChild(modal);
                                    // Reload the page to reflect the changes
                                    window.location.reload();
                                });
                            } else {
                                // Show error message
                                modalContent.innerHTML = `
                            <div class="confirmation-icon error-icon">
                                <i class="fas fa-times"></i>
                            </div>
                            <h3>Cancellation Failed</h3>
                            <p>${response.message || "An unknown error occurred while cancelling your booking."}</p>
                            <button class="close-modal-btn">Close</button>
                        `;

                                // Add event listener to the new close button
                                modal.querySelector('.close-modal-btn').addEventListener('click', () => {
                                    document.body.removeChild(modal);
                                });
                            }
                        } catch (e) {
                            // Show JSON parsing error
                            modalContent.innerHTML = `
                        <div class="confirmation-icon error-icon">
                            <i class="fas fa-times"></i>
                        </div>
                        <h3>Error</h3>
                        <p>Error processing server response.</p>
                        <button class="close-modal-btn">Close</button>
                    `;

                            // Add event listener to the new close button
                            modal.querySelector('.close-modal-btn').addEventListener('click', () => {
                                document.body.removeChild(modal);
                            });

                            console.error("Error parsing JSON: ", e);
                        }
                    } else {
                        // Show server error
                        modalContent.innerHTML = `
                    <div class="confirmation-icon error-icon">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3>Server Error</h3>
                    <p>A server error occurred. Please try again later.</p>
                    <button class="close-modal-btn">Close</button>
                `;

                        // Add event listener to the new close button
                        modal.querySelector('.close-modal-btn').addEventListener('click', () => {
                            document.body.removeChild(modal);
                        });
                    }
                }
            };

            xhr.send("booking_id=" + encodeURIComponent(bookingId));
        }

        // Main cancellation function to be called from your booking interface
        function cancelBooking(bookingId) {
            showCancellationModal(bookingId);
        }
    </script>

    <script>
        // Add accordion functionality
        document.addEventListener('DOMContentLoaded', function () {
            var acc = document.getElementsByClassName("accordion");
            for (var i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        });
    </script>
</body>

</html>