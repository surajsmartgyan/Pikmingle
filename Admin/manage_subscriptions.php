<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pikmingle</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <link rel="icon" href="./files/assets/images/pikminle.png" type="image/x-icon">

    <link href="../css?family=Open+Sans:400,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
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


                                        <!--======================================= cards ====================================== -->

                                        <div class="row">
                                            <div class="col-xl-4 col-md-4">
                                                <a href="#">
                                                    <div class="card bg-light  update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-dark"><b>Free</b></h4>
                                                                    <h6 class="text-dark m-b-0">$8.99 per month</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <button type="button"
                                                                        class="btn btn-success waves-effect btn-align "
                                                                        data-toggle="modal"
                                                                        data-target="#small-Modal"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                        </svg></button>
                                                                    <!-- modal -->
                                                                    <div class="modal fade" id="small-Modal"
                                                                        tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog modal-sm"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Details
                                                                                    </h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>




                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="price">Price</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="price"
                                                                                                placeholder="Enter Price">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="cashback">Cashback</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="cashback"
                                                                                                placeholder="Enter Cashback">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="limit">Limit</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="limit"
                                                                                                placeholder="Enter Limit">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-default waves-effect"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-success waves-effect"
                                                                                        id="saveAsset">Save
                                                                                        Asset</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- modal -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-dark m-b-0"><b>
                                                                    100 Transactions</br>2% Cashback</br>$10,000
                                                                    limit</b></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xl-4 col-md-4">
                                                <a href="#">
                                                    <div class="card bg-success  update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">Premium</h4>
                                                                    <h6 class="text-white m-b-0">$29.99 per month</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <button type="button"
                                                                        class="btn btn-success waves-effect btn-align "
                                                                        data-toggle="modal"
                                                                        data-target="#small-Modal"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                        </svg></button>
                                                                    <!-- modal -->
                                                                    <div class="modal fade" id="small-Modal"
                                                                        tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog modal-sm"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Details
                                                                                    </h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>




                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="price">Price</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="price"
                                                                                                placeholder="Enter Price">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="cashback">Cashback</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="cashback"
                                                                                                placeholder="Enter Cashback">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="limit">Limit</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="limit"
                                                                                                placeholder="Enter Limit">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-default waves-effect"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-success waves-effect"
                                                                                        id="saveAsset">Save
                                                                                        Asset</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- modal -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0">
                                                                100 Transactions</br>2% Cashback</br>$10,000 limit</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-xl-4 col-md-4">
                                                <a href="#">
                                                    <div class="card bg-light  update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-dark"><b>Team</b></h4>
                                                                    <h6 class="text-dark m-b-0">$99.99 per month</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <button type="button"
                                                                        class="btn btn-success waves-effect btn-align "
                                                                        data-toggle="modal"
                                                                        data-target="#small-Modal"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-pencil" viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                        </svg></button>
                                                                    <!-- modal -->
                                                                    <div class="modal fade" id="small-Modal"
                                                                        tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog modal-sm"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Details
                                                                                    </h4>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form>




                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="price">Price</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="price"
                                                                                                placeholder="Enter Price">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="cashback">Cashback</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="cashback"
                                                                                                placeholder="Enter Cashback">
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="limit">Limit</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="limit"
                                                                                                placeholder="Enter Limit">
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-default waves-effect"
                                                                                        data-dismiss="modal">Close</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-success waves-effect"
                                                                                        id="saveAsset">Save
                                                                                        Asset</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- modal -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-dark m-b-0"><b>
                                                                    100 Transactions</br>2% Cashback</br>$10,000
                                                                    limit</b></p>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>

                                        </div>




                                        <!-- cars -->


                                        <div class="col-xl-12 col-md-12 mt-5" ">
                                            <div class=" card table-card" style="margin-top: -30px;">
                                            <div class="card-header">

                                                <h5>Subscriptions</h5>

                                                <div style=" padding-top: 10px;">

                                                    <div class="date-filter" style="display: inline-block;">
                                                        <label for="start-date">Start Date:</label>
                                                        <input type="date" id="start-date" style="border-radius: 10px;">
                                                    </div>

                                                    <div class="date-filter" style="display: inline-block;">
                                                        <label for="end-date">End Date:</label>
                                                        <input type="date" id="end-date" style="border-radius: 10px;">
                                                    </div>

                                                    <button class="btn-success"><i
                                                        class="feather icon-filter f-20"></i></button>
                                                </div>

                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>sr.</th>
                                                                <th>Name</th>
                                                                <th>Type</th>
                                                                <th>Suscription</th>
                                                                <th>Transaction ID</th>
                                                                <th>Amount</th>
                                                                <th>Date</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1.</td>
                                                                <td>Suraj</td>
                                                                <td>
                                                                    <label class="label label-success">Coustomer</label>
                                                                </td>
                                                                <td>
                                                                    <label class="label label-success">Premium</label>

                                                                </td>
                                                                <td>TX6313254654324643
                                                                </td>
                                                                <td>
                                                                    50000
                                                                </td>
                                                                <td>12/07/2021
                                                                </td>


                                                            </tr>




                                                            <tr>
                                                                <td>1.</td>
                                                                <td>Suraj</td>
                                                                <td>
                                                                    <label class="label label-success">Coustomer</label>
                                                                </td>
                                                                <td>
                                                                    <label class="label label-success">Premium</label>

                                                                </td>
                                                                <td>TX6313254654324643
                                                                </td>
                                                                <td>
                                                                    50000
                                                                </td>
                                                                <td>12/07/2021
                                                                </td>


                                                            </tr>




                                                            <tr>
                                                                <td>1.</td>
                                                                <td>Suraj</td>
                                                                <td>
                                                                    <label class="label label-success">Coustomer</label>
                                                                </td>
                                                                <td>
                                                                    <label class="label label-success">Premium</label>

                                                                </td>
                                                                <td>TX6313254654324643
                                                                </td>
                                                                <td>
                                                                    50000
                                                                </td>
                                                                <td>12/07/2021
                                                                </td>


                                                            </tr>




                                                            <tr>
                                                                <td>1.</td>
                                                                <td>Suraj</td>
                                                                <td>
                                                                    <label class="label label-success">Coustomer</label>
                                                                </td>
                                                                <td>
                                                                    <label class="label label-success">Premium</label>

                                                                </td>
                                                                <td>TX6313254654324643
                                                                </td>
                                                                <td>
                                                                    50000
                                                                </td>
                                                                <td>12/07/2021
                                                                </td>


                                                            </tr>



                                                            <tr>
                                                                <td>1.</td>
                                                                <td>Suraj</td>
                                                                <td>
                                                                    <label class="label label-success">Coustomer</label>
                                                                </td>
                                                                <td>
                                                                    <label class="label label-success">Premium</label>

                                                                </td>
                                                                <td>TX6313254654324643
                                                                </td>
                                                                <td>
                                                                    50000
                                                                </td>
                                                                <td>12/07/2021
                                                                </td>


                                                            </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-md-12 mb-5" style="margin-left: 700px;">
                                                <nav aria-label="Page navigation example ">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                          
                                            </div>
                                        </div>
                                    </div>





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