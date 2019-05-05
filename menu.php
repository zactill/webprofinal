<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Menu</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#datepicker1" ).datepicker();
        $( "#datepicker2" ).datepicker();
      } );
    </script>
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
        <form class="" action="shoppingcart.php" method="post">
        <div>
        <h2>Car Reservation Select</h2>
        <label>Car Pickup</label><input type="date" id="datepicker1" name="start" value="">
        <label>Car Drop Off</label><input type="date" id="datepicker2" name="end" value="">
        <h4><a href="inventory.php">Check Current Inventory</a><h4>


        <table class="carselect">
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
            <td><input type="radio" id="compact" name="cars"></td>
            <td><input type="radio" id="midsize" name="cars"></td>
            <td><input type="radio" id="luxury" name="cars"></td>
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
