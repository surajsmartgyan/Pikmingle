<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pikmingle </title>


 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="#">
  <meta name="keywords"
    content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
  <meta name="author" content="#">

  <link rel="icon" href="files/assets/images/favicon.png" type="image/x-icon">

  <link href="../css?family=Open+Sans:400,600" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">

  <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
  <style>
    .custom-checkbox {
      width: 20px; /* Adjust the width as needed */
      height: 20px; /* Adjust the height as needed */
    }
  </style>
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
include("Navbar.php");
?>
     
       <!-- ===============content=================== -->
   

     <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                          
                            

                            <!-- =====================add button ==================================== -->

                            <button type="button" class="btn btn-success waves-effect btn-align "
                                style="margin-left: 800px;padding: 10px 30px ;" data-toggle="modal"
                                data-target="#small-Modal">Add SVG</button>
                            <div class="modal fade" id="small-Modal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add SVG</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="assetName">Asset Name</label>
                                                    <input type="text" class="form-control"
                                                        id="assetName" placeholder="Enter Asset Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="assetDescription">Description</label>
                                                    <input type="textarea" class="form-control"
                                                        id="assetDescription"
                                                        placeholder="Enter Asset Description">
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="uploadFile">Preview File</label>
                                                    <input type="file" class="form-control-file"
                                                        id="uploadFile">
                                                </div>
                                                <div class="form-group">
                                                    <label for="assetType">Type</label>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="assetType" value="Free" id="freeType">
                                                        <label class="form-check-label"
                                                            for="freeType">Free</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input"
                                                            name="assetType" value="Premium"
                                                            id="premiumType">
                                                        <label class="form-check-label"
                                                            for="premiumType">Premium</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mailFile">Main File</label>
                                                    <input type="file" class="form-control-file"
                                                        id="mailFile">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success waves-effect"
                                                id="saveAsset">Save Asset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--======================================= table ====================================== -->

                            <div class="col-xl-12 col-md-12 mt-5">
                                <div class="card table-card">
                                    <div class="card-header text-right">
                                        <span style="display: inline;float:left">
                                            <h5>Assets</h5>
                                        </span>
                                        <div style=" padding-top: 10px;">

                                            <div class="date-filter" style="display: inline-block;">
                                                <label for="start-date">Start Date:</label>
                                                <input type="date" id="start-date">
                                            </div>

                                            <div class="date-filter" style="display: inline-block;">
                                                <label for="end-date">End Date:</label>
                                                <input type="date" id="end-date">
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
                                                        <th>Asset Name</th>
                                                        <th>Description</th>
                                                        <th>Preview</th>
                                                        <th>Main File</th>
                                                        <th>Type</th>
                                                        <th>History</th>
                                                        <th>Action</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Asset 1</td>
                                                        <td>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                            
                                                  
                                                    
                                                                
                                                        <td><label
                                                                class="label label-success">free</label>
                                                        </td>
                                                        <td> <a href="#">  <i class="feather icon-download f-20 ml-3"></i></a></td>
                                                        <td>
                                                            
                                                            <button type="button" class="btn btn-success waves-effect btn-align "
                                                             data-toggle="modal"
                                                            data-target="#small-Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                              </svg></button>
                                                      
                                                       
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch ml-3">
                                                              <input class="form-check-input custom-checkbox" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                            </div>
                                                          </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2.</td>
                                                        <td>Asset 2</td>
                                                        <td>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><label
                                                                class="label label-danger">Premium</label>
                                                        </td>
                                                        <td> <a href="#">  <i class="feather icon-download f-20 ml-3"></i></a></td>
                                                        <td>
                                                            <button type="button" class="btn btn-success waves-effect btn-align "
                                                             data-toggle="modal"
                                                            data-target="#small-Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                              </svg></button>
                                                      
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch ml-3">
                                                              <input class="form-check-input custom-checkbox" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                            </div>
                                                          </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3.</td>
                                                        <td>Asset 3</td>
                                                        <td>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><label
                                                                class="label label-success">free</label>
                                                        </td>
                                                         <td> <a href="#">  <i class="feather icon-download f-20 ml-3"></i></a></td>
                                                        <td>
                                                            <button type="button" class="btn btn-success waves-effect btn-align "
                                                             data-toggle="modal"
                                                            data-target="#small-Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                              </svg></button>
                                                      
                                                            
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch ml-3">
                                                              <input class="form-check-input custom-checkbox" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                            </div>
                                                          </td>
                                                    </tr>

                                                    <tr>
                                                        <td>4.</td>
                                                        <td>Asset 4</td>
                                                        <td>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><label
                                                                class="label label-danger">Premium</label>
                                                        </td>
                                                        <td> <a href="#">  <i class="feather icon-download f-20 ml-3"></i></a></td>
                                                        <td>
                                                            <button type="button" class="btn btn-success waves-effect btn-align "
                                                             data-toggle="modal"
                                                            data-target="#small-Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                              </svg></button>
                                                      
                                                             
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch ml-3">
                                                              <input class="form-check-input custom-checkbox" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                            </div>
                                                          </td>
                                                    </tr>

                                                    <tr>
                                                        <td>5.</td>
                                                        <td>Asset 5</td>
                                                        <td>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                        </td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><a href="#">  <i class="feather icon-eye f-20 ml-3"></i></a></td>
                                                        <td><label
                                                                class="label label-success">free</label>
                                                        </td>
                                                        <td> <a href="#">  <i class="feather icon-download f-20 ml-3"></i></a></td>
                                                        <td>
                                                            <button type="button" class="btn btn-success waves-effect btn-align "
                                                             data-toggle="modal"
                                                            data-target="#small-Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                              </svg></button>
                                                             
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch ml-3">
                                                              <input class="form-check-input custom-checkbox" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                            </div>
                                                          </td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-12 mb-5" style="margin-left: 600px;">
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


                       
  


       
          <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
          <script type="text/javascript" src="files/bower_components/jquery/dist/jquery.min.js"></script>
          <script type="text/javascript" src="files/bower_components/jquery-ui/jquery-ui.min.js"></script>
          <script type="text/javascript" src="files/bower_components/popper.js/dist/umd/popper.min.js"></script>
          <script type="text/javascript" src="files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

          <script type="text/javascript" src="files/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>

          <script type="text/javascript" src="files/bower_components/modernizr/modernizr.js"></script>

          <script type="text/javascript" src="files/bower_components/chart.js/dist/Chart.js"></script>

          <script src="files/assets/pages/widget/amchart/amcharts.js"></script>
          <script src="files/assets/pages/widget/amchart/serial.js"></script>
          <script src="files/assets/pages/widget/amchart/light.js"></script>
          <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script type="text/javascript" src="files/assets/js/SmoothScroll.js"></script>
          <script src="files/assets/js/pcoded.min.js"></script>

          <script src="files/assets/js/vartical-layout.min.js"></script>
          <script type="text/javascript" src="files/assets/pages/dashboard/custom-dashboard.js"></script>
          <script type="text/javascript" src="files/assets/js/script.min.js"></script>
</body>

</html>

