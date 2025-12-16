// Get URL parameters when redirected from room.php
function getUrlParams() {
    const params = new URLSearchParams(window.location.search);
    return {
        roomCategory: params.get('category') || 'Regular Room',
        roomName: params.get('room') || 'Standard Room',
        roomPrice: parseFloat(params.get('price')) || 3500
    };
}

// Calculate number of nights between two dates
function calculateNights(checkInDate, checkOutDate) {
    if (!checkInDate || !checkOutDate) return 1;

    const startDate = new Date(checkInDate);
    const endDate = new Date(checkOutDate);

    // Check if dates are valid
    if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) return 1;

    // Calculate difference in days
    const timeDifference = endDate.getTime() - startDate.getTime();
    const nights = Math.ceil(timeDifference / (1000 * 3600 * 24));

    // Return at least 1 night
    return nights > 0 ? nights : 1;
}

// Calculate all pricing components
function calculatePricing(basePrice, nights) {
    const roomPrice = basePrice * nights;
    const serviceCharge = roomPrice * 0.10; // 10% service charge
    const vat = roomPrice * 0.05; // 5% VAT
    const totalPrice = roomPrice + serviceCharge + vat;

    return {
        roomPrice: roomPrice.toFixed(2),
        serviceCharge: serviceCharge.toFixed(2),
        vat: vat.toFixed(2),
        totalPrice: totalPrice.toFixed(2),
        nights: nights
    };
}

// Update the summary section with calculated values

function updateSummary(roomCategory, roomName, pricing) {
    // Format numbers with commas and 2 decimal places
    const formatCurrency = amount => parseFloat(amount).toLocaleString('en-PH', {
        style: 'currency',
        currency: 'PHP',
        minimumFractionDigits: 2
    }).replace('PHP', '₱');

    // Update room category and name
    document.querySelector('#book-summaryb2 p').textContent = roomCategory;
    document.querySelector('#book-summaryb3 p').textContent = roomName;

    // Update nights
    document.querySelector('#book-summaryb4 p').textContent =
        pricing.nights === 1 ? 'One Night' : `${pricing.nights} Nights`;

    // Update prices with commas
    document.querySelector('#book-summaryb5 p').textContent = formatCurrency(pricing.roomPrice);
    document.querySelector('#book-summaryb7 p').textContent = formatCurrency(pricing.serviceCharge);
    document.querySelector('#book-summaryb9 p').textContent = formatCurrency(pricing.vat);
    document.querySelector('#book-summaryb15 p').textContent = formatCurrency(pricing.totalPrice);
}



// Show confirmation modal
function showConfirmationModal() {
    // Create modal container
    const modal = document.createElement('div');
    modal.className = 'booking-confirmation-modal';

    // Add modal content
    modal.innerHTML = `
        <div class="confirmation-content">
            <div class="confirmation-icon">✓</div>
            <h3>Booking Confirmed!</h3>
            <p>Thank you for choosing our hotel.</p>
            <p>Your reservation details have been sent to your email.</p>
            <button class="close-modal-btn">Close</button>
        </div>
    `;

    // Add styles to document
    const style = document.createElement('style');
    style.textContent = `
        .booking-confirmation-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .confirmation-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            animation: fadeIn 0.5s;
        }
        .confirmation-icon {
            font-size: 48px;
            color: #4CAF50;
            margin-bottom: 20px;
            height: 70px;
            width: 70px;
            background-color: rgba(76, 175, 80, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }
        .confirmation-content h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }
        .confirmation-content p {
            color: #666;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .close-modal-btn {
            background-color: #DFA974;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .close-modal-btn:hover {
            background-color: #c9915c;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    `;

    document.head.appendChild(style);
    document.body.appendChild(modal);

    // Add event listener to close button
    const closeButton = modal.querySelector('.close-modal-btn');
    closeButton.addEventListener('click', function() {
        document.body.removeChild(modal);
        // Redirect to profile page after closing the modal
        window.location.href = 'profile.php';
    });
}

// Show error modal
function showErrorModal(errorMessage) {
    // Create modal container
    const modal = document.createElement('div');
    modal.className = 'booking-confirmation-modal';

    // Add modal content with error styling
    modal.innerHTML = `
        <div class="confirmation-content error-content">
            <div class="confirmation-icon error-icon">✕</div>
            <h3>Booking Failed</h3>
            <p>${errorMessage}</p>
            <button class="close-modal-btn">Close</button>
        </div>
    `;

    // Add styles to document
    const style = document.createElement('style');
    style.textContent = `
        .booking-confirmation-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .confirmation-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            animation: fadeIn 0.5s;
        }
        .error-content .error-icon {
            background-color: rgba(244, 67, 54, 0.2);
            color: #F44336;
        }
        .confirmation-icon {
            font-size: 48px;
            margin-bottom: 20px;
            height: 70px;
            width: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
        }
        .confirmation-content h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 24px;
        }
        .confirmation-content p {
            color: #666;
            margin-bottom: 20px;
            font-size: 16px;
        }
        .close-modal-btn {
            background-color: #DFA974;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .close-modal-btn:hover {
            background-color: #c9915c;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    `;

    document.head.appendChild(style);
    document.body.appendChild(modal);

    // Add event listener to close button
    const closeButton = modal.querySelector('.close-modal-btn');
    closeButton.addEventListener('click', function() {
        document.body.removeChild(modal);
    });
}

