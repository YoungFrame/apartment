<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php require_once('header.php') ?>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <title>About</title>
    <style>
h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
 
      </style>
  </head>
  <body>
  
    <!-- HEADER -->
    
    <div class="HeaderCon">
    <?php require_once('menu.php'); ?>
      <div class="text-con">
        <div>
          <h1>We got it for you</h1>
          <p>Convenient, Clean, Inexpensive</p>
        </div>
      </div>
    </div>
    
    <div class="container" style="padding: 4rem 0;">
      <div class="text-con text-dark">
          <div class="container">
            <div class="imgbx">
                <img src="../picture/aboutpic.jpg" class="rounded mx-auto d-block">
            </div>
          </div>
          <div class="container text-start">
            <h1 style="margin-bottom: 1rem;" class="text-primary">Vision</h1>
            <p>The database database verifies who is looking for properties to buy-rent for more or to invest. arpartment 4 you There must be a quality guarantee for both the sale or rent of single houses for the apartments. Have questions about the new project?</p>
          </div>
        </div>
    </div>

    <div class="SecondCon d-flex">
      <div class="container">
  <h2 class="text-white">Website Development</h2>
   <section class="customer-logos slider">
      <div class="slide">
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
          <div class="container">
            <div class="imgbx">
            <img src="../picture/developone.jpg" class="rounded mx-auto d-block "  alt="...">
            </div>
          </div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-primary">APARTMENT 4 YOU</h5>
              <p class="card-text">โสภณ ลาภเหลือ</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
   </section>
   </div>
<br>
</div>
    

    <div class="clearflax"></div>

    <?php require_once('footer.php') ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script type="text/javascript"> 
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
</script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../bootstrap-5.0.2/js/bootstrap.min.js"></script>
    
  </body>
</html>


