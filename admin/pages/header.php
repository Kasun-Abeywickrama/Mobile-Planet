<div class="side-bar">

    <div class="side-bar-logo">
        <div class="logo-icon-img"></div>
        <div class="logo-icon" id="logo-name">MobilePlanet</div>
    </div>
    <div class="links-wrapper">
        <ul>
            <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i>
                    <div> Dashboard</div>
                </a></li>
            <li><a href="Item-Insert.php"><i class='bx bx-cuboid'></i>
                    <div>Product</div>
                </a></li>
            <li><a href=""><i class='bx bxs-package'></i>
                    <div>Orders</div>
                </a></li>
            <li><a href=""><i class='bx bxs-bar-chart-alt-2'></i>
                    <div>Analytics</div>
                </a></li>
            <li><a href=""><i class='bx bx-candles'></i>
                    <div>Stock</div>
                </a></li>
            <li><a href=""><i class='bx bxs-bell'></i>
                    <div>Notifications</div>
                </a></li>
            <li><a href=""><i class='bx bxs-chat'></i>
                    <div>Messages</div>
                </a></li>
            <li><a href=""><i class='bx bxs-cog'></i>
                    <div>Settings</div>
                </a></li>
            <li><a href=""><i class='bx bx-log-out'></i>
                    <div>Log out</div>
                </a></li>
        </ul>
    </div>
</div>

<div class="top-bar">

    <div class="logo">
        <div class="toggle-btn" id="side-bar-toggle-btn"><i class='bx bx-menu-alt-left'></i></div>
        <div class="page-name" style="">Dashboard</div>

    </div>
    <div class="s-bar">
        <form> <input placeholder="Search">
            <i class='bx bx-search'></i>
        </form>
    </div>
    <div class="r-b-panel">
        <div class="icon-wrapper"><i class='bx bxs-bell'></i>
            <div class="counter">5</div>
        </div>
        <div class="icon-wrapper"><i class='bx bxs-message-dots'></i>
            <div class="counter">8</div>
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

