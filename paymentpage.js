document.addEventListener("DOMContentLoaded", function() {
  const form = document.querySelector("form");
  const eventNameDisplay = document.getElementById("event-name-display");
  const eventCodeDisplay = document.getElementById("event-code-display");
  const eventTypeDisplay = document.getElementById("event-type-display");
  const ticketQuantityDisplay = document.getElementById("ticket-quantity-display");
  const totalPriceDisplay = document.getElementById("total-price-display");

  form.addEventListener("submit", function(event) {

    event.preventDefault();

    const eventName = document.getElementById("event-name").value;
    const eventCode = document.getElementById("event-code").value;
    const eventType = document.getElementById("event-type").value;
    const ticketQuantity = document.getElementById("ticket-quantity").value;
    const totalPrice = calculateTotalPrice(ticketQuantity);

    eventNameDisplay.textContent = "Event Name: " + eventName;
    eventCodeDisplay.textContent = "Event Code: " + eventCode;
    eventTypeDisplay.textContent = "Event Type: " + eventType;
    ticketQuantityDisplay.textContent = "Number of Tickets: " + ticketQuantity;
    totalPriceDisplay.textContent = "Total Price: Rs" + totalPrice.toFixed(2);

    //Add the checkout button dynamically
    const checkoutButton = document.createElement("button");
    checkoutButton.textContent = "Pay now";
    checkoutButton.classList.add("checkout-button");
    checkoutButton.addEventListener("click", function() {
    
      window.location.href = "payment.php";
    
    });

    form.appendChild(checkoutButton);

    form.reset();

  });

  function calculateTotalPrice(quantity) {
    const ticketPrice = 1000;
    return ticketPrice * quantity;
  }
});
