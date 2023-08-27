<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info-MobilePanet</title>
    <link rel="icon" href="assets/favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="css/user-update.css">
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    
</head>
    <body>

        <?php 
            session_start();
            /* Getting the userName to a variable somehow */
            $uId = $_SESSION["log_id"];

            /*Connecting the database */
            include 'includes/dbConn.inc.php';

            /* Executing the query to get the details of the user */
            $sel1 = "SELECT * FROM user WHERE userId='$uId'";
            $exe = $conn->query($sel1);
            $row = mysqli_fetch_array($exe);
        ?>

    <div class="wrapper">
        <form name="updateUserInfo" method="post" action="user-update-query.php" onsubmit="return userInfoValidate()">
        <div class="title">
        Update Personal Info
        </div>
        <div class="form">
            <div class="inputField">
            <!-- Email address is considered as the user name in this website -->
            <label>EMAIL ADDRESS</label>
            <input type="text" name="newem" class="input" value="<?php echo "$row[1]" ?>">
            </div>

            <div class="inputField">
            <label>FIRST NAME</label>
            <input type="text" name="newfnm" class="input" value="<?php echo "$row[8]" ?>">
            </div>

            <div class="inputField">
            <label>LAST NAME</label>
            <input type="text" name="newlnm" class="input" value="<?php echo "$row[9]" ?>">
            </div>
            
            <div class="inputField">
            <label>PASSWORD</label>
            <input type="password" name="newpw" class="input">
            </div>
            
            <div class="inputField">
            <label>GENDER</label>
            <div class="custom_select">
                <select name="newgen">
                <option value="0">Select</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                </select>
                </div>
            </div>
            
            
            <div class="inputField">
            <label>PHONE NUMBER</label>
            <input type="text" name="newpho" class="input" value="<?php echo "$row[3]" ?>">
            </div>
            
            <div class="inputField">
            <label>ADDRESS</label>
            <textarea name="newadd" class="textarea"><?php echo "$row[4]" ?></textarea>
            </div>
            
            <div class="inputField">
            <input type="submit" value="Update" class="btn"></div>
        </div>
    </form>
        </div>
        <script src="js/User-Update-JS/user-update.js"></script>
    </body>
    
</html>