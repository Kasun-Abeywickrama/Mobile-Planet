<?php 
  session_start();
?>
<header>
    <div class="container-fluid">
      <div class="container-fluid top-bar">
        <div class="welocome">Welcome to Mobile Planet</div>
        <div class="top-bar-links-wrapper">
          <ul>
            <a href="wishlist.php">
              <li><i class='bx bxs-location-plus'></i><span>Store Location</span></li>
            </a>
            <a href="wishlist.php">
              <li><i class='bx bxs-heart'></i><span>Wish list</span></li>
            </a>
            <a href="cart.php">
              <li><i class='bx bxs-cart'></i><span>Cart</span></li>
            </a>
            <a href="signin.php">
              <li><i class='bx bxs-user'></i><span><?php if(isset($_SESSION['log_name'])){echo $_SESSION['log_name'].'&nbsp<a href="includes/logout.inc.php" name = "logout">Log out</a>';}else{echo "Sign in";}?></span></li>
            </a>

          </ul>
        </div>
      </div>


      <div class="container-fluid search-bar">
        <a href="index.php"><div class="logo"></div></a>
        <div class="search-input-wrapper">
          <form class="form-inline my-2 my-lg-0">
            <input type="text" class="search-bar-input search-input" placeholder="Search" style="padding-left: 10px;">
            <button class="search-bar-input-btn search-btn"><i class='bx bx-search'></i></button>
          </form>
        </div>
      </div>


      <div class="container-fluid nav-bar-wrapper">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand"
              href="#">Categories&nbsp;</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
              aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span
                      class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Phones </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item"
                      href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tablets&nbsp; </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item"
                      href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Accessories&nbsp;
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item"
                      href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>

                <li class="nav-item"> <a class="nav-link" href="#">About us&nbsp;</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Contact us&nbsp;</a> </li>


                <li class="nav-item"> <a class="nav-link disabled" href="#">Offers</a> </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>