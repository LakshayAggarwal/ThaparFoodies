<?php include'cart2f.php'; ?>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "secret";
$dbname = "thaparfoodies";
$prefix = "";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()) {
	die("Could not connect database").mysqli_connect_errno()."(".($mysqli_connect_errno(). ")");
}
?>
<html>
<head>
<link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
<link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo">
<link href="http://assets.codepen.io/assets/fullpage/fullpage-398d4b242ab35734237963c5b95246c0.css" media="screen" rel="stylesheet" type="text/css" />

<link href="cart2.css" rel="stylesheet" />
<link rel="alternate" type="application/json+oembed"
  href="http://codepen.io/api/oembed?url=http://codepen.io/bartveneman/pen/KHxLG&format=json"
  title="Shopping Cart" />
</head>
<body>
<div class="main">
  <h1>Food Court</h1>
  <h2 class="sub-heading">shop more, eat more</h2>

  <section class="shopping-cart">
    <ol class="ui-list shopping-cart--list" id="shopping-cart--list">

      <script id="shopping-cart--list-item-template" type="text/template">
        <li class="_grid shopping-cart--list-item">
          <div class="_column product-image">
            <img class="product-image--img" src="{{=img}}" alt="Item image" />
          </div>
          <div class="_column product-info">
            <h4 class="product-name">{{=name}}</h4>
            <p class="product-desc">{{=desc}}</p>
            <div class="price product-single-price">&#8377;{{=price}}</div>
          </div>
          <div class="_column product-modifiers" data-product-price="{{=price}}">
            <div class="_grid">
              <button class="_btn _column product-subtract">&minus;</button>
              <div class="_column product-qty">0</div>
              <button class="_btn _column product-plus">&plus;</button>
            </div>
            <button class="_btn entypo-trash product-remove">Remove</button>
            <div class="price product-total-price">&#8377;0.00</div>
          </div>
        </li>
      </script>

    </ol>

    <footer class="_grid cart-totals">
      <div class="_column subtotal" id="subtotalCtr">
        <div class="cart-totals-key">Subtotal</div>
        <div class="cart-totals-value">&#8377;0.00</div>
      </div>
      <div class="_column shipping" id="shippingCtr">
        <div class="cart-totals-key">Shipping</div>
        <div class="cart-totals-value">&#8377;0.00</div>
      </div>
      <div class="_column taxes" id="taxesCtr">
        <div class="cart-totals-key">Taxes (6%)</div>
        <div class="cart-totals-value">&#8377;0.00</div>
      </div>
      <div class="_column total" id="totalCtr">
        <div class="cart-totals-key">Total</div>
        <div class="cart-totals-value">&#8377;0.00</div>
      </div>
      <div class="_column checkout">
        <button class="_btn checkout-btn entypo-forward">Checkout</button>
      </div>
    </footer>

  </section>
</div>
<script src="http://assets.codepen.io/assets/editor/full/full_page_renderer-9738c0e50d945f75267949ec69e69d33.js" type="text/javascript"></script>

</body>
</html>