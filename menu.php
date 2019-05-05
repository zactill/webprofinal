<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Menu</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <ul>
          <li><a href="menu.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="shoppingcart.php">Cart</a></li>
          <li><a href="login.php">Logout</a></li>

        </ul>

        <div>
        <h2>Car Reservation Select</h2>
        <h3>Car Pickup</h3>
        <h3>Car Drop Off</h3>
        <h4><a href="inventory.php">Check Current Inventory</a><h4>

        <form class="" action="shoppingcart.php" method="post">
        <table>
          <tr>
            <th>SUV</th>
            <th>Compact</th>
            <th>Midsize</th>
            <th>Luxury</th>
          </tr>
          <tr>
            <td><img src="/images/suv.png"></td>
            <td><img src="/images/compact.png"></td>
            <td><img src="/images/sedan.png"></td>
            <td><img src="/images/luxury.png"></td>
          </tr>
          <tr>
            <td><input type="radio" id="suv" name="cars" required></td>
            <td><input type="radio" id="suv" name="cars"></td>
            <td><input type="radio" id="suv" name="cars"></td>
            <td><input type="radio" id="suv" name="cars"></td>
          </tr>
          <tr>
            <td><input type="submit" value="Add to Cart"></td>
          </tr>
        </table>

      </form>

        </div>

      </div>




    </div>

  </body>
</html>
