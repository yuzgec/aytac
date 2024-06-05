<div class="category-wrapper row cols-12 mb-5">
    @foreach ($categories->where('parent_id', 0) as $item)
        
    
   <div class="category category-ellipse ">
       <figure class="category-media">
           <a href="{{ route('category', $item->slug)}}">
               <img src="/front/images/demos/demo12/category/cat-1-1.jpg" alt="{{ $item->title }} - Ayobi Tekstil" width="120" height="120" />
           </a>
       </figure>
       <div class="category-content">
           <h4 class="category-name">
               <a href="{{ route('category',  $item->slug)}}">{{ $item->title }}</a>
           </h4>
       </div>
   </div>
   @endforeach
   <div class="category category-ellipse ">
       <div class="icon-box icon-colored-circle">
           <span class="icon-box-icon mb-0 text-white">
               <i class="w-icon-hamburger"></i>
           </span>
       </div>
       <div class="category-content">
           <h4 class="category-name">
               <a href="demo12-shop.html">HEPSİ</a>
           </h4>
       </div>
   </div>
</div>