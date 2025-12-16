// Initialize EmailJS with your Public Key
(function() {
    // Replace "your_public_key" with your actual EmailJS Public Key
    emailjs.init("lMmli758P4SjmN7oQ");
})();

// Add event listener to the form
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Show loading state on button
    const submitButton = document.getElementById('button-submit');
    const originalButtonText = submitButton.innerHTML;
    submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
    submitButton.disabled = true;

    // Prepare template parameters from form values
    const templateParams = {
        from_name: document.getElementById('name').value,
        from_email: document.getElementById('email').value,
        subject: document.getElementById('subject').value || "Contact Form Inquiry",
        message: document.getElementById('message').value
    };

    // Replace these values with your actual EmailJS service ID and template ID
    const serviceID = 'service_161boxi';
    const templateID = 'template_owifu9g';

    // Send auto-reply email to user
    emailjs.send(serviceID, templateID, templateParams)
        .then(function(response) {
            console.log('Email sent successfully!', response.status, response.text);

            // Reset the form
            document.getElementById('contact-form').reset();

            // Show your existing success modal
            // If you're using Bootstrap modal:
            $('#successModal').modal('show');
            // Or if you have a custom function to show the modal:
            // showSuccessModal();

            // Reset button state
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
        })
        .catch(function(error) {
            console.log('FAILED...', error);

            // Handle error - you might want to show an error modal or message
            alert('Failed to send message. Please try again later.');

            // Reset button state
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
        });
});