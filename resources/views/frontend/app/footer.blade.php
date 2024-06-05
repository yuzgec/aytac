<footer class="footer appear-animate" data-animation-options="{
    'name': 'fadeIn'
}">
    <div class="footer-newsletter bg-primary">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="icon-box icon-box-side text-white">
                        <div class="icon-box-icon d-inline-flex">
                            <i class="w-icon-envelop3"></i>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title text-white text-uppercase font-weight-bold">BÜLTENE ABONE OL</h4>
                            <p class="text-white">Bültenimize katılın kampanya fırsatlardan ilk siz haberdar olun.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                    <form action="#" method="get"
                        class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                        <input type="email" class="form-control mr-2 bg-white" name="email" id="email" placeholder="Email Adresiniz..." />
                        <button class="btn btn-dark btn-rounded" type="submit">
                            Abone Ol<i class="w-icon-long-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-about mt-0 mb-4">
                        <a href="{{ route('home')}}" class="logo-footer">
                            <img src="/logo.png" alt="Ayobi Tekstil" width="144" height="45">
                        </a>
                        <div class="widget-body">
                            <p class="widget-about-title">7/24 Destek Hattımız</p>
                            <a href="tel:{{ config('settings.telefon1')}}" class="widget-about-call">{{ config('settings.telefon1')}}</a>
                            <p class="widget-about-desc">Her türlü baskılı tekstil ürünleri konusunda bizleri aramaktan çekinmeyin.</p>

                            <div class="social-icons social-icons-colored">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Kurumsal</h3>
                        <ul class="widget-body">
                            <li><a href="{{ route('corporatedetail', 'hakkimizda')}}" title="Hakkımızda">Hakkımızda</a></li>
                            <li><a href="{{ route('contactus')}}" title="İletişime Geç">İletişim</a></li>
                            <li><a href="{{ route('home')}}">Giriş Yap</a></li>
                            <li><a href="{{ route('home')}}">Kayıt Ol</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Hesabım</h4>
                        <ul class="widget-body">
           
                            <li><a href="{{ route('home')}}">Sepetim</a></li>
                            <li><a href="{{ route('home')}}">Favori</a></li>
                            <li><a href="{{ route('home')}}">Gizlilik Sözleşmesi</a></li>
                            <li><a href="{{ route('home')}}">Çerez Politikası</a></li>
                            <li><a href="{{ route('home')}}">İptal & İADE</a></li>
                     
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Hizmetlerimiz</h4>
                        <ul class="widget-body">
                            @foreach ($service as $item)
                                <li><a href="#">Payment Methods</a></li>
                            @endforeach
        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="widget widget-category">
                @foreach ($categories as $item)
                    <div class="category-box">
                        <h6 class="category-name">{{ $item->title}}:</h6>
                        <a href="#">TV Television</a>
                        <a href="#">Air Condition</a>
                        <a href="#">Refrigerator</a>
                        <a href="#">Washing Machine</a>
                        <a href="#">Audio Speaker</a>
                        <a href="#">Security Camera</a>
                        <a href="#">View All</a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">Copyright © {{date('Y')}} Ayobi Tekstil. Tüm Hakları Saklıdır.</p>
            </div>
            <div class="footer-right">
                <figure class="payment">
                    <img src="/front/images/payment.png" alt="payment" width="159" height="25" />
                </figure>
            </div>
        </div>
    </div>
</footer>