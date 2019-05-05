<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
    <link rel = "stylesheet" type="text/css" href="style.css">

    <script type="text/javascript">

    function checkout(){
      var x = document.getElementById("checkout");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
}
    </script>

  </head>
  <body>
    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="menu.php">Home</a></li>
          <li>My Cart</li>
          <li ><button onclick="checkout()">Checkout</button></li>
        </ul>


        <form class="orderform" id="checkout" action="index.html" method="post">
          <label for="first">First Name:</label>
          <input type="text" name="" value="" required>

          <label for="last">Last Name:</label>
          <input type="text" name="" value="" required>
            <br>
          <label for="email">Email:</label>
          <input type="text" name="" value="" required>

          <label for="phone">Phone Number:</label>
          <input type="text" name="" value="" required>
            <br>
          <label for="address">Address:</label>
          <input type="text" name="" value="" required>
            <br>
          <label for="city">City:</label>
          <input type="text" name="" value="" required>

          <label for="state">State:</label>
          <input type="text" name="" value="" required>

          <label for="zip">Zip Code:</label>
          <input type="text" name="" value="" required>
            <br>
          <label for="credit">Credit Card Number:</label>
          <input type="text" name="" value="" required>

          <label for="cvv">CVV:</label>
          <input type="text" name="" value="" required>
            <br>
          <input type ="submit" id = "btn" value= "Reserve Car" />
        </form>

        <div class="cart">
          <h3>Cart Contents</h3>

          <table>
            <tr>
              <th>Item</th><th>Cost</th><th>Quantity</th><th>Total</th>
            </tr>

          </table>

        </div>

      </div>

    </div>

  </body>
</html>
