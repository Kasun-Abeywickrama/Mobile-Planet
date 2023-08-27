<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/inq-update.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inquiry-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
</head>
<body>
    <?php include_once 'header.php'; ?>

    <div class="page-content">
    <table>
            <thead>
                <th>Name</th>
                <th>Email</th>
               <th>More details</th>
            </thead>
            <tbody>
                <tr>
                <?php

                    include '../../includes/dbConn.inc.php';
                    $sql="SELECT * FROM inquiry";

                    $result= $conn->query($sql);

                    if($result->num_rows >0){
                         while($row = $result->fetch_assoc()){
                             echo  "<tr><td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>
                            <form action='inq-details.php' method='post'>
                            <input type='hidden' value='".$row['inqId']."' name='inq-id'>
                            <input type='submit' value='For more details...' name='submit' action='inq-details.php' >
                            </form>
                            </td></tr>";
                            }
                            }
                                    
                ?>
                </tr>
            </tbody>
</table>

    </div>
                        
    
</body>
</html>