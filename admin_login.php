<!doctype html>
<html lang="en">

<head>
  <title>Admin Login</title>
  <?php require 'include/head.php' ?>

</head>

<body>
  <main>
    <div class="container mt-4 mb-4">
      <div class="row justify-content-md-center">
        <div class="col-sm-4">
          <div class="card text-start p-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <img class="card-img-top" src="assets/images/logo/seler.webp" alt="seller" style="height: 175px;">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                    <h4 class="card-title fw-bold">Log In</h4>
                </div>
              </div>

              <!-- <p class="card-text">Body</p> -->
              <div class="mb-3">
                <label for="" class="form-label">Email ID</label>
                <input type="email" name="" id="" class="form-control" placeholder="example@gmail.com">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="email" name="" id="" class="form-control" placeholder="example@gmail.com">
              </div>
              
              <a href="Admin/index">
              <div class="col-auto">
                <button type="submit" class="btn text-light mb-3 w-100  fw-bold" style="box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;background:#dc3545;border-radius:8px;">Log in</button>
              </div>
              </a>
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