<!DOCTYPE html>
<html lang="en">

<script>
    function x()
    {
        if(document.log.yn.value=="")
        {
            alert("Name is missing");
        }
        if(document.log.yn.value.length>70)
        {
            alert("Name should be less than 70 characters")
        }
        if(document.log.em.value=="")
        {
            alert("Email is missing");
        }
        if(document.log.in.value=="")
        {
            alert("Inquiry is empty");
        }


    }
    </script>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="../css/headerAndFooter.css" rel="stylesheet" type="text/css">
    <link href="../css/contact-us.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



</head>

<body>
<?php include_once 'header.php';?>
    <div class="container-fluid contactus-wrapper">
        <div class="container contact-details-wrapper">
            <div class="row">
                <div class="col-md-4"><b>Mobile Planet Maharagama</b><br>5/A, Stanley Thilakarathne
                    Mawatha,<br>Nugegoda.</div>
                <div class="col-md-4"><b>Telephone</b><br>
                    0777788899</div>
                <div class="col-md-4"><b>Opening Times</b><br>Moday-Friday 8.30 a.m to 8.00 p.m<br>
                    and <br>
                    Saturday-Sunday 8.30&nbsp; a.m to 5.00 p.m</div>
            </div>
        </div>

        <div class="container-fluid map-wrapper">
            <div class="container">
                <h2 class="text-center">Our location</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.402392168639!2d79.92386107333095!3d6.842268119380374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2516c9a3676c1%3A0x60ebb44589246f33!2sMobile%20Planet!5e0!3m2!1sen!2slk!4v1689067967112!5m2!1sen!2slk"
                    width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="container-fluid contact-form-wrapper">
            <div class="container contact-form">
                <h2 class="text-center">Contact Form</h2>
                <form name="log">
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
                    <button type="submit" class="btn btn-primary" onclick="x();">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php';?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>

</html>