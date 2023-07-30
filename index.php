<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require_once('header.php') ?>
    
    <title>Home</title>
    <style>

      .Headerhome {
        height: 1000px;
        background: url(../picture/bannerindex.jpg);
        box-shadow:  inset 0 0 0 2000px rgba(0, 0, 0, 0.5);
        background-position: center;
        background-size: cover;
      }

      .text-index {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 800px;
        color: #fff;
        text-align: center;
      }
      </style>
  </head>
  <body>
  
    <!-- HEADER -->
    <div class="Headerhome">

    <?php require_once('menu.php'); ?>

    <div class="container">
        <div class="text-index">
            <div class="container d-flex">
              <div class="container btn-primary rounded" style="padding: 2.5rem;font-size: 3rem">
                  <div class="container">
                    <p>Because</p> <span class="text-warning">&nbsp;Address</span> <p>&nbsp;Is Important.<h1/>
                    </div>
              </div>
              <div class="container"></div>
            </div>
        </div>
      </div>
    </div>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.0.2/js/bootstrap.min.js"></script>
    
  </body>
</html>


