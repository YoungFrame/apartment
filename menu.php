<nav>
    <div class="container">
            <div class="NavCon">
              <div class="textlogo text-warning">APARTMANT 4 YOU</div>
              <ul class="menu" id="myMenu">
                <li style="margin: 0rem 1rem;list-style: none;"><a href="index.php">HOME</a></li>
                <li style="margin: 0rem 1rem;list-style: none;"><a href="about.php">ABOUT</a></li>
                <li style="margin: 0rem 1rem;list-style: none;"><a href="apartment-project.php">APARTMENT PROJECT</a></li>
                <li style="margin: 0rem 1rem;list-style: none;"><a href="contact.php">CONTACT</a></li>
                <li style="margin: 0rem 1rem;list-style: none;"><a href="login.php">LOGIN</a></li>
              </ul>
              <div class="ham-menu" onclick="toggleham(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
          </div>
    </div>
</nav>

  <script type="text/javascript"> 
	function toggleham(x) {
    x.classList.toggle("change");

    let myMenu = document.getElementById('myMenu');
    if (myMenu.className === 'menu') {
      myMenu.className += ' menu-active'
    } else {
      myMenu.className = 'menu'
    }
  }
</script> 