<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us-MobilePanet</title>
    <link rel="icon" href="assets/favicon-32x32.png" type="image/png">

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="css/headerAndFooter.css" rel="stylesheet" type="text/css">
    <link href="css/contact-us.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>

<body>
<?php include_once 'header.php';?>

<?php 
    /*Connecting the database*/
    include_once 'includes/dbConn.inc.php';

    /*Getting the company details from the database*/
    $getdet = "SELECT companyAddress, companyTelephone, companyOpeningTimes FROM company WHERE companyId='1'";
    $exedet = $conn->query($getdet);
    $row = mysqli_fetch_array($exedet);
?>

    <div class="container-fluid contactus-wrapper">
        <div class="container contact-details-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <b>Mobile Planet</b><br>
                        <?php echo "$row[0]"; ?>
                </div>
                <div class="col-md-4">
                    <b>Telephone</b><br>
                        <?php echo "$row[1]"; ?>
                </div>
                <div class="col-md-4">
                    <b>Opening Times</b><br>
                        <?php echo "$row[2]"; ?>
                </div>
            </div>
        </div>

        <div class="container-fluid map-wrapper">
            <div class="container">
                <h2 class="text-center">Our location</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.582438458324!2d80.03778166477238!3d6.820531295070536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1690898785769!5m2!1sen!2slk"
                    width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="container-fluid contact-form-wrapper">
            <div class="container contact-form">
                <h2 class="text-center">Inquiry</h2>
                <form name="log" method="post" action="includes/contactus-form.inc.php" onSubmit="return x();">
                    <div class="form-group">
                        <label for="exampleInputName">Your Name&nbsp;</label>
                        <input type="text" class="form-control" id="exampleInputName" name="yn">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">E-mail&nbsp;</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="em">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputInquiry">Inquiry&nbsp;</label>
                        <input type="text" class="form-control" id="exampleInputInquiry" name="in">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script>
        function x()
        {
            if(document.log.yn.value=="" || document.log.em.value=="" || document.log.in.value=="")
            {
                alert("All fields are required.");
                return false;
            }
            else if(document.log.yn.value.length>70)
            {
                alert("Name should be less than 70 characters");
                return false;
            }
            else{
                return true;
            }
        }
        </script>

    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>

</html>