function goToCart() {
    window.location.href = 'cart.php';
  }
  function updateCartIcon2() {
    const cartIcon = document.querySelector('.cart-icon1');
    const cartItems = JSON.parse(localStorage.getItem('cartItems'));
    const cartItemCount = cartItems ? cartItems.length : 0;

    cartIcon.setAttribute('data-count', cartItemCount);
    localStorage.setItem('cartItemCount', cartItemCount);
  
  }

  function updateCartIcon() {
    const cartIcon = document.querySelector('.cart-icon');
    const cartItems = JSON.parse(localStorage.getItem('cartItems'));
    const cartItemCount = cartItems ? cartItems.length : 0;

    cartIcon.setAttribute('data-count', cartItemCount);
    localStorage.setItem('cartItemCount', cartItemCount);
  
  }
  