

    

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


  
 
