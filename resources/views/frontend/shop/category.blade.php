@extends('frontend.app.master')
@section('content')

<div class="page-content mb-10">
    <div class="container">

        @include('frontend.app.story')

        <div class="shop-content row gutter-lg">
            <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                <div class="sidebar-overlay"></div>
                <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                <div class="sidebar-content scrollable">

                    <div class="sticky-sidebar">
                        <div class="filter-actions">
                            <label>Filtrele :</label>
                            <a href="#" class="btn btn-dark btn-link filter-clean">Hepsini Temizle</a>
                        </div>

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><span>Kategoriler</span></h3>
                            <ul class="widget-body filter-items search-ul">
                                @foreach ($categories->where('parent', 0) as $item)
                                    <li><a href="{{ route('category', $item->slug)}}" title="{{ $item->title}}">{{ $item->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><span>Beden</span></h3>
                            <ul class="widget-body filter-items item-check mt-1">
                                <li><a href="#">STANDART</a></li>
                                <li><a href="#">XXL</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">S</a></li>
                            </ul>
                        </div>
                       
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title"><span>Renk</span></h3>
                            <ul class="widget-body filter-items item-check">
                                <li><a href="#">Siyah</a></li>
                                <li><a href="#">Beyaz</a></li>
                                <li><a href="#">Kırmızı</a></li>
                                <li><a href="#">Mavi</a></li>
                                <li><a href="#">Lacivert</a></li>
                                <li><a href="#">Turuncu</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </aside>

            <div class="main-content">
                <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6 br-xs"
                    style="background-image: url(/front/images/shop/banner1.jpg); background-color: #FFC74E;">
                    <div class="banner-content">
                        <h4 class="banner-subtitle font-weight-bold">Ayobi Tekstil Ürünleri</h4>
                        <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">{{ $detail->title}}</h3>
                        <a href="#shop"  class="btn btn-dark btn-rounded btn-icon-right">
                            Alışverişe Başla<i class="w-icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <nav class="toolbox sticky-toolbox sticky-content fix-top" id="shop">
                    <div class="toolbox-left">

                        <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle btn-icon-left d-block d-lg-none">
                            <i class="w-icon-category"></i><span>Filtrele</span>
                        </a>

                        <div class="toolbox-item toolbox-sort select-box text-dark">
                            <label>Sırala :</label>
                            <select name="orderby" class="form-control">
                                <option value="default" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price-low">Sort by pric: low to high</option>
                                <option value="price-high">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>

                    <div class="toolbox-right">

                        <div class="toolbox-item toolbox-show select-box">
                            <label>Göster :</label>
                            <select name="count" class="form-control">
                                <option value="9">9</option>
                                <option value="12" selected="selected">12</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>

                        <div class="toolbox-item toolbox-layout">
                           
                        </div>

                    </div>
                </nav>

                <div class="row product-wrapper show-code-action">
                    @foreach ($products->products as $item)

                    <div class="col-md-4 col-6">
                        <div class="product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="{{ route('product', $item->slug)}}" title="{{ $item->title}}">
                                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumbpng')}}" alt="{{ $item->title}} - Ayobi Tekstil" width="300" height="500" />
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-discount">-25%</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare">

                                    </a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Hızlı İncele</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                <div class="product-cat">
                                    <a href="#">{{ $item->firstCategoryName}}</a>
                                </div>
                                <h4 class="product-name">
                                    <a href="{{ route('product', $item->slug)}}" title="{{ $item->title}}">{{ $item->title}}</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top">5.00</span>
                                    </div>
                                    <a href="{{ route('product', $item->slug)}}" title="{{ $item->title}}" class="rating-reviews">(3 reviews)</a>
                                </div>
                                <div class="product-pa-wrapper">
                                    <div class="product-price">
                                        <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                    </div>
                                    <div class="product-action">
                                        <a href="{{ route('product', $item->slug)}}" title="{{ $item->title}}" class="btn-cart btn-product btn btn-link btn-underline added">
                                            Ürünü İncele
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
             
                <div class="toolbox toolbox-pagination justify-content-between">
                    <p class="showing-info mb-2 mb-sm-0">
                        <span>60</span> ürün içinde 12 Adet Gösteriliyor
                    </p>
                    <ul class="pagination">
                        <li class="prev disabled">
                            <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <i class="w-icon-long-arrow-left"></i>Geri
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                İleri<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
