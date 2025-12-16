<?php
// Initialize session if not already started
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if user is not logged in
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

// Get user ID from session
$user_id = $_SESSION['user_id'];

// Check if the request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    require_once 'db_connect.php'; // Create this file with your database connection code

    // Get data from POST request
    $data = json_decode(file_get_contents('php://input'), true);

    if (!$data) {
        // If no data received or not in JSON format, try getting from POST directly
        $data = $_POST;
    }

    // Validate required fields
    $required_fields = [
        'venueName',
        'basePrice',
        'startDate',
        'endDate',
        'numAttendees',
        'startTime',
        'endTime',
        'contactPerson',
        'email',
        'phone',
        'totalCharge'
    ];

    foreach ($required_fields as $field) {
        if (empty($data[$field])) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => "Missing required field: $field"]);
            exit();
        }
    }

    // Extract data from the submission
    $venue_name = $data['venueName'];
    $base_price = str_replace(['₱', ','], '', $data['basePrice']); // Remove currency symbol and commas
    $start_date = $data['startDate'];
    $end_date = $data['endDate'];
    $num_attendees = $data['numAttendees'];
    $start_time = $data['startTime'];
    $end_time = $data['endTime'];
    $company_name = $data['companyName'] ?? '';
    $event_group = $data['eventGroup'] ?? '';
    $contact_person = $data['contactPerson'];
    $email = $data['email'];
    $phone = $data['phone'];
    $event_type = $data['eventType'] ?? '';
    $catering_needed = isset($data['needCatering']) ? ($data['needCatering'] === 'Yes' ? 1 : 0) : 0;
    $special_instructions = $data['specialInstructions'] ?? '';

    // Calculations data
    $num_days = $data['numDays'];
    $catering_charge = str_replace(['₱', ','], '', $data['cateringCharge']);
    $service_charge = str_replace(['₱', ','], '', $data['serviceCharge']);
    $vat = str_replace(['₱', ','], '', $data['vat']);
    $total_charge = str_replace(['₱', ','], '', $data['totalCharge']);

    try {
        // Prepare SQL insert statement
        $sql = "INSERT INTO event_bookings (
                user_id, venue_name, start_date, end_date, num_attendees, 
                start_time, end_time, company_name, event_group_name, 
                contact_person, email, phone, event_type, catering_needed, 
                special_instructions, base_venue_price, num_days, 
                catering_charge, service_charge, vat, total_charge
            ) VALUES (
                $1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19, $20, $21
            ) RETURNING booking_id";

        $params = array(
            $user_id,
            $venue_name,
            $start_date,
            $end_date,
            $num_attendees,
            $start_time,
            $end_time,
            $company_name,
            $event_group,
            $contact_person,
            $email,
            $phone,
            $event_type,
            $catering_needed,
            $special_instructions,
            $base_price,
            $num_days,
            $catering_charge,
            $service_charge,
            $vat,
            $total_charge
        );

        $stmt = pg_query_params($conn, $sql, $params);

        // Execute the statement
        if ($stmt) {
            $row = pg_fetch_assoc($stmt);
            $booking_id = $row['booking_id'];
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'message' => 'Booking successful!',
                'booking_id' => $booking_id
            ]);
        } else {
            throw new Exception("Error executing query: " . pg_last_error($conn));
        }

        pg_free_result($stmt);
        pg_close($conn);

    } catch (Exception $e) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Database error: ' . $e->getMessage()
        ]);
    }
} else {
    // Not a POST request
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>