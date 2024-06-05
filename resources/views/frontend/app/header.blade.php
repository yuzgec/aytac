<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Türkiye'nin Baskılı Ürünler Sitesi</p>
            </div>
            <div class="header-right">
                <span class="divider d-lg-show"></span>
                <a href="{{ route('corporatedetail', 'hakkimizda')}}" class="d-lg-show">Hakkımızda</a>
                <a href="{{ route('home')}}" class="d-lg-show">Haberler</a>
                <a href="{{ route('contactus')}}" class="d-lg-show">İletişim</a>

                <a href="my-account.html" class="d-lg-show">Hesabım</a>
                <a href="{{ route('login')}}" class="d-lg-show login sign-in"><i
                        class="w-icon-account"></i>Giriş Yap</a>
                <span class="delimiter d-lg-show">/</span>
                <a href="{{ route('register')}}" class="ml-0 d-lg-show login register">Kayıt Ol</a>
            </div>
        </div>
    </div>

    <div class="header-middle sticky-content fix-top sticky-header border-no">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger"></a>
                <a href="{{ route('home')}}" class="logo">
                    <img src="/logo.png" alt="Ayobi Tekstil" width="144" height="45">
                </a>
                <form method="get" action="#"
                    class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                    <input type="text" class="form-control bg-white pt-0 pb-0" name="search" id="search"
                        placeholder="Ürün Adı veya Ürün Kodu Giriniz..." required />
                    <button class="btn btn-search" type="submit">
                        <i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-size-md text-normal ls-normal text-white mb-0">
                            <a href="tel:{{ config('settings.telefon1')}}" class="text-capitalize text-primary font-weight-normal">Online Destek</a>
                        </h4>
                        <a href="tel:{{ config('settings.telefon1')}}" class="phone-number font-weight-bolder ls-50">{{ config('settings.telefon1')}}</a>
                    </div>
                </div>
                <a class="wishlist label-down link d-xs-show" href="{{ route('wishlist')}}" title="Favori">
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Favori</span>
                </a>
       
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count text-white">2</span>
                        </i>
                        <span class="cart-label">Sepet</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Beige knitted
                                        elas<br>tic
                                        runner shoes</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$25.68</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                            width="94">
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">Blue utility
                                        pina<br>fore
                                        denim dress
                                    </a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$32.99</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                            height="94">
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">$58.67</span>
                        </div>
                        <div class="cart-action">
                            <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                            <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
</header>