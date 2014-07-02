<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $this->getApplication()->getName(); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $this->getApplication()->getName(); ?>">
        <link href="<?php echo $this->getBaseUrl(); ?>images/favicon.png" rel="shortcut icon" >
        <link href="<?php echo $this->getBaseUrl(); ?>assets/bootstrap-3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link id="theme-style" href="<?php echo $this->getBaseUrl(); ?>css/portal.css" rel="stylesheet">
        <link href="<?php echo $this->getBaseUrl(); ?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo $this->getBaseUrl(); ?>css/animate.min.css" rel="stylesheet">
        <link href="<?php echo $this->getBaseUrl(); ?>css/colorpickr.css" rel="stylesheet">
        <link href="<?php echo $this->getBaseUrl(); ?>css/linecons.css" rel="stylesheet">
        <link href="<?php echo $this->getBaseUrl(); ?>css/social-icons.css" rel="stylesheet">
        <link href="<?php echo $this->getBaseUrl(); ?>assets/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo $this->getBaseUrl(); ?>js/modernizr.custom.js"></script>
    </head>

    <body data-spy="scroll" data-offset="0" data-target=".navbar">

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><licon class="li_data"></licon> <b>BOOTSTACK</b></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav cl-effect-13">
                        <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                        <li><a href="#features" class="smoothScroll">Features</a></li>
                        <li><a href="#pricing" class="smoothScroll">Pricing</a></li>
                        <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <!-- Sign In / Sign Up -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#signin" data-toggle="modal" data-target=".bs-modal-sm"><i class="fa fa-lock"></i> Sign In</a></li>
                        <div class="navbar-form pull-left">
                            <a href="#signup" type="button" class="btn btn-sm btn-theme" data-toggle="modal" data-target=".bs-modal-sm">Free Trial</a>
                        </div>
                    </ul>
                </div><!--/nav-collapse -->
            </div><!-- /container -->
        </div><!-- /fixed-navbar -->


        <!-- Sign In / Sign Up Modal -->
        <div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <br>
                    <div class="bs-example bs-example-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                            <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div id="myTabContent" class="tab-content">
                            <!-- Sign In Form -->
                            <div class="tab-pane fade active in" id="signin">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="Email">Email:</label>
                                            <div class="controls">
                                                <input id="Email" name="Email" class="form-control" type="text" placeholder="Your email address" class="input-large" required="">
                                            </div>
                                        </div>

                                        <!-- Password input-->
                                        <div class="control-group">
                                            <label class="control-label" for="passwordinput">Password:</label>
                                            <div class="controls">
                                                <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
                                            </div>
                                        </div>

                                        <!-- Multiple Checkboxes (inline) -->
                                        <div class="control-group">
                                            <label class="control-label" for="rememberme"></label>
                                            <div class="controls">
                                                <label class="checkbox inline" for="rememberme-0">
                                                    <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="control-group">
                                            <label class="control-label" for="signin"></label>
                                            <div class="controls">
                                                <button id="signin" name="signin" class="btn btn-theme btn-block">Sign In</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div><!-- /signin -->

                            <!-- Sign Up Form -->
                            <div class="tab-pane fade" id="signup">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="Email">Email:</label>
                                            <div class="controls">
                                                <input id="Email" name="Email" class="form-control" type="text" placeholder="Your email address" class="input-large" required="">
                                            </div>
                                        </div>

                                        <!-- Password input-->
                                        <div class="control-group">
                                            <label class="control-label" for="password">Password:</label>
                                            <div class="controls">
                                                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                                                <em>1-8 Characters</em>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                            <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
                                            <div class="controls">
                                                <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
                                            </div>
                                        </div>

                                        <!-- Multiple Radios (inline) -->
                                        <br>
                                        <div class="control-group">
                                            <label class="control-label" for="humancheck">Humanity Check:</label>
                                            <div class="controls">
                                                <label class="radio inline" for="humancheck-0">
                                                    <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                                                <label class="radio inline" for="humancheck-1">
                                                    <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="control-group">
                                            <label class="control-label" for="confirmsignup"></label>
                                            <div class="controls">
                                                <button id="confirmsignup" name="confirmsignup" class="btn btn-theme btn-block">Sign Up</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div><!-- /signup -->
                        </div><!-- /tab-content -->
                    </div><!-- /modal-body -->

                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </center>
                    </div>
                </div><!-- /modal-content -->
            </div><!-- /modal-dialog -->
        </div><!-- /modal -->


        <!-- Header Wrap -->
        <section id="home" name="home"></section>
        <div class="headerwrap">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h1>Welcome To <b>Bootstack</b></h1>
                        <h3>Show your product with confidence.</h3>
                        <br>
                    </div>

                    <div class="col-lg-2 hidden-xs hidden-sm hidden-md">
                        <h5>Automate business processes</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <img src="assets/img/arrow-left.png" alt="">
                    </div>
                    <div class="col-lg-8">
                        <img class="img-responsive" src="assets/img/app-bg.png" alt="">
                        <!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                        <a href="#features" type="submit" class="btn btn-lg btn-theme smoothScroll">LEARN MORE</a>-->
                    </div>
                    <div class="col-lg-2 hidden-xs hidden-sm hidden-md">
                        <br>
                        <img class="pad-top" src="assets/img/arrow-right.png" alt="">
                        <h5>Collaborate in the cloud</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div> <!-- /container -->
        </div><!-- /headerwrap -->


        <!-- Intro Wrap -->
        <div class="intro">
            <div class="container">
                <div class="row text-center">
                    <h2>Proven Success</h2>
                    <hr>
                    <br>
                    <br>
                    <div class="col-lg-3">
                        <licon class="li_user"></licon>
                        <h3>Professional Services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-3">
                        <licon class="li_banknote"></licon>
                        <h3>Cost Effective</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-3">
                        <licon class="li_data"></licon>
                        <h3>Scalable and Adaptable</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-3">
                        <licon class="li_like"></licon>
                        <h3>Easy to Use</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <br>
            </div> <!-- /container -->
        </div><!-- /introwrap -->


        <!-- Features Wrap -->
        <section id="features" name="features"></section>
        <div class="featureswrap">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Features</h2>
                    <hr>
                    <br>
                    <br>
                    <div class="col-lg-6">
                        <img class="img-responsive left" src="assets/img/mobile.png" alt="">
                    </div>

                    <div class="col-lg-6">
                        <br>
                        <!-- Accordion -->
                        <div class="accordion ac" id="accordion2">
                            <div class="accordion-group active">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        <i class="fa fa-cloud"></i> Collaborate in the cloud
                                    </a>
                                </div><!-- /accordion-heading -->
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        <i class="fa fa-mail-forward"></i> Get started fast
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        <i class="fa fa-bar-chart-o"></i> Deliver real time insights
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                        <i class="fa fa-dashboard"></i> Automate business processes
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>
                        </div><!-- /accordion -->
                    </div>
                </div><!-- /row -->
                <br><br><br>
                <div class="row">
                    <h2 class="text-center">Multi Useful Components</h2>
                    <hr><br><br>
                    <div class="col-lg-6">
                        <br><br>
                        <h4><i class="fa fa-cogs"></i> Create customized business apps</h4>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <br><br>
                    </div>

                    <div class="col-lg-6">
                        <img class="img-responsive right" src="assets/img/tablet.png" alt="">
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div><!-- /featureswrap -->


        <!-- Divider 1 Section -->
        <div class="divider01">
            <div class="container">
                <div class="row text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <h3>"Working with Bootstack was amazing. Their team is incredible."</h3>
                                <h4>John Doe, <em>A Company</em></h4>
                            </div>
                            <div class="item">
                                <h3>"Bootstack has helped my team build amazing products. Amazing team."</h3>
                                <h4>Jane Doe, <em>A Company</em></h4>
                            </div>
                        </div><!-- /carousel-inner -->
                        <br>
                        <br>
                        <br>
                        <!-- Indicators - Uncomment for indicators to show
                        <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol> -->
                    </div><!-- /carousel-example -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /divider01 -->


        <!-- Pricing Section -->
        <section id="pricing" name="pricing"></section>
        <div class="pricingwrap">
            <div class="container text-center">
                <br>
                <h2>Our Pricing Options</h2>
                <hr><br><br>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="panel panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Starter</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h2>$9<span class="subscript">/mo</span></h2>
                                    <small>1 month FREE Trial</small>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td>1 Account</td>
                                    </tr>
                                    <tr>
                                        <td>1 Project</td>
                                    </tr>
                                    <tr>
                                        <td>50K API Access</td>
                                    </tr>
                                    <tr>
                                        <td>100MB Storage</td>
                                    </tr>
                                    <tr>
                                        <td>Custom Cloud Services</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Reports</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="panel panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Standard</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h2>$19<span class="subscript">/mo</span></h2>
                                    <small>1 month FREE Trial</small>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td>2 Accounts</td>
                                    </tr>
                                    <tr>
                                        <td>5 Projects</td>
                                    </tr>
                                    <tr>
                                        <td>100K API Access</td>
                                    </tr>
                                    <tr>
                                        <td>200MB Storage</td>
                                    </tr>
                                    <tr>
                                        <td>Custom Cloud Services</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Reports</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="panel panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Premium</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h2>$39<span class="subscript">/mo</span></h2>
                                    <small>1 month FREE Trial</small>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td>5 Accounts</td>
                                    </tr>
                                    <tr>
                                        <td>20 Projects</td>
                                    </tr>
                                    <tr>
                                        <td>300K API Access</td>
                                    </tr>
                                    <tr>
                                        <td>500MB Storage</td>
                                    </tr>
                                    <tr>
                                        <td>Custom Cloud Services</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Reports</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="panel panel-custom">
                            <div class="panel-heading">
                                <h3 class="panel-title">Enterprise</h3>
                            </div>
                            <div class="panel-body">
                                <div class="the-price">
                                    <h2>$59<span class="subscript">/mo</span></h2>
                                    <small>1 month FREE Trial</small>
                                </div>
                                <table class="table">
                                    <tr>
                                        <td>10 Accounts</td>
                                    </tr>
                                    <tr>
                                        <td>50 Projects</td>
                                    </tr>
                                    <tr>
                                        <td>500K API Access</td>
                                    </tr>
                                    <tr>
                                        <td>1GB Storage</td>
                                    </tr>
                                    <tr>
                                        <td>Custom Cloud Services</td>
                                    </tr>
                                    <tr>
                                        <td>Weekly Reports</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-theme" role="button">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /pricingwrap -->


        <!-- Divider 2 Section -->
        <div class="divider02">
            <div class="container text-center">
                <h3>Start your 30-day free trial today.</h3>
                <a href="#" type="button" class="btn btn-lg btn-theme2">Get Started</a>
            </div>
        </div><!-- /divider02 -->


        <!-- Footer Wrap -->
        <section id="contact" name="contact"></section>
        <div class="footerwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Contact Us</h3>
                        <br>
                        <p><i class="fa fa-map-marker"></i> Some Address 373, Palo Alto, CA <br/>
                            <i class="fa fa-phone"></i> (800) 373-7733 <br/>
                            <i class="fa fa-envelope-o"></i> <a href="mailto:support@bootstacktheme.com">support@bootstacktheme.com</a>
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <h3>We Are Social</h3>
                        <br>
                        <div id="social">
                            <a href="#" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
                            <a href="#" rel="tooltip" title="Twitter" class="twitter">Twitter</a>
                            <a href="#" rel="tooltip" title="RSS" class="rss">RSS</a>
                            <a href="#" rel="tooltip" title="Github" class="github">Github</a>
                            <a href="#" rel="tooltip" title="LinkedIn" class="linkedin">LinkedIn</a>
                            <a href="#" rel="tooltip" title="Pintrest" class="pintrest">Pintrest</a>
                            <a href="#" rel="tooltip" title="Vimeo" class="vimeo">Vimeo</a>
                            <a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3>Newsletter</h3>
                        <br>
                        <p>Subscribe to our newsletter and be the first to know our latest updates.</p>
                        <div class="form-inline">
                            <input type="text" class="form-control" placeholder="Your email">
                            <button class="btn btn-theme" type="button">Subscribe</button>
                        </div>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /footerwrap -->


        <!-- Copyright Wrap -->
        <div class="copywrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <p>Copyright &copy;2014 Bootstack Theme. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-2">
                        <p><a href="#">Terms</a> | <a href="#">Privacy</a> | <a href="#">Legal</a></p>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /copywrap (copyright) -->


        <!-- Color Picker -->
        <div class="config-wrapper">
            <div class="config-wrapper-inner">
                <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cogs"></i></a>
                <div id="config-panel" class="config-panel">
                    <h5>Choose Colour</h5>
                    <ul id="color-options" class="list-unstyled list-inline">
                        <li class="teal active"><a data-style="assets/css/style.css" href="#"></a></li>
                        <li class="blue"><a data-style="assets/css/colors/blue.css" href="#"></a></li>
                        <li class="red"><a data-style="assets/css/colors/red.css" href="#"></a></li>
                        <li class="green"><a data-style="assets/css/colors/green.css" href="#"></a></li>
                    </ul><!-- /color-options-->
                    <a id="config-close" class="close" href="#"><i class="fa fa-times"></i></a>
                </div><!-- /configure-panel-->
            </div><!-- /config-wrapper-inner-->
        </div><!-- /config-wrapper-->

        <script src="<?php echo $this->getBaseUrl(); ?>js/jquery.min.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>assets/bootstrap-3.1.0/js/bootstrap.min.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>js/jquery.easing.1.3.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>js/detectmobilebrowser.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>js/jquery.inview.min.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>js/smoothscroll.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>js/colorpickr.js"></script>
        <script src="<?php echo $this->getBaseUrl(); ?>js/animations.js"></script>
        <script>
            $('.carousel').carousel({
                interval: 3500,
                pause: "none"
            })
            $('.nav li a').on('click', function() {
                $('.navbar-collapse').collapse('hide');
            })
        </script>
    </body>
</html>