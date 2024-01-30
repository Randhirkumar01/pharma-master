<?php
session_start();
if($_SESSION['username'])
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Home.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="Home.php" class="js-logo-clone">DIPLOMA DAWAWALLAH</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="Home.php">Home</a></li>
                <li><a href="store.php">Store</a></li>          
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
       

          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>    </a>

            <img src="images/user.png" class="user-pic" onclick="toggleMenu()">
          </div>
<div class="sub-menu-wrap" id="subMenu">
    <div class="sub-menu">
        <div class="user-info">
            <img src="images/user.png">
            <h3> <?php  echo $_SESSION['username']; ?> </h3>
        </div>
        <hr>

        <a href="#" class="sub-menu-link">
            <img src="images/profile.png">
            <p>Edit Profile</p>
            <span> > </span>
        </a>

        <a href="#" class="sub-menu-link">
            <img src="images/privacy.png">
            <p>Privacy & Security</p>
            <span> > </span>
        </a>

        <a href="#" class="sub-menu-link">
            <img src="images/help.png">
            <p>Help & Support</p>
            <span> > </span>
        </a>

        <a href="logout.php" class="sub-menu-link">
            <img src="images/logout.png">
            <p>Logout</p>
            <span> > </span>
        </a>

    </div>
<script>
    let subMenu = document.getElementById("subMenu");
    
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-4">
          <h1>MY CART</h1>
        </div>

        <div class="col-lg-9">

           <table class="table">
                <thead class="text-center">
                  <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                     <tbody class="text-center">
                      <?php
                      if(isset($_SESSION['cart']))
                      {

                        foreach($_SESSION['cart'] as $key =>$value)
                      {
                        $sr=$key+1;
                        echo"
                          <tr>
                          <td>$sr</td>
                          <td>$value[Item_Name]</td>
                          <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                          <td>
                            <form action='manage_cart.php' method='POST'>
                              <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'</td>
                              <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                          <td class= 'itotal'></td>
                          <td>
                          <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn btn-outline-danger'>REMOVE</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                          </td>
                          </tr>

                         ";
                      }
                     }
                      ?>

                      </tbody>
            </table>

        </div>
              
        <div class="col-lg-3">
          <div class="border bg-light rounded p-4">
          <h4>Grand Total:</h4>
          <h5 class="text-right" id="gtotal"></h5>
          <br>
          <?php
          if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
          {
          ?>
          <form action="purchase.php" method="POST">
              <div class="form-group">
                  <label>Full Name</label>
                   <input type="text" name="full_name" class="form-control" required>
               </div>
               <div class="form-group">
                  <label>Phone no.</label>
                   <input type="number" name="phone_no" class="form-control" required>
               </div>
               <div class="form-group">
                  <label>Address</label>
                   <input type="text" name="address" class="form-control" required>
               </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" id="exampleRadios1" value="COD" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Cash On Delivery
                </label>
              </div>
              <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
          </form>
          <?php
          }
          ?>
          </div>
        </div>
     
      </div>
    </div>

<script>
  var gt=0;
  var iprice= document.getElementsByClassName('iprice');
  var iquantity= document.getElementsByClassName('iquantity');
  var itotal= document.getElementsByClassName('itotal');
  var gtotal= document.getElementById('gtotal');

  function subTotal()
  {
    gt=0;
    for(i=0;i<iprice.length;i++)
    {
      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
      gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }
  subTotal();
</script>

  </body>
</html>

<?php
}
  else{
    header('location:index.html');
  }

?>