// Main function to initialize the booking page
function initBookingPage() {
    // Get room details from URL
    const roomDetails = getUrlParams();
    console.log("Room details:", roomDetails); // Debug: Check if parameters are received correctly

    // Set initial values in summary
    const checkInInput = document.querySelector('#book-summaryb11 .styled-date');
    const checkOutInput = document.querySelector('#book-summaryb13 .styled-date');

    // Set minimum date to today for check-in
    const today = new Date();
    const todayString = today.toISOString().split('T')[0];
    checkInInput.min = todayString;

    // Set default check-in to today
    checkInInput.value = todayString;

    // Set minimum date for check-out to tomorrow
    const tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    const tomorrowString = tomorrow.toISOString().split('T')[0];
    checkOutInput.min = tomorrowString;

    // Set default check-out to tomorrow
    checkOutInput.value = tomorrowString;

    // Calculate initial pricing
    const initialPricing = calculatePricing(
        roomDetails.roomPrice,
        calculateNights(checkInInput.value, checkOutInput.value)
    );

    // Update the summary with initial values
    updateSummary(roomDetails.roomCategory, roomDetails.roomName, initialPricing);

    // Add event listeners to date inputs
    checkInInput.addEventListener('change', function() {
        // Ensure check-out is always after check-in
        if (checkOutInput.value <= this.value) {
            const nextDay = new Date(this.value);
            nextDay.setDate(nextDay.getDate() + 1);
            checkOutInput.value = nextDay.toISOString().split('T')[0];
        }

        // Set minimum date for check-out
        checkOutInput.min = this.value;

        // Recalculate pricing
        const pricing = calculatePricing(
            roomDetails.roomPrice,
            calculateNights(this.value, checkOutInput.value)
        );

        // Update summary
        updateSummary(roomDetails.roomCategory, roomDetails.roomName, pricing);
    });

    checkOutInput.addEventListener('change', function() {
        // Recalculate pricing
        const pricing = calculatePricing(
            roomDetails.roomPrice,
            calculateNights(checkInInput.value, this.value)
        );

        // Update summary
        updateSummary(roomDetails.roomCategory, roomDetails.roomName, pricing);
    });

    // Handle the confirm button
    const confirmButton = document.querySelector('#book-summaryb16 button');
    confirmButton.addEventListener('click', function() {
        // Get all form values
        const firstName = document.querySelector('#box1').value;
        const lastName = document.querySelector('#box2').value;
        const email = document.querySelector('#box3').value;
        const phone = document.querySelector('#box4').value;
        const address = document.querySelector('#box5').value;
        const specialInstructions = document.querySelector('#box7').value;

        // Validate required fields
        if (!firstName || !lastName || !email || !phone) {
            showErrorModal('Please fill in all required fields: First name, Last name, Email, and Phone.');
            return;
        }

        // Calculate final pricing
        const nights = calculateNights(checkInInput.value, checkOutInput.value);
        const finalPricing = calculatePricing(roomDetails.roomPrice, nights);

        // Prepare reservation data for submission
        const reservationData = {
            first_name: firstName,
            last_name: lastName,
            email: email,
            phone: phone,
            address: address,
            special_instructions: specialInstructions,
            room_category: roomDetails.roomCategory,
            room_name: roomDetails.roomName,
            nights: nights,
            room_price: parseFloat(finalPricing.roomPrice),
            service_charge: parseFloat(finalPricing.serviceCharge),
            vat: parseFloat(finalPricing.vat),
            total_price: parseFloat(finalPricing.totalPrice),
            check_in_date: checkInInput.value,
            check_out_date: checkOutInput.value
        };

        console.log('Reservation data:', reservationData);

        // Disable button to prevent multiple submissions
        confirmButton.disabled = true;
        confirmButton.textContent = 'Processing...';

        // Submit the form
        fetch('submit_reservation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(reservationData)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success modal
                    showConfirmationModal();

                    // Clear form inputs
                    document.querySelector('#box1').value = '';
                    document.querySelector('#box2').value = '';
                    document.querySelector('#box3').value = '';
                    document.querySelector('#box4').value = '';
                    document.querySelector('#box5').value = '';
                    document.querySelector('#box7').value = '';
                } else {
                    // Show error modal
                    showErrorModal('Reservation failed: ' + (data.error || 'Unknown error'));

                    // Re-enable button
                    confirmButton.disabled = false;
                    confirmButton.textContent = 'Confirm Booking';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showErrorModal('An error occurred while saving the reservation. Please try again.');

                // Re-enable button
                confirmButton.disabled = false;
                confirmButton.textContent = 'Confirm Booking';
            });
    });
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initBookingPage);