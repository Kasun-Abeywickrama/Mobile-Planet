<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Purchase-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/item-purchase.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        td
        {
            padding:12px;
        }
    </style>
</head>
<body>
<?php include_once 'header.php'; ?>
    <div class="page-content">
    <br><br>
        <center>
                <div class="input-wrapper"  align="center">            
                <input type="text" id="search-val" oninput="search();" ininput="x();" class="search-bar-input search-input" placeholder="Search" style="padding-left: 10px;" oninput="search();">
                <div class="search-bar-body" id="s-body" style="width: 100%;">
                
                </div>
        
        </div>
        </center>
        <form action="stock-insert.php" method="post" name="stockInsert" onSubmit="return addToTable();">
        <center><table>
            <tr>
                <td><span><br>Id : </span></td>
                <td><input type="text" name="item-id" id="item-id" readonly></td>
            </tr>
            <tr>
                <td><span>Name : </span></td>
                <td><input type="text" name="item-name" id="nm" readonly></td>
            </tr>
            <tr>
                <td><span>Qty : </span></td>
                <td><input type="text" id="qty" name="qty"></td>
            </tr>
            <tr>
                <td><span>Buying Price : </span></td>
                <td><input type="text" id="bp" name="b-price"></td>
            </tr>
            <tr>
                <td><span>Selling Price : </span></td>
                <td><input type="text" id="sp" name="s-price"></td>
            </tr>
        </table></center>
            <center><input type="submit" value="ADD" name="sub"></center>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
            function search(){
            $(document).ready(function(){
                $.ajax({
                    type:'POST',
                    url:'item-purchase-search.php',
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
    <script>
        function saveTemp(id,nm,bp,sp){
            $('#search-val').val("");
            search();
            $('#nm').val(nm);
            $('#bp').val(bp);
            $('#sp').val(sp);
            $('#iid').text(id);
            $('#item-id').val(id);
        }
    </script>
    <script>
        function addToTable()
            {
                alert('hi');
                if(document.getElementById("item-id").value=="" || document.getElementById("nm").value=="" || document.getElementById("qty").value=="" || document.getElementById("bp").value=="" || document.getElementById("sp").value=="")
                {
                    echo "All fields are required";
                    return false;
                }
                else if(isNaN(document.getElementById("item-id").value) || document.getElementById("qty").value || document.getElementById("bp").value || document.getElementById("sp").value)
                {
                    echo("Item Id, Quantity, Buying Price and Selling Price should be numbers");
                    return false;
                }
                else if(document.getElementById("item-id").value.length>7)
                {
                    echo("Item Id should be less than 7 characters");
                    return false;
                }
                else
                {
                    return true;
                }
            }
    </script>
</body>
</html>