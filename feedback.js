const form = document.getElementById("feedbackForm");
    const thankyou = document.getElementById("thankyou");

    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Stop the page from reloading
      form.style.display = "none"; // Hide the form
      thankyou.style.display = "block"; // Show thank you message
    });