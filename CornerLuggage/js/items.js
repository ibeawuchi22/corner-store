function addToCart(itemName, price, imageSrc) {
    let cartItems = localStorage.getItem('cartItems');
    cartItems = cartItems ? JSON.parse(cartItems) : [];
    cartItems.push({ name: itemName, price: price, image: imageSrc });
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    updateCartIcon();
    updateCartIcon2();
    alert('Item added to cart');
  }
  
  function updateCartIcon() {
      const cartIcon = document.querySelector('.cart-icon');
      const cartItems = JSON.parse(localStorage.getItem('cartItems'));
      const cartItemCount = cartItems ? cartItems.length : 0;
  
      cartIcon.setAttribute('data-count', cartItemCount);
      localStorage.setItem('cartItemCount', cartItemCount);
    
    }
  
    function updateCartIcon2() {
      const cartIcon = document.querySelector('.cart-icon1');
      const cartItems = JSON.parse(localStorage.getItem('cartItems'));
      const cartItemCount = cartItems ? cartItems.length : 0;
   
      cartIcon.setAttribute('data-count', cartItemCount);
      localStorage.setItem('cartItemCount', cartItemCount);
    
    }
    function goToCart() {
      window.location.href = '../cart.php';
    }
  
  

