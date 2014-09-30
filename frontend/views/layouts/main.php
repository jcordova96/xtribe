<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/png" href="/img/favicon.png">

    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/chosen.css">
    <link rel="stylesheet" href="/css/slider.css">
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="/css/style.css">

    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=327963893924647";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html"><span class='glyphicon glyphicon-home'></span> Home</a></li>
                <li><a href="#about"><span class='glyphicon glyphicon-user'></span> Account</a></li>
                <li><a href="shopping-cart.html"><span class='glyphicon glyphicon-briefcase'></span> Shopping cart</a></li>
                <li><a href="checkout.html"><span class='glyphicon glyphicon-ok'></span> Checkout</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown nav-bar-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-edit'></span> My Wishlist</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="nav-bar-item">
                                <p>Recently added item(s)</p>
                            </div>
                        </li>
                        <li>
                            <div class="nav-bar-item">
                                <figure>
                                    <img src="/img/product01.jpg" alt=""/>
                                </figure>
                                <button class="btn btn-default custom-button no-border"><i class="glyphicon glyphicon-remove"></i></button>
                                <div class="text">
                                    <h2><a href="#">Mustard yellow ruffle dress</a></h2>
                                    <div class="price-line">
                                        <div class="new-price">$478.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="nav-bar-item">
                                <figure>
                                    <img src="/img/product02.jpg" alt=""/>
                                </figure>
                                <button class="btn btn-default custom-button no-border"><i class="glyphicon glyphicon-remove"></i></button>
                                <div class="text">
                                    <h2><a href="#">Navy Blue Silk Pleated Shift Dress</a></h2>
                                    <div class="price-line">
                                        <div class="old-price">$250.00</div>
                                        <div class="new-price">$180.00</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="shopping-cart.html"><span class='glyphicon glyphicon-shopping-cart'></span> My Bag: 1 item(s)</a>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="register-block">
                    <a href="#">Log In</a>
                    <span>or</span>
                    <a href="#">Register</a>
                </div>
            </div>
            <div class="col-sm-4 col-sm-offset-4">
                <div class="site-selectors pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            US Dollar <span class='glyphicon glyphicon-chevron-down'></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Euro</a></li>
                            <li><a href="#">Pound St.</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class='flag flag-gb'></i> English <span class='glyphicon glyphicon-chevron-down'></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#"><i class='flag flag-it'></i> Italian</a></li>
                            <li><a href="#"><i class='flag flag-es'></i> Spanish</a></li>
                            <li><a href="#"><i class='flag flag-fr'></i> French</a></li>
                            <li><a href="#"><i class='flag flag-ge'></i> German</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class='brand'><a href="index.html">Vigo Shop</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="wrapper-block">
                    <div class="row">
                        <div class="col-sm-10">
                            <nav role='main-nav'>
                                <ul class='main-nav'>
                                    <li class='active'>
                                        <a class="has-dropdown" href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index-type2.html">Home slider v2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About us</a></li>
                                    <li>
                                        <a href="blog.html" class="has-dropdown">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Normal</a></li>
                                            <li><a href="blog-large.html">Blog large</a></li>
                                            <li><a href="blog-article.html">Single article</a></li>
                                            <li>
                                                <a href="#">More dropdown</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Sub Menu Item #1</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Sub Menu Item #1</a>
                                                                <ul>
                                                                    <li><a href="#">Sub Menu Item #1</a></li>
                                                                    <li><a href="#">Sub Menu Item #2</a></li>
                                                                    <li><a href="#">Sub Menu Item #3</a></li>
                                                                    <li><a href="#">Sub Menu Item #4</a></li>
                                                                    <li><a href="#">Sub Menu Item #5</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">Sub Menu Item #2</a></li>
                                                            <li><a href="#">Sub Menu Item #3</a></li>
                                                            <li><a href="#">Sub Menu Item #4</a></li>
                                                            <li><a href="#">Sub Menu Item #5</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Sub Menu Item #2</a></li>
                                                    <li><a href="#">Sub Menu Item #3</a></li>
                                                    <li><a href="#">Sub Menu Item #4</a></li>
                                                    <li><a href="#">Sub Menu Item #5</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="category-grid.html" class="has-dropdown">Category</a>
                                        <ul>
                                            <li><a href="category-grid.html">Category grid</a></li>
                                            <li><a href="category-list.html">Category-list</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li>
                                        <a class="has-dropdown" href="product.html">Product</a>
                                        <ul>
                                            <li><a href="product-compare.html">Product compare</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shopping-cart.html">Cart</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group search-block">
                                <input type="text" class="form-control" placeholder="Search here">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button"><span class='glyphicon glyphicon-search'></span></button>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>















