<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {

        $pages = Page::with('getCategory')->get();
        $service = Service::orderBy('rank', 'asc')->get();
        $blog = Blog::orderBy('rank', 'asc')->get();
        $product = Product::with('getCategory')->orderBy('rank', 'asc')->get();

        $categories = ProductCategory::get()->toFlatTree();
        View::share([
            'pages' => $pages,
            'service' => $service,
            'blog' => $blog,
            'product' => $product,
            'categories' => $categories
        ]);
    }
}
