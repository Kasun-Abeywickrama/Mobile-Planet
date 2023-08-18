<?php 
  session_start();
?>
<header>
    <div class="container-fluid">
      <div class="container-fluid top-bar">
        <div class="welocome" title="Home">Welcome to Mobile Planet</div>
        <div class="top-bar-links-wrapper">
          <ul>
            <?php
                if(isset($_SESSION['log_name'])){
                  include_once 'includes/dbConn.inc.php';
                  $query = "select adminOrCustomer from user where userId=".$_SESSION['log_id']."";
                  $result = mysqli_query($conn,$query);
                  $record = mysqli_fetch_assoc($result);
                  if($record['adminOrCustomer'] == "1"){
                    echo '
                    <a href="admin/pages/dashboard.php">
                    <li><i class="bx bxs-location-plus"></i><span>Admin Dashboard</span></li>
                    </a>
                    ';
                  }
                }
            ?>
          
            <a href="wishlist.php">
              <li><i class='bx bxs-heart'></i><span>Store Location</span></li>
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
            <div class="input-wrapper">            
                <input type="text" id="search-val" oninput="search();" ininput="x();" class="search-bar-input search-input" placeholder="Search" style="padding-left: 10px;" oninput="search();">
                <div class="search-bar-body" id="s-body" style="width: 100%;">
                   
                </div>
            </div>
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

                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Phones </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">

                        <?php 
                          include_once 'includes/dbConn.inc.php';
                          $query = "SELECT * FROM brand WHERE brandId IN (SELECT DISTINCT brandId FROM item WHERE categoryId='1')";
                          $result = mysqli_query($conn,$query);
                          if($result){
                            while($record = mysqli_fetch_assoc($result)){
                              echo '<form action="category.php" method="post" style="padding-bottom:5px;"><input type="hidden" name="cat-name" value="Mobile Phones"><input type="hidden" name="cat-id" value="1"><button style="width:100%; height:30px; background-color:white; border:none; text-align: left;" name="submit">'.$record["brandName"].'</button></form>';
                            }
                          }
                        ?>
                    </div>
                </li> 
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tablets </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">

                        <?php 
                          include_once 'includes/dbConn.inc.php';
                          $query = "SELECT * FROM brand WHERE brandId IN (SELECT DISTINCT brandId FROM item WHERE categoryId='2')";
                          $result = mysqli_query($conn,$query);
                          if($result){
                            while($record = mysqli_fetch_assoc($result)){
                              echo '<form action="category.php" method="post" style="padding-bottom:5px;"><input type="hidden" name="cat-name" value="Tablets"><input type="hidden" name="cat-id" value="2"><button style="width:100%; height:30px; background-color:white; border:none; text-align: left;" name="submit">'.$record["brandName"].'</button></form>';
                            }
                          }
                        ?>
                    </div>
                </li> 
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Accessories </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">

                        <?php 
                          include_once 'includes/dbConn.inc.php';
                          $query = "SELECT * FROM brand WHERE brandId IN (SELECT DISTINCT brandId FROM item WHERE categoryId='3')";
                          $result = mysqli_query($conn,$query);
                          if($result){
                            while($record = mysqli_fetch_assoc($result)){
                              echo '<form action="category.php" method="post" style="padding-bottom:5px;"><input type="hidden" name="cat-name" value="Accessories"><input type="hidden" name="cat-id" value="3"><button style="width:100%; height:30px; background-color:white; border:none; text-align: left;" name="submit">'.$record["brandName"].'</button></form>';
                            }
                          }
                        ?>
                    </div>
                </li> 





                <li class="nav-item"> <a class="nav-link" href="aboutus.php">About us&nbsp;</a> </li>
                <li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact us&nbsp;</a> </li>



                <li class="nav-item"> <a class="nav-link disabled" href="#">Offers</a> </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
         function search(){
          $(document).ready(function(){
            $.ajax({
                type:'POST',
                url:'includes/search.inc.php',
                data:{
                    sKey:$('#search-val').val()
                },
                success:function(data){
                    $('#s-body').html(data);
                }
            });
          });
         }               
</script>


