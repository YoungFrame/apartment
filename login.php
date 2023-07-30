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
                <form class="login-body" action="login_fun.php" method="post">
                  <div class="example">
                    <h1 class="text-center">Admin Login</h1>
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div class="mb-3">
                            <div class="alert alert-danger alert-dismissible">
                                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                <?php echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        </div>
                    <?php  endif  ?>
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                        <div class="mb-3">
                          <label class="form-label" >Username</label>
                          <input class="form-control" type="text" placeholder="Username" name="user_em" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" >Example textarea</label>
                          <input class="form-control" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="col-12 mb-3">
                          <button type="submit" name="login" id="login" class="btn btn-warning btn-lg" style="width: 100%;"> LOGIN </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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


