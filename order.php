<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./order.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700&display=swap"
    />
  </head>
  <body>
    <div class="order">
      <nav class="navbar-wrapper" id="navbar">
        <nav class="navbar" id="navbar">
          <a class="ellipse-parent">
            <div class="ellipse-div"></div>
            <img class="vector-icon5" alt="" src="./public/vector3.svg" />
          </a>
          <div class="home-parent">
            <a class="home" href="/home">Home</a>
            <a class="home" href="/adopt">Adopt</a>
            <a class="home" href="/get-involved">Get Involved</a>
            <a class="home" href="/blog">Blog</a>
            <a class="home" href="/about-us">About us</a>
          </div>
          <div class="rectangle-parent">
            <input
              class="rectangle-input"
              value="e.g. bhotekukur"
              placeholder="e.g. japanese spitz"
              type="search"
            />

            <img
              class="iconamoonsearch-thin"
              alt=""
              src="./public/iconamoonsearchthin.svg"
            />
          </div>
          <button class="shelter-wrapper" id="shelter">
            <div class="shelter">Shelter?</div>
          </button>
        </nav>
      </nav>
      <main class="frame-main" id="body">
        <div class="frame-parent3" id="deliveryDetails">
          <form class="name-parent" id="description">
            <div class="name">Name</div>
            <div class="phone-number">Phone Number</div>
            <div class="email">Email</div>
            <input
              class="frame-child7"
              name="customerName"
              placeholder="Full name"
              type="text"
            />

            <input
              class="frame-child8"
              name="phoneNumber"
              placeholder="99-999-999-99"
              type="tel"
            />

            <input
              class="frame-child9"
              name="productName"
              placeholder="yourmail@gmail.com"
              type="email"
            />
          </form>
          <form class="address-parent" id="deliveryAddress">
            <div class="name">Address</div>
            <div class="phone-number">Postal Code</div>
            <div class="email">Address 2</div>
            <input
              class="frame-child7"
              name="address"
              placeholder="kuleshwor, kathmandu"
              type="text"
            />

            <input
              class="frame-child8"
              name="postalCode"
              placeholder="e.g. 44600"
              type="number"
            />

            <input
              class="frame-child9"
              name="address2"
              placeholder="e.g. googlemaps.com"
              type="text"
            />
          </form>
          <div class="delivery-address">Delivery Address</div>
          <div class="personal-details">Personal details</div>
        </div>
        <div class="frame-parent4">
          <form class="payment-method-parent" id="description">
            <div class="payment-method">Payment Method</div>
            <div class="promo-code">Promo Code</div>
            <div class="voucher">Voucher</div>
            <select
              class="select-payment-method-parent"
              required="{true}"
              id="paymentMethod"
            >
              <option value="1">Select Payment Method</option>
              <option value="2">esewa</option>
              <option value="3">Khalti</option>
              <option value="4">Bank Transfer</option>
            </select>
            <button
              class="place-order-wrapper"
              autofocus="{true}"
              id="placeOrder"
            >
              <div class="place-order">Place Order</div>
            </button>
            <input
              class="frame-child13"
              name="promoCode"
              placeholder="if any..."
              type="text"
            />

            <input
              class="frame-child14"
              name="voucher"
              placeholder="No Applicable Voucher"
              type="text"
            />

            <div class="order-summary-parent" id="orderSummary">
              <div class="order-summary">Order Summary</div>
              <div class="adoption-fee">Adoption Fee</div>
              <div class="div2">$ 130.00</div>
              <div class="delivery-fee">Delivery Fee</div>
              <div class="free">Free</div>
              <div class="total-payment">Total payment</div>
              <div class="div3">$ 130.00</div>
              <div class="all-taxes-included">All taxes included</div>
            </div>
            <img class="line-icon" alt="" src="./public/line-11.svg" />
          </form>
          <h1 class="payment">Payment</h1>
        </div>
        <div class="product-name-group" id="productId">
          <h1 class="product-name1">Product Name</h1>

          <!-- Display product name in the iframe -->
          <iframe class="frame-iframe" id="petType" name="petType">
            <?php
            // Get the product name from the URL query parameter
            $productName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';

            // Display the product name
            echo $productName;
            ?>
          </iframe>

          <div class="pet-type-">Pet type - <?php echo htmlspecialchars($_GET['name']); ?></div>
        </div>
      </main>
      <
 