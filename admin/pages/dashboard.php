<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Dashboard-Mobileplanet</title>
</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="page-content">
    <div class="container-fluid tile-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="tile">
                    <div class="amount">1585</div>
                    <div class="title">Total Order</div>
                    <div class="presentage-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="presentage-number">60%</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tile">
                    <div class="amount">$4855</div>
                    <div class="title">Total Sales</div>
                    <div class="presentage-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="presentage-number">90%</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tile">
                    <div class="amount">$5488</div>
                    <div class="title">Total Profit</div>
                    <div class="presentage-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="presentage-number">25%</div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tile">
                    <div class="amount">258</div>
                    <div class="title">Total Return</div>
                    <div class="presentage-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="presentage-number">80%</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                    <div class="recent-sales-wrapper">
                        <div class="title">Recent Sales</div> 
                        <div class="body">
                            <table>
                                <thead>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Sales</th>
                                    <th>Total</th>
                                </thead>
                               <tbody>
                                <tr>
                                    <td>02 Jan 2023</td>
                                    <td>Kasun Thiwanka</td>
                                    <td>Delivered</td>
                                    <td>$245.85</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2023</td>
                                    <td>Kasun Thiwanka</td>
                                    <td>Pending</td>
                                    <td>$245.85</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2023</td>
                                    <td>Kasun Thiwanka</td>
                                    <td>Delivered</td>
                                    <td>$245.85</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2023</td>
                                    <td>Kasun Thiwanka</td>
                                    <td>Delivered</td>
                                    <td>$245.85</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2023</td>
                                    <td>Kasun Thiwanka</td>
                                    <td>Delivered</td>
                                    <td>$245.85</td>
                                </tr>
                                <tr>
                                    <td>02 Jan 2023</td>
                                    <td>Kasun Thiwanka</td>
                                    <td>Delivered</td>
                                    <td>$245.85</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                            </table>
                            <button type="button" class="btn btn-primary recent-sales-btn">See All</button>
                        </div> 
                    </div> 
            </div>
            <div class="col-md-5">
                    <div class="top-seling-wrapper">
                        <div class="title">Stock</div> 
                        <div class="body">
                            <table>
                                <tr>
                                    <td>iphone 14 pro max</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>iphone 14 pro max</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>iphone 14 pro max</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>iphone 14 pro max</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>iphone 14 pro max</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
</div>
</body>
</html>