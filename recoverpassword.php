<!doctype html>
<html lang="en">

<head>
  <title>Recover_Password</title>
  <?php require 'include/head.php' ?>

</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col text-center mt-1">
          <a href="index" class="ec-header-btn ec-header-user m-2">
            <div class="header-icon"><img src="assets/images/logo/piklogo.png" class="svg_img header_svg" alt=""  style="width: 100px; height: 100px;"/></div>
          </a>
          <h4 class="fw-bold">Recover your password</h4>
          <p>Enter the email that you used when register to recover your password. You will receive a password reset link.</p>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="container mt-4 mb-4">
      <div class="row justify-content-md-center">
        <div class="col-sm-4">
          <div class="card text-start p-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <!-- <img class="card-img-top" src="assets/images/logo/seler.webp" alt="seller" style="height: 175px;"> -->
            <div class="card-body">

              <!-- <p class="card-text">Body</p> -->
              <div class="mb-3">
                <label for="" class="form-label">Email ID</label>
                <input type="email" name="" id="" class="form-control" placeholder="example@gmail.com">
              </div>
              <div class="col-auto">
                <button type="submit" class="btn text-light mb-3 w-100 rounded-pill fw-bold" style="box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset; background:#d51c3f;border-radius:8px;">Send Link</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>