<?= $content ?>















<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h1>Most favorite</h1>
                    </div>
                    <div class="widget-content">
                        <div class="favorite-item">
                            <a href="">
                                <figure>
                                    <img src="" alt=""/>
                                </figure>
                                <div class="favorite-text">
                                    <h2>Black puplum waist-tie kudu dress</h2>
                                    <span class="price">$478.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="favorite-item">
                            <a href="">
                                <figure>
                                    <img src="" alt=""/>
                                </figure>
                                <div class="favorite-text">
                                    <h2>Pale pink and black buttoned dress</h2>
                                    <span class="old-price">$250.00</span>
                                    <span class="price">$180.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h1>Quick Contact</h1>
                    </div>
                    <div class="widget-content">
                        <div class="alert alert-success footer-success">Message sent!</div>
                        <div class="alert alert-danger footer-error">The message couldn't be sent!</div>
                        <form action="" class="footer-form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="footer-name" type="text" name="name" placeholder="enter your name" class="form-control"/>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="footer-email" type="email" name="email" placeholder="enter your e-mail" class="form-control"/>
                            </div>
                            <textarea id="footer-message" name="message" cols="30" rows="10" placeholder="enter your message" class="form-control"></textarea>
                            <input id="send_message" type="submit" class="btn custom-submit" value="Send Message" name="submit" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h1>Facebook</h1>
                    </div>
                    <div class="widget-content">
                        <div class="fb-like-box" data-href="http://www.facebook.com/teothemes" data-width="The pixel width of the plugin" data-height="430" data-colorscheme="dark" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="separator middle footer-separator"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h2>Information</h2>
                    </div>
                    <div class="widget-content">
                        <ul class="links">
                            <li><a href="#">New Products</a></li>
                            <li><a href="#">Top Sellers</a></li>
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Our Stores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h2>My Account</h2>
                    </div>
                    <div class="widget-content">
                        <ul class="links">
                            <li><a href="#">New Products</a></li>
                            <li><a href="#">Top Sellers</a></li>
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Our Stores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h2>Customer Service</h2>
                    </div>
                    <div class="widget-content">
                        <ul class="links">
                            <li><a href="#">New Products</a></li>
                            <li><a href="#">Top Sellers</a></li>
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Our Stores</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h2>Contact Info</h2>
                    </div>
                    <div class="widget-content">
                        <address>
                            Vigo Shop Ltd <br />
                            United Kingdom <br />
                            London 02587 <br />
                            Oxford Street 48/188 <br />
                            Working days: Mon. - Sun. <br />
                            Working hours: 9 AM - 8 PM
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="separator footer-separator">
                    <button class='scroll-top'>Scroll top</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="copyright">
                    <p>&copy; 2013. Developed by <a href="http://teothemes.com">TeoThemes</a>&trade;. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="social-links">
                    <ul>
                        <li><a href="#" class="facebook">facebook</a></li>
                        <li><a href="#" class="twitter">twitter</a></li>
                        <li><a href="#" class="rss">rss</a></li>
                        <li><a href="#" class="digg">digg</a></li>
                        <li><a href="#" class="linkedin">linkedin</a></li>
                        <li><a href="#" class="flickr">flickr</a></li>
                        <li><a href="#" class="skype">skype</a></li>
                        <li><a href="#" class="email">email</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="scripts">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

    <script src="/js/vendor/jquery.flexslider-min.js"></script>
    <script src="/js/vendor/jquery.jcarousel.min.js"></script>
    <script src="/js/vendor/jquery.placeholder.min.js"></script>
    <script src="/js/vendor/tinynav.min.js"></script>
    <script src="/js/vendor/jquery.raty.min.js"></script>
    <script src="/js/vendor/chosen.jquery.min.js"></script>
    <script src="/js/vendor/bootstrap-slider.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>