document.addEventListener('DOMContentLoaded', function() {
    // Selectors for form elements
    const startDateInput = document.getElementById('event-form-box1');
    const endDateInput = document.getElementById('event-form-box2');
    const attendeesInput = document.getElementById('event-form-box3');
    const startTimeInput = document.getElementById('event-form-box4-start');
    const endTimeInput = document.getElementById('event-form-box4-end');
    const companyNameInput = document.getElementById('event-form-box5');
    const eventGroupInput = document.getElementById('event-form-box6');
    const contactPersonInput = document.getElementById('event-form-box7');
    const emailInput = document.getElementById('event-form-box8');
    const phoneInput = document.getElementById('event-form-box9');
    const eventTypeInput = document.getElementById('event-form-box10');
    const specialInstructionsInput = document.getElementById('event-form-box13');
    const cateringRadios = document.getElementsByName('need_option');

    // Summary elements
    const summaryVenueElement = document.querySelector('.summary-value');
    const summaryPriceElement = document.querySelector('.summary-price');
    const numHeadElement = document.querySelector('.charge-item:nth-child(2) .charge-value');
    const numDaysElement = document.querySelector('.charge-item:nth-child(3) .charge-value');
    const totalCateringElement = document.querySelector('.charge-item:nth-child(4) .charge-value');
    const serviceChargeElement = document.querySelector('.charge-item:nth-child(5) .charge-value');
    const vatElement = document.querySelector('.charge-item:nth-child(6) .charge-value');
    const totalChargeElement = document.querySelector('.total-value');

    // Constants
    const CATERING_PRICE_PER_HEAD = 250; // ₱250 per person
    const SERVICE_CHARGE_RATE = 0.10; // 10%
    const VAT_RATE = 0.05; // 5%

    // Variables to store initial values
    let baseVenuePrice = 0;
    let venueName = '';
    let needCatering = false;

    // Retrieve venue data from localStorage
    function loadVenueData() {
        venueName = localStorage.getItem('selectedVenue') || 'One Day';
        const storedPrice = localStorage.getItem('selectedPrice') || '₱20,500';

        // Remove currency symbol (₱ or P) and commas to get numeric value
        baseVenuePrice = parseFloat(storedPrice.replace(/[₱P]/g, '').replace(/,/g, '')) || 20500;

        // Update summary with venue name and initial price
        summaryVenueElement.textContent = venueName;
        summaryPriceElement.textContent = formatCurrency(baseVenuePrice);
    }

    // Calculate number of days between two dates
    function calculateDays(startDate, endDate) {
        if (!startDate || !endDate) return 1;

        const start = new Date(startDate);
        const end = new Date(endDate);

        // Calculate difference in milliseconds
        const diffTime = Math.abs(end - start);

        // Convert to days and add 1 (inclusive of start and end dates)
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;

        return diffDays > 0 ? diffDays : 1;
    }

    // Format number as currency (₱)
    function formatCurrency(amount) {
        return '₱' + amount.toLocaleString('en-US', {maximumFractionDigits: 0});
    }

    // Update all calculations and display
    function updateSummary() {
        // Get input values
        const startDate = startDateInput.value;
        const endDate = endDateInput.value;
        const attendees = parseInt(attendeesInput.value) || 0;

        // Calculate number of days
        const days = calculateDays(startDate, endDate);

        // Calculate venue price based on number of days
        const venueCharge = baseVenuePrice * days;

        // Calculate catering charge
        let cateringCharge = 0;
        if (needCatering && attendees > 0) {
            cateringCharge = CATERING_PRICE_PER_HEAD * attendees * days;
        }

        // Calculate service charge (10% of venue price)
        const serviceCharge = venueCharge * SERVICE_CHARGE_RATE;

        // Calculate VAT (5% of venue price)
        const vat = venueCharge * VAT_RATE;

        // Calculate total charge
        const totalCharge = venueCharge + cateringCharge + serviceCharge + vat;

        // Update summary elements
        summaryPriceElement.textContent = formatCurrency(venueCharge);
        numDaysElement.textContent = days;
        numHeadElement.textContent = attendees;
        totalCateringElement.textContent = formatCurrency(cateringCharge);
        serviceChargeElement.textContent = formatCurrency(serviceCharge);
        vatElement.textContent = formatCurrency(vat);
        totalChargeElement.textContent = formatCurrency(totalCharge);
    }

    // Event listeners for form inputs
    startDateInput.addEventListener('change', updateSummary);
    endDateInput.addEventListener('change', updateSummary);
    attendeesInput.addEventListener('input', updateSummary);

    // Event listeners for catering radio buttons
    cateringRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            needCatering = this.value === 'Yes' || this.parentElement.textContent.trim() === 'Yes';
            updateSummary();
        });
    });

    // Default catering option to "Yes"
    cateringRadios[0].checked = true;
    needCatering = true;

    // Initialize the form
    loadVenueData();
    updateSummary();

    // Function to collect form data
    function collectFormData() {
        // Get currently selected catering option
        let cateringOption = 'No';
        cateringRadios.forEach(radio => {
            if (radio.checked && radio.value === 'Yes') {
                cateringOption = 'Yes';
            }
        });

        // Get values from summary
        const basePrice = summaryPriceElement.textContent;
        const numDays = numDaysElement.textContent;
        const cateringCharge = totalCateringElement.textContent;
        const serviceCharge = serviceChargeElement.textContent;
        const vat = vatElement.textContent;
        const totalCharge = totalChargeElement.textContent;

        return {
            venueName: summaryVenueElement.textContent,
            basePrice: basePrice,
            startDate: startDateInput.value,
            endDate: endDateInput.value,
            numAttendees: attendeesInput.value,
            startTime: startTimeInput.value,
            endTime: endTimeInput.value,
            companyName: companyNameInput.value,
            eventGroup: eventGroupInput.value,
            contactPerson: contactPersonInput.value,
            email: emailInput.value,
            phone: phoneInput.value,
            eventType: eventTypeInput.value,
            needCatering: cateringOption,
            specialInstructions: specialInstructionsInput.value,
            numDays: numDays,
            cateringCharge: cateringCharge,
            serviceCharge: serviceCharge,
            vat: vat,
            totalCharge: totalCharge
        };
    }

    // Function to validate form
    function validateForm() {
        // List of required fields with their display names
        const requiredFields = [
            { field: startDateInput, name: 'Start Date' },
            { field: endDateInput, name: 'End Date' },
            { field: attendeesInput, name: 'Number of Attendees' },
            { field: startTimeInput, name: 'Start Time' },
            { field: endTimeInput, name: 'End Time' },
            { field: contactPersonInput, name: 'Contact Person' },
            { field: emailInput, name: 'Email Address' },
            { field: phoneInput, name: 'Phone Number' }
        ];

        // Check each required field
        for (const field of requiredFields) {
            if (!field.field.value.trim()) {
                alert(`Please fill in the ${field.name} field.`);
                field.field.focus();
                return false;
            }
        }

        // Check email format
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value)) {
            alert('Please enter a valid email address.');
            emailInput.focus();
            return false;
        }

        // Check phone number format (simple validation)
        const phonePattern = /^\d{10,15}$/;
        if (!phonePattern.test(phoneInput.value.replace(/[^0-9]/g, ''))) {
            alert('Please enter a valid phone number (10-15 digits).');
            phoneInput.focus();
            return false;
        }

        return true;
    }

    // Function to submit booking
    function submitBooking() {
        if (!validateForm()) {
            return;
        }

        const formData = collectFormData();

        // Submit data via fetch API
        fetch('event_process_booking.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show the success modal
                    showModal();

                    // You can store the booking ID if needed
                    localStorage.setItem('lastBookingId', data.booking_id);
                } else {
                    // Show error message
                    alert('Booking Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while processing your booking. Please try again.');
            });
    }

    // Confirmation Modal Logic
    const modal = document.getElementById('bookingModal');
    const closeModalButton = document.getElementById('closeModalBtn');
    const confirmButton = document.getElementById('event-form-box14');

    // Function to show modal
    function showModal() {
        modal.style.display = 'block';
    }

    // Function to hide modal
    function hideModal() {
        modal.style.display = 'none';
    }

    // Event listener for confirm button
    confirmButton.addEventListener('click', submitBooking);

    // Close the modal when the Close button is clicked
    closeModalButton.addEventListener('click', function() {
        hideModal();
        // Optionally redirect to a thank you page or booking history
        // window.location.href = 'booking_history.php';
    });

    // Optionally, close the modal if clicked outside
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            hideModal();
        }
    });
});