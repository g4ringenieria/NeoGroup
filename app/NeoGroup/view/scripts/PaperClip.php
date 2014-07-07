<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.ico">

    <title>Pepech</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->getBaseUrl(); ?>css/paperclip.css" rel="stylesheet">

    <!-- Resources -->
    <link href="<?php echo $this->getBaseUrl(); ?>assets/font-awewome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->getBaseUrl(); ?>css/animate.css" rel="stylesheet">
    <link href="<?php echo $this->getBaseUrl(); ?>css/lightbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="..."></a>
        </div>
        <div class="collapse navbar-collapse">
          <button class="navbar-btn btn btn-red pull-right hidden-sm hidden-xs">Sign In</button>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Home: Default</a></li>
                <li><a href="index-full.html">Home: Fullscreen</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
                <li><a href="help-center.html">Help Center</a></li>
                <li><a href="help-item.html">Help Item</a></li>
                <li><a href="pricing-table.html">Pricing Table</a></li>
                <li><a href="responsive-video.html">Responsive Video</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="sign-in.html">Sign In</a></li>
                <li><a href="sign-up.html">Sign Up</a></li>
                <li><a href="error-page.html">404 Error Page</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="portfolio-item.html">Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog-post.html">Blog Post</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shop-item.html">Shop Item</a></li>
                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                <li><a href="user-profile.html">User Profile</a></li>
              </ul>
            </li>
            <li class="hidden-sm">
              <a href="ui-elements.html">UI Elements</a>
            </li>
            <!-- Navbar Search -->
            <li class="hidden-xs" id="navbar-search">
              <a href="#">
                <i class="fa fa-search"></i>
              </a>
              <div class="hidden" id="navbar-search-box">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </li>
          </ul>
          <!-- Mobile Search -->
          <form class="navbar-form navbar-right visible-xs" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-red" type="button">Search!</button>
              </span>
            </div>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div> <!-- / .navigation -->

    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Home Slider -->
      <div class="home-slider">
        <!-- Carousel -->
        <div id="home-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1"></li>
            <li data-target="#home-slider" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <!-- Slide #1 -->
            <div class="item active" id="item-1">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <h1 class="first-child animated slideInDown delay-2">Powerful Responsive Theme For Business and Personal Projects</h1>
                    <h3 class="animated slideInDown delay-3">Beautiful Theme That Works Out Of The Box</h3>
                    <p class="text-muted animated slideInLeft delay-4">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Quisque pellentesque diam sed pulvinar lobortis. <a href="#" id="tooltip" data-toggle="tooltip" data-placement="top" title="Quisque pellentesque diam.">Vestibulum ante ipsum</a> primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                    <a href="#" class="btn btn-lg btn-red animated fadeInUpBig delay-5">Purchase Now</a>
                  </div>
                  <div class="col-sm-6 hidden-xs">
                    <img class="img-responsive" src="img/showcase.png" alt="...">
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
            </div> <!-- / .item -->
            <!-- Slide #2 -->
            <div class="item" id="item-2">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <ul class="lead">
                      <li class="animated slideInLeft delay-2"><span>Built with Bootstrap 3x</span></li>
                      <li class="animated slideInLeft delay-3"><span>20+ HTML Templates</span></li>
                      <li class="animated slideInLeft delay-4"><span>Isotope Gallery</span></li>
                      <li class="animated slideInLeft delay-5"><span>LESS Files Included</span></li>
                    </ul>
                    <ul class="lead string">
                      <li class="animated fadeInUpBig delay-6"><span>Professional Multi-purpose Theme</span></li>
                      <li class="animated fadeInUpBig delay-7"><span>That Works Out Of The Box</span></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 hidden-xs">
                    <img class="img-responsive" src="img/macbook.png" alt="...">
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->          
            </div> <!-- / .item -->
            <!-- Slide #3 -->
            <div class="item" id="item-3">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <h1 class="first-child animated slideInDown delay-2">Fully Packed With Features</h1>
                    <h3 class="animated slideInDown delay-3">Look No Further</h3>
                    <ul>
                      <li class="animated slideInLeft delay-4"><i class="fa fa-chevron-circle-right fa-fw"></i> Built With Bootstrap 3</li>
                      <li class="animated slideInLeft delay-5"><i class="fa fa-chevron-circle-right fa-fw"></i> Fully Responsive Design</li>
                      <li class="animated slideInLeft delay-6"><i class="fa fa-chevron-circle-right fa-fw"></i> Easy to Customize</li>
                      <li class="animated slideInLeft delay-7"><i class="fa fa-chevron-circle-right fa-fw"></i> 20+ HTML Templates</li>
                    </ul>
                    <a href="#" class="btn btn-lg btn-red animated fadeInUpBig delay-8">Purchase Now</a>
                  </div>
                  <div class="col-sm-6 hidden-xs">
                    <img class="img-responsive" src="img/iphone.png" alt="...">
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->            
            </div> <!-- / .item -->
          </div> <!-- / .carousel -->
          <!-- Controls -->
          <a class="carousel-arrow carousel-arrow-prev" href="#home-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-arrow carousel-arrow-next" href="#home-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div> <!-- / .home-slider -->

      <!-- Services -->
      <div class="home-services">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-7">
              <ul>
                <li>
                  <i class="fa fa-gears"></i>
                  <p><span>Built with </span> Bootstrap 3</p>
                </li>
                <li>
                  <i class="fa fa-flag"></i>
                  <p>Font Awesome <span>Icons</span></p>
                </li>
                <li>
                  <i class="fa fa-picture-o"></i>
                  <p>Isotope <span>Portfolio</span></p>
                </li>
                <li>
                  <i class="fa fa-envelope-o"></i>
                  <p>24/7 Support <span>by e-mail</span></p>
                </li>
              </ul>
            </div>
            <div class="col-md-5 hidden-sm hidden-xs">
              <p class="lead">Ready-to-go Solution Built with Bootstrap 3</p>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .services -->

      <!-- Browser Showcase -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="first-child text-center">Paperclip: Multi-purpose Professional Theme</h2>
            <h4 class="text-blue text-center">Perfect for corporate websites and mobile apps.</h4>
            <div class="browser-showcase">
              <img src="img/browsers.png" class="img-responsive" alt="...">
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

      <!-- Main Services -->
      <div class="main-services">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-gear"></i>
                  <div class="service-desc">
                    <h4>Built With Bootstrap 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-arrows-alt"></i>
                  <div class="service-desc">
                    <h4>Responsive Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-refresh"></i>
                  <div class="service-desc">
                    <h4>Easy to Customize</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-plus"></i>
                  <div class="service-desc">
                    <h4>20+ Templates Included</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-envelope"></i>
                  <div class="service-desc">
                    <h4>24/7 Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-picture-o"></i>
                  <div class="service-desc">
                    <h4>Isotope Gallery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .main-features -->

      <!-- Responsive Showcase -->
      <div class="responsive-showcase">
        <div class="container">
          <div class="responsive-design">
            <div class="row">
              <div class="col-sm-6">
                <h2>Fully Responsive Design</h2>
                <p class="lead text-muted">
                  Pellentesque magna turpis, porttitor non leo ac, imperdiet sollicitudin neque. Sed id condimentum quam. Ut dui velit, suscipit et libero vulputate, feugiat vestibulum velit. Integer auctor, orci sit amet tincidunt posuere.
                </p>
                <ul class="list-inline hidden-xs">
                  <li><i class="fa fa-mobile text-blue inactive" data-device="#iphone"></i></li>
                  <li><i class="fa fa-tablet text-blue inactive" data-device="#ipad"></i></li>
                  <li><i class="fa fa-laptop text-blue" data-device="#macbook"></i></li>
                  <li><i class="fa fa-desktop text-blue inactive" data-device="#imac"></i></li>
                </ul>
              </div>
              <div class="col-sm-6 hidden-xs">
                <img class="img-responsive show" src="img/macbook.png" alt="..." id="macbook">
                <img class="img-responsive hidden" src="img/imac.png" alt="..." id="imac">
                <img class="img-responsive hidden" src="img/ipad.png" alt="..." id="ipad">
                <img class="img-responsive hidden" src="img/iphone.png" alt="..." id="iphone">
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .template-thumbnails -->
        </div> <!-- / .container -->
      </div> <!-- / .template-showcase -->

      <!-- Feedback -->
      <div class="feedbacks">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">What Clients Say About Us</h2>
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    In vitae sodales massa. Proin commodo nibh sed nisi placerat facilisis. Fusce fringilla elit ipsum, vitae viverra ligula hendrerit nec.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    In vitae sodales massa. Proin commodo nibh sed nisi placerat facilisis. Fusce fringilla elit ipsum, vitae viverra ligula hendrerit nec.
                  </p>
                </div>
              </div>
            </div>
            <div class="hidden-sm col-md-4">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    In vitae sodales massa. Proin commodo nibh sed nisi placerat facilisis. Fusce fringilla elit ipsum, vitae viverra ligula hendrerit nec.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    Donec dignissim ipsum nec sagittis suscipit. Nullam nibh turpis, faucibus ultrices ullamcorper et, ornare sit amet quam. Etiam adipiscing justo massa, vel elementum felis aliquet quis. Nulla facilisis magna nulla, nec imperdiet felis lacinia et.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    Donec dignissim ipsum nec sagittis suscipit. Nullam nibh turpis, faucibus ultrices ullamcorper et, ornare sit amet quam. Etiam adipiscing justo massa, vel elementum felis aliquet quis. Nulla facilisis magna nulla, nec imperdiet felis lacinia et.
                  </p>
                </div>
              </div>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .feedback -->

      <!-- Recent Blog Posts -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Recent Blog Posts</h2>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-6">
            <div class="blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="blog-desc">
                <h3>
                  <a href="blog-post.html">Sed lacinia suscipit lacus non sodales. Pellentesque lacinia ornare justo eu tincidunt.</a>
                </h3>
                <hr>
                <p class="text-muted">by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class="btn btn-lg btn-red" href="blog-post.html">Read More...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="blog">
              <img src="img/photo-2.jpg" alt="...">
              <div class="blog-desc">
                <h3>
                  <a href="blog-post.html">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Lorem ipsum dolor sit amet.</a>
                </h3>
                <hr>
                <p class="text-muted">by John Doe</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class="btn btn-lg btn-red" href="blog-post.html">Read More...</a>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <!-- Contact Us -->
          <div class="col-sm-4">
            <h4><i class="fa fa-map-marker text-red"></i> Contact Us</h4>
            <p>Do not hesitate to contact us if you have any questions or feature requests:</p>
            <p>
              San Francisco, CA 94101<br />
              1987 Lincoln Street<br />
              Phone: +0 000 000 00 00<br />
              Fax: +0 000 000 00 00<br />
              Email: <a href="#">admin@mysite.com</a>
            </p>
          </div>
          <!-- Recent Tweets -->
          <div class="col-sm-4">
            <h4><i class="fa fa-twitter-square text-red"></i> Recent Tweets</h4>
            <div class="tweet">
              <i class="fa fa-twitter fa-2x"></i>
              <p>
                Ut tincidunt erat quis viverra consectetur. Suspendisse tempus vulputate leo.
                <a href="#">1 day ago</a>
              </p>
            </div>
            <div class="tweet">
              <i class="fa fa-twitter fa-2x"></i>
              <p>
                Mauris eget lacus ut ipsum dignissim malesuada quis nec ante.
                <a href="#">2 days ago</a>
              </p>
            </div>
          </div>
          <!-- Newsletter -->
          <div class="col-sm-4">
            <h4><i class="fa fa-envelope text-red"></i> Newsletter</h4>
            <p>
              Enter your e-mail below to subscribe to our free newsletter.
              <br>
              We promise not to bother you often!
            </p>
            <form class="form" role="form">
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    <label class="sr-only" for="subscribe-email">Email address</label>
                    <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-default">OK</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>

    <!-- Copyright -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright">
            Copyright 2014 - Paperclip Theme by <a href="https://twitter.com/YevSim">Yevgeny S.</a> | All Rights Reserved
          </div>
        </div>
      </div>  <!-- / .row -->
    </div> <!-- / .container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo $this->getBaseUrl(); ?>assets/bootstrap-3.1.0/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->getBaseUrl(); ?>js/scrolltopcontrol.js"></script>
    <script src="<?php echo $this->getBaseUrl(); ?>js/lightbox-2.6.min.js"></script>
    <script src="<?php echo $this->getBaseUrl(); ?>js/custom.js"></script>
    <script src="<?php echo $this->getBaseUrl(); ?>js/index.js"></script>
  </body>
</html>