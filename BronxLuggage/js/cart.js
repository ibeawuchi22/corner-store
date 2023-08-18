

    

  function purchaseAll() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems'));

    if (cartItems && cartItems.length > 0) {
      // Perform the purchase logic for all items
      cartItems.forEach(item => {
        console.log(`Purchased ${item.name} for $${item.price}`);
      });

      // Clear the cart
      localStorage.removeItem('cartItems');
      updateCart();

      msg.innerHTML = 'All items purchased successfully!';
      msg.style.color = 'white';
      msg.style.backgroundColor = 'green';
    } else {
      msg.innerHTML = 'Your cart is empty';
      msg.style.color = 'white';
      msg.style.backgroundColor = 'red';
    }
  }

  function removeFromCart(index) {
    const cartItems = JSON.parse(localStorage.getItem('cartItems'));

    if (cartItems && cartItems.length > 0 && index >= 0 && index < cartItems.length) {
      cartItems.splice(index, 1); // Remove the item at the given index
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      updateCart();

      msg.innerHTML = 'Item removed from cart successfully!';
      msg.style.color = 'white';
      msg.style.backgroundColor = 'green';
    } else {
      msg.innerHTML = 'Failed to remove item from cart';
      msg.style.color = 'white';
      msg.style.backgroundColor = 'red';
    }
  }

  // updateCart();


  window.addEventListener('DOMContentLoaded', function() {
    const tickerContent = document.getElementById('ticker-content');
  
    function updateTicker() {
      // Get current date, time, and location
      const currentDate = new Date().toDateString();
      const currentTime = new Date().toLocaleTimeString();
  
      // Get current location
      getCurrentLocation(function(location) {
        // Update ticker content
        tickerContent.textContent = `Current Date: ${currentDate} | Current Time: ${currentTime} | Location: ${location}`;
  
        // Repeat the update every second
        setTimeout(updateTicker, 1000);
      });
    }
  
    function getCurrentLocation(callback) {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          function(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
  
            // Fetch location data using latitude and longitude
            // Here, you can use any geolocation API or service to get the location information
  
            // For demonstration purposes, we'll use a simple example that displays latitude and longitude
            const location = `${latitude.toFixed(2)}, ${longitude.toFixed(2)}`;
  
            callback(location);
          },
          function(error) {
            console.error('Error occurred while retrieving location:', error);
            callback('Location not available');
          }
        );
      } else {
        callback('Location not available');
      }
    }
  
    updateTicker();
  });

 
