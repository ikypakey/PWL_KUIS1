<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanis</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="#"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="{{Request::is('/')?'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request ::is('shop-grid')?'active' : '' }}"><a href="/shop-grid">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li class="{{Request ::is('shop-details')?'active' : '' }}"><a href="/shop-details">Shop Details</a></li>
                    <li class="{{Request ::is('shoping-cart')?'active' : '' }}"><a href="/shoping-cart">Shoping Cart</a></li>
                    <li class="{{Request ::is('checkout')?'active' : '' }}"><a href="/checkout">Check Out</a></li>
                    <li class="{{Request ::is('user')?'active' : '' }}"><a href="/user">User</a></li>
                    <li class="{{Request ::is('employee')?'active' : '' }}"><a href="/employee">Employee</a></li>
                    <li class="{{Request ::is('supplier')?'active' : '' }}"><a href="/supplier">Supplier</a></li>
                </ul>
                        </li>    
                        <li class="{{Request ::is('blog')?'active' : '' }}"><a href="/blog">Blog</a></li>
                        <li class="{{Request ::is('contact')?'active' : '' }}"><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->