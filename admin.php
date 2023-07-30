<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require_once('header.php') ?>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <title>Login</title>
   <style>
    .box-login {display: flex;justify-content: center;align-items: center;height: 280px;color: #fff;text-align: center;}
    .login-body {flex: 1 1 auto; padding: 4rem 2rem;}
   </style>
  </head>
  <body >
  
    <!-- HEADER -->
    
    <div class="HeaderLogin">
    <?php require_once('menu.php'); ?>
 
    </div>
    
    <div class="body flex-grow-1 px-3 bg-light" style="height: 800px;">
        <div class="container" >
          <div class="row align-items-center justify-content-center" style="height: 45rem;">
            <div class="col-lg-5 col-md-6 col-sm-12">
              <div class="card mb-4">
                <div class="login-body">
                  <div class="example ">
                    <h1 class="text-center">Welcome Admin</h1>
                    <div class="mb-3">
                        <img style="height: 400px;object-fit:cover;" src="../picture/<?php echo $_SESSION['img']; ?>" class="card-img-top rounded d-block "  alt="...">
                        </div>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                        <div class="mb-3">
                          <label class="form-label" >Name : <?php echo $_SESSION['fullname']; ?></label>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" >Position : <?php echo $_SESSION['position']; ?></label> 
                        </div>
                        <div class="col-12 mb-3">
                          <a href="logout_fun.php" class="btn btn-info btn-lg" style="width: 100%;"> LOGOUT </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="clearflax"></div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.0.2/js/bootstrap.min.js"></script>
    
  </body>
</html>


