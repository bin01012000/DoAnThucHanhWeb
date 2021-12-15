<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 034 8098 023</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> bin01012000@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/home?lang=vi"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.php?controller=home&action=index"><img src="resource/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right clearfix">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                Vietnam
                                <span class="caret"></span>
                            </button>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                <span class="vnd"><sub>VNĐ</sub></span>
                                <span class="caret"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php?controller=cart&action=index"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="index.php?controller=login&action=index"><i class="fa fa-lock"></i> Login</a></li>
                            <li><a href="index.php?controller=login&action=logout"><i class="fa fa-lock"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php?controller=home&action=index" class="active" id="home">Home</a></li>
                            <li class="dropdown" id="shop"><a href="index.php?controller=product&action=index">Shop</a></li>
                            <li id="contact"><a href="#" data-toggle="modal" data-target="#myModal">Contact</a>
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" id="contactform">
                                                <button id="btnContact" class="facebook"><i class="fa fa-facebook"></i>|&nbsp;&nbsp;&nbsp;Liên hệ chúng tôi qua facebook </button>
                                            </div>
                                            <div class="modal-body" id="contactform">
                                                <button id="btnContact" class="twitter"><i class="fa fa-twitter"></i>|&nbsp;&nbsp;&nbsp; Liên hệ chúng tôi qua twitter </button>
                                            </div>
                                            <div class="modal-body" id="contactform">
                                                <button id="btnContact" class="linkedin"><i class="fa fa-linkedin"></i>|&nbsp;&nbsp;&nbsp; Liên hệ chúng tôi qua linkedin </button>
                                            </div>
                                            <div class="modal-body" id="contactform">
                                                <button id="btnContact" class="dribbble"><i class="fa fa-dribbble"></i>|&nbsp;&nbsp;&nbsp; Liên hệ chúng tôi qua dribbble </button>
                                            </div>
                                            <div class="modal-body" id="contactform">
                                                <button id="btnContact" class="google"><i class="fa fa-google-plus"></i>|&nbsp;&nbsp;&nbsp; Liên hệ chúng tôi qua google </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form>
                        <input type="hidden" name="controller" value="product" />
                            <input type="hidden" name="action" value="search" /><input type="text" placeholder="Search..." name="keyWord" /> <input type="submit" value="GO" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>