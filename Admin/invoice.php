<!DOCTYPE html>
<html lang="en">
<head>
<title>Pikmingle</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="./files/assets/images/pikminle.png" type="image/x-icon">

<link href="../css?family=Open+Sans:400,600" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">

<script>
    
</script>
</head>
<body>

<div class="theme-loader">
<div class="ball-scale">
<div class="contain">
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
</div>
</div>
</div>

<?php
include("navbar.php");
?>



                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <select id="myDropdown" class="form-select"
                                                aria-label="Default select example"
                                                style="width: 500px; height: 30px; border-radius: 15px; margin-left: 10px;">

                                                <option value="invoice.php">Seller</option>
                                                <option value="#">Coustomer</option>
                                            </select>

                                            <script>
                                                document.getElementById("myDropdown").addEventListener("change", function () {
                                                    var selectedOption = this.value;
                                                    if (selectedOption) {
                                                        window.location.href = selectedOption;
                                                    }
                                                });
                                            </script>

                                        </div>

                                        <div class="row">

                                            <div class="col-xl-12 col-md-12 mt-5">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5> Seller Invoice</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Sr.</th>
                                                                        <th>Seller Name</th>
                                                                        <th>Transaction ID</th>
                                                                        <th>Amount</th>
                                                                        <th>Transaction Date</th>
                                                                        <th>Print</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td> Suraj Singh</td>
                                                                        <td>uj@ujjj</td>
                                                                        <td>50000</td>
                                                                        <td>14/12/2023</td>
                                                                        <td> <a href="invoiceu.php" target="_blank"><button type="button"
                                                                                class="btn btn-danger">Print</button></a>
                                                                        </td>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td> Suraj Singh</td>
                                                                        <td>uj@ujjj</td>
                                                                        <td>50000</td>
                                                                        <td>14/12/2023</td>
                                                                        <td> <button type="button"
                                                                                class="btn btn-danger">Print</button>
                                                                        </td>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td> Suraj Singh</td>
                                                                        <td>uj@ujjj</td>
                                                                        <td>50000</td>
                                                                        <td>14/12/2023</td>
                                                                        <td> <button type="button"
                                                                                class="btn btn-danger">Print</button>
                                                                        </td>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td> Suraj Singh</td>
                                                                        <td>uj@ujjj</td>
                                                                        <td>50000</td>
                                                                        <td>14/12/2023</td>
                                                                        <td> <button type="button"
                                                                                class="btn btn-danger">Print</button>
                                                                        </td>
                                                                        </td>
                                                                    </tr>










                                                                </tbody>
                                                            </table>

                                                        </div>
                                                        <div class="col-xl-12 col-md-12 mb-5" style="margin-left: 720px;">
                                                            <nav aria-label="Page navigation example ">
                                                                <ul class="pagination">
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">Previous</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">Next</a></li>
                                                                </ul>
                                                            </nav>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- table -->





                                        <script data-cfasync="false"
                                            src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                        <script type="text/javascript"
                                            src="files/bower_components/jquery/dist/jquery.min.js"></script>
                                        <script type="text/javascript"
                                            src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>
                                        <script type="text/javascript"
                                            src="files/bower_components/popper.js/dist/umd/popper.min.js"></script>
                                        <script type="text/javascript"
                                            src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                                        <script type="text/javascript"
                                            src="files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

                                        <script type="text/javascript"
                                            src="files/bower_components/modernizr/modernizr.js"></script>

                                        <script type="text/javascript"
                                            src="files/bower_components/chart.js/dist/Chart.js"></script>

                                        <script src="files/assets/pages/widget/amchart/amcharts.js"></script>
                                        <script src="files/assets/pages/widget/amchart/serial.js"></script>
                                        <script src="files/assets/pages/widget/amchart/light.js"></script>
                                        <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                                        <script type="text/javascript" src="files/assets/js/SmoothScroll.js"></script>
                                        <script src="files/assets/js/pcoded.min.js"></script>

                                        <script src="files/assets/js/vartical-layout.min.js"></script>
                                        <script type="text/javascript"
                                            src="files/assets/pages/dashboard/custom-dashboard.js"></script>
                                        <script type="text/javascript" src="files/assets/js/script.min.js"></script>
</body>

</html>