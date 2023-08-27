<div class="side-bar">

    <a href="../../index.php">
        <div class="side-bar-logo">
            <div class="logo-icon-img"></div>
            <div class="logo-icon" id="logo-name" title="Home">MobilePlanet</div>
        </div>
    </a>
    <div class="links-wrapper">
        <ul>
            <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i>
                    <div>Dashboard</div>
                </a></li>
            <li><a href="item-purchase.php"><i class='bx bxs-purchase-tag'></i>
                    <div>Purchase</div>
                </a></li>
            <li><a href="Item-Insert.php"><i class='bx bx-cuboid'></i>
                    <div>Add product</div>
                </a></li>
            <li><a href="orders.php"><i class='bx bxs-package'></i>
                    <div>Orders</div>
                </a></li>
            <li><a href=""><i class='bx bxs-bar-chart-alt-2'></i>
                    <div>Analytics</div>
                </a></li>
            <li><a href="stock.php"><i class='bx bx-candles'></i>
                    <div>Stock</div>
                </a></li>
            <li><a href="notifications.php"><i class='bx bxs-bell'></i>
                    <div>Notifications</div>
                </a></li>
            <li><a href="inq-update.php"><i class='bx bxs-chat'></i>
                    <div>Inquiries</div>
                </a></li>
            <li><a href="update-company-info.php"><i class='bx bxs-cog'></i>
                    <div>Settings</div>
                </a></li>
            <li><a href="../../includes/logout.inc.php"><i class='bx bx-log-out'></i>
                    <div>Log out</div>
                </a></li>
        </ul>
    </div>
</div>

<div class="top-bar">

    <div class="logo">
        <div class="toggle-btn" id="side-bar-toggle-btn"><i class='bx bx-menu-alt-left'></i></div>

    </div>
    <div class="s-bar" style="font-size:30px; text-align:center; font-weight:600;">Admin Panel</div>
    <div class="r-b-panel">
        <div class="icon-wrapper">
            <a href="notifications.php" style="text-decoration:none; color:black;">
                <i class='bx bxs-bell'></i>
                <div class="counter">
                    <?php
                        $nOM = 0;
                        include_once '../../includes/dbConn.inc.php';
                        $sqlNOM = "SELECT COUNT(*) AS row_count FROM inquiry WHERE readed = 0";
                        $resultNOM = $conn->query($sqlNOM);
                        $rowNOM = $resultNOM->fetch_assoc();
                        $nOM = $rowNOM['row_count'];

                        $sqlNON = "SELECT COUNT(*) AS row_count FROM transaction WHERE status = 0";
                        $resultNON = $conn->query($sqlNON);
                        $rowNON = $resultNON->fetch_assoc();
                        echo $rowNON['row_count']+$nOM;
                    ?>
                </div>
            </a>
        </div>
        <div class="icon-wrapper">
            <a href="inq-update.php" style="text-decoration:none; color:black;">
                <i class='bx bxs-message-dots'></i>
                <div class="counter">
                    <?php
                        echo $nOM;
                    ?>
                </div>
            </a>
        </div>
        
        <div class="user-icon">A</div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script>
    let side_bar_btn = document.getElementById("side-bar-toggle-btn");
    let side_bar = document.querySelector(".side-bar");

    side_bar_btn.onclick = function () {
        side_bar.classList.toggle("active");
    }
    if (window.screen.width < 450) {
        side_bar.classList.toggle("active");
    }
</script>

<!-- <script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.4.1.js"></script> -->

