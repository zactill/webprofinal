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

        <div class="cart">
          <h3>Cart Contents</h3>

          <table>
            <tr>
              <th>Item</th><th>Cost</th><th>Quantity</th><th>Total</th>
            </tr>

          </table>

        </div>

        <div>
        <form class="orderform" id="checkout" action="confirm.php" method="post">
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
            <div class="ccjs-card">
              <label class="ccjs-number">
                Card Number
                <input name="card-number" class="ccjs-number" placeholder="•••• •••• •••• ••••">
              </label>

              <label class="ccjs-csc">
                Security Code
                <input name="csc" class="ccjs-csc" placeholder="•••">
              </label>

              <label class="ccjs-name">
                Name on Card
                <input name="name" class="ccjs-name">
              </label>

              <fieldset class="ccjs-expiration">
                <legend>Expiration</legend>
                <select name="month" class="ccjs-month">
                  <option selected disabled>MM</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>

                <select name="year" class="ccjs-year">
                  <option selected disabled>YY</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                </select>
              </fieldset>

              <select name="card-type" class="ccjs-hidden-card-type">
                <option value="amex" class="ccjs-amex">American Express</option>
                <option value="discover" class="ccjs-discover">Discover</option>
                <option value="mastercard" class="ccjs-mastercard">MasterCard</option>
                <option value="visa" class="ccjs-visa">Visa</option>
            </div>
            <br>
          <input type ="submit" id = "btn" value= "Reserve Car">
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
