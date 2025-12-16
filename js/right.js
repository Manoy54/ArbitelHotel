document.addEventListener('DOMContentLoaded', function() {
    var accordions = document.querySelectorAll(".accordion");

    accordions.forEach(function(accordion) {
        accordion.addEventListener("click", function() {
            this.classList.toggle("active");

            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    });

    // Add this CSS to the document
    const modalStyle = document.createElement('style');
    modalStyle.textContent = `
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
    }`;
    document.head.appendChild(modalStyle);

    // Close modal when clicking outside of it
    document.addEventListener('click', function(event) {
        var modals = document.querySelectorAll('.booking-confirmation-modal');
        modals.forEach(function(modal) {
            if (event.target === modal) {
                modal.remove();
            }
        });
    });
});

// Function to show success modal for reservation cancellation
function showCancellationModal(success, message) {
    // Create modal container
    const modal = document.createElement('div');
    modal.className = 'booking-confirmation-modal';

    // Create modal content
    const content = document.createElement('div');
    content.className = 'confirmation-content';

    if (success) {
        // Success modal layout
        const iconContainer = document.createElement('div');
        iconContainer.className = 'confirmation-icon';
        iconContainer.style.backgroundColor = 'rgba(76, 175, 80, 0.2)';
        iconContainer.style.color = '#4CAF50';

        const checkmark = document.createElement('div');
        checkmark.innerHTML = '✓';
        checkmark.style.fontSize = '36px';
        iconContainer.appendChild(checkmark);

        const title = document.createElement('h3');
        title.textContent = 'Booking Cancelled!';

        const text = document.createElement('p');
        text.textContent = 'Your reservation has been successfully cancelled.';

        const button = document.createElement('button');
        button.className = 'close-modal-btn';
        button.textContent = 'Close';
        button.addEventListener('click', function() {
            modal.remove();
            location.reload(); // Refresh the page
        });

        content.appendChild(iconContainer);
        content.appendChild(title);
        content.appendChild(text);
        content.appendChild(button);
    } else {
        // Error modal layout
        const iconContainer = document.createElement('div');
        iconContainer.className = 'confirmation-icon error-icon';
        iconContainer.style.backgroundColor = 'rgba(244, 67, 54, 0.2)';
        iconContainer.style.color = '#F44336';

        const errorIcon = document.createElement('div');
        errorIcon.innerHTML = '✕';
        errorIcon.style.fontSize = '36px';
        iconContainer.appendChild(errorIcon);

        const title = document.createElement('h3');
        title.textContent = 'Cancellation Failed';

        const text = document.createElement('p');
        text.textContent = message || 'Failed to cancel your reservation.';

        const button = document.createElement('button');
        button.className = 'close-modal-btn';
        button.textContent = 'Close';
        button.addEventListener('click', function() {
            modal.remove();
        });

        content.appendChild(iconContainer);
        content.appendChild(title);
        content.appendChild(text);
        content.appendChild(button);
    }

    modal.appendChild(content);
    document.body.appendChild(modal);
}

// Function to delete a reservation
function deleteReservation(id) {
    if (confirm('Are you sure you want to cancel this reservation?')) {
        fetch('delete_reservation.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                reservation_id: id
            })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showCancellationModal(true);
                } else {
                    showCancellationModal(false, 'Failed to cancel reservation: ' + data.error);
                }
            })
            .catch(error => {
                showCancellationModal(false, 'Error: ' + error);
            });
    }
}