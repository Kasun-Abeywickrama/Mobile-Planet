<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/stock.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="page-content">
        <br>
        <h4 style="margin-left:200px;">STOCK</h4>
        <input type="text" id="search-val" oninput="search();" placeholder="Search" style="margin-left:200px;">
        <br><br><br>
        <div style="display:flex; margin-left:200px;">
                <div style="width:350px; font-weight:bold;">Item Name</div>
                <div style="width:100px; font-weight:bold;">Stock</div>
                <div style="width:100px; font-weight:bold;">Buying price</div>
                <div style="width:100px; font-weight:bold;">Selling Price</div>
            </div><br>
        <div id="t-body"></div>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script>
        function search(){
            $(document).ready(function(){
                $.ajax({
                    type:'POST',
                    url:'stock-search.php',
                    data:{
                        sKey:$('#search-val').val()
                    },
                    success:function(data){
                        $('#t-body').html(data);
                    }
                });
            });
            } 
        </script>
        <script>
            $(document).ready(function(){
                search();
            });
        </script>
    </div>
</body>
</html>