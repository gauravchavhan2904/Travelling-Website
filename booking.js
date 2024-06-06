document.getElementById('bookingForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from submitting normally
    
    // Display a confirmation message
    document.getElementById('confirmationMessage').textContent = 'You have successfully booked the event!';
    
    // Reset the form
    event.target.reset();
});


