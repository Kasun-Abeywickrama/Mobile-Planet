    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/item-page.css" rel="stylesheet" type="text/css">
	<link href="css/purchase.css" rel="stylesheet" type="text/css">
    <link href="css/headerAndFooter.css" rel="stylesheet" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
    <?php 
        if($_POST['total-amount']=='0'){
            header('Location:cart.php?error=Cart_Empty');
        }
    ?>
    <?php include_once 'header.php'; ?>
        <div class="payment-wrapper">
            <form class="pdetails" action="includes/purchase.inc.php" method="post">
                <table>
                    <tr>
                        <td>Total Amount</td>
                        <td><?php echo $_POST['total-amount']?></td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td><?php echo $_POST['discount']?></td>
                    </tr>
                    <tr>
                        <td colspan="2">Card Details,</td>
                    </tr>
                    <tr>
                        <td>Card Number</td>
                        <td><input type="text" name="c-number"></td>

                    </tr>
                    <tr>
                        <td>CVV</td>
                        <td><input type="text" name="cvv"></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-success" value="Pay" name="payBtn"></td>
                    </tr>
                </table>
            </form>
        </div>
    <?php include_once 'footer.php'; ?>
    </body>
    </html>
