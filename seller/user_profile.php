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
     


         
   <!-- =====================add button ==================================== -->
   <div class="pcoded-content">
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper">
                  <div class="page-body">
   <button type="button" class="btn btn-info waves-effect btn-align "
   style="margin-left: 800px;padding: 10px 20px ;margin-bottom: 20px;" data-toggle="modal"
   data-target="#small-Modal">Edit Profile</button>
   <div class="modal fade" id="small-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Profile</h4>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="profile">Profile</label>
                      <input type="file" class="form-control" id="prifle" placeholder="Image">
                  </div>
                    <div class="form-group">
                        <label for="pinterest">Pinterest ID</label>
                        <input type="text" class="form-control" id="pinterest" placeholder="Pinterest ID">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook ID</label>
                        <input type="text" class="form-control" id="facebook" placeholder="Facebook ID">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn ID</label>
                        <input type="text" class="form-control" id="linkedin" placeholder="LinkedIn ID">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram ID</label>
                        <input type="text" class="form-control" id="instagram" placeholder="Instagram ID">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success waves-effect" id="saveProfile">Save Profile</button>
            </div>
        </div>
    </div>
 </div>
 
                    <section style="background-color: #eee;">
                      <div class="container py-5">
                        <div class="row">
                          <div class="col">
                            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                              <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                               
                              </ol>
                            </nav>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="card mb-4">
                              <div class="card-body text-center">
                                <img src="files/assets/images/user.jpg"
                                  alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3">Suraj Singh</h5>
                                <p class="text-muted mb-1">Full Stack Developer</p>
                                <p class="text-muted mb-4">DigiCoders Pvt Ltd Lucknow </p>
                               
                              </div>
                            </div>
                          
                          </div>
                          <div class="col-lg-8">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">Johnatan Smith</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">example@example.com</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">(097) 234-5678</p>
                                  </div>
                                </div>
                                <hr>
                               
                                
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">DigiCoders Pvt Ltd Lucknow </p>
                                  </div>
                                </div>
                                <hr>
                               
                                
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Instagram ID</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">insta//john_23</p>
                                  </div>
                                </div>
                                <hr>
                               
                                
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Facebook ID</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">fb//john_23</p>
                                  </div>
                                </div>
                                <hr>
                               
                                
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Linkedin ID</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">linkedin//john_23</p>
                                  </div>
                                </div>
                                <hr>
                               
                                
                                <div class="row">
                                  <div class="col-sm-3">
                                    <p class="mb-0">Pinterest ID</p>
                                  </div>
                                  <div class="col-sm-9">
                                    <p class="text-muted mb-0">pinterest//john_23</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          
                          </div>
                        </div>
                      </div>
                    </section>

                  </div>
                </div>
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