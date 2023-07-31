<html>
    <body>
        <?php
            include 'includes/dbConn.inc.php';

            //Check if the user has been logged in
                //

            //get the item id 
                //Consider the item id as $itemID
                $itemID = 1;

            //get the cart id
                //Consider the cart id as $cartID
                $cartID = 1;

            $addToCart = "INSERT INTO itemcartwishlist VALUES($itemID, $cartID, 1)";
            if($conn->query($addToCart) == TRUE)
            {
                echo '<script>alert("Item has been added to the cart");</script>';
                echo "<script>window.location.replace('http://localhost/item-page.php')</script>";
            }
        ?>
    </body>
</html>

