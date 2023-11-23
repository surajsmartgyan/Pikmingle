<!doctype html>
<html lang="en">

<head>
  <title>Sell_Content</title>
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
                <input type="password" name="" id="" class="form-control" placeholder="******">
                <a href="recoverpassword" class="text-info setup-password">I forgot my password</a>
              </div>
              <a href="seller/Dashboard">
              <div class="col-auto">
                <button type="submit" class="btn text-light mb-3 w-100  fw-bold" style="box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;background:#dc3545;border-radius:8px;">Log in</button>
              </div>
              </a>
              <!-- google login -->
              <div class="col-auto border border-2 mb-2" style="box-shadow: rgba(0, 0, 0, 0.06) 0px 2px 4px 0px inset; border-radius:8px;">
                <a target="_blank" href="https://accounts.google.com/v3/signin/identifier?dsh=S-1073648387%3A1679473516491830&continue=https%3A%2F%2Faccounts.google.com%2Fgsi%2Fselect%3Fclient_id%3D705648808057-3chuddbr6oahbebib1uh693k02sgfl30.apps.googleusercontent.com%26ux_mode%3Dpopup%26ui_mode%3Dcard%26as%3DGRpmswHGS6LWB9UfHrcf7A%26channel_id%3Dc14c017a9ece5cd332415effe96830c1670a7ab545511ae55c9d00acde5264c9%26origin%3Dhttps%3A%2F%2Fid.freepikcompany.com&faa=1&ifkv=AQMjQ7Q532civjTqefwoz42WQtiAPKafXfPC0ScARVJisbvqP6V_gMiv8EBh6EDt9dmxzXGmLtnHGg&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                  <button type="submit" class="btn w-100 fw-bold btn-sm">
                    <img src="https://img.icons8.com/color/48/null/google-logo.png" style="width: 10%;"/> Continue with Google
                  </button>
                </a>
              </div>
              <p class="sub-title mb-3"><span class="text-center">Don’t you have an account?<a href="seller_signup" class="text-info setup-password" style="color: #3474d4; text-decoration: none;"> Sign up</a></span></p>
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