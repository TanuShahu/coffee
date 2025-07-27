// JavaScript functionality can be added here
// For example, form validation or interactive elements
document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault(); // prevent real submission
  
    // Optionally clear form
    e.target.reset();
  
    // Show notification
    const notification = document.getElementById('notification');
    notification.classList.add('show');
  
    // Hide after 3 seconds
    setTimeout(() => {
      notification.classList.remove('show');
    }, 3000);
  });
 