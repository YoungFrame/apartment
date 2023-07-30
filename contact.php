<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require_once('header.php') ?>
    
    <title>Contact</title>

  </head>
  <body>
  
    <!-- HEADER -->
    <div class="HeaderCon">
    <?php require_once('menu.php'); ?>
      <div class="text-con">
        <div>
          <h1>Contact</h1>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="text-con2 my-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21905.761663599005!2d100.3811230096305!3d13.933093510563452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e284c0cf76ab3b%3A0x987646dfdf55eea4!2z4LiZ4LiZ4LiX4Lia4Li44Lij4Li1!5e0!3m2!1sth!2sth!4v1690041027962!5m2!1sth!2sth" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="clearflax"></div>
    
    <form action="" class="container">
      <div class="bg-white ">
        <footer class="my-4 ">
              <div class="row justify-content-center">

                  <div class="col-12 col-md-3 mb-3 py-4">
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><i class="fa-solid fa-location-dot text-primary"></i> 845 Tambon Bang Bua Thong, Amphoe Bang Bua Thong, Nonthaburi, 11110 Thailand Thailand</li>
                        <li class="nav-item mb-2"><i class="fa-solid fa-phone text-primary"></i> (99) 259 77 88</li>
                        <li class="nav-item mb-2"><i class="fa-solid fa-envelope text-primary"></i> support@apm4you.com</li>
                    </ul>
                  </div>

                  <div class="col-12 col-md-3 mb-3 py-4">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" required>
                      </div>
                  </div>

                  <div class="col-12 col-md-3 mb-3 py-4 ">
                    <div class="mb-3">
                        <label class="form-label">Massage</label>
                        <textarea col="6" class="form-control" name="subject" placeholder="Enter Massage" required></textarea>
                      </div>

                      <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-primary">SUBSCRIBE NOW</button>
                          </div>
                      </div>

                  </div>
                  
          </div>
        </footer>
      </div>
    </form> 

    <div class="clearflax"></div>

    <?php require_once('footer.php') ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.0.2/js/bootstrap.min.js"></script>
    
  </body>
</html>


