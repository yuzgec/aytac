@extends('frontend.app.master')
@section('content')

<div class="page-header">
    <div class="container">
        <h1 class="page-title">Hakkımızda</h1>
        <h4 class="page-subtitle">Ayobi Teksil - Baskılı Tekstil Ürünleri</h4>
    </div>
</div>

 <div id="elementDescription" class="container py-100 py-100-sm">
    <span class="fs-20 fs-16-sm gray7 ls-0 lh-35 light">
        {!! $Detay->desc !!}
    </span>
</div>

@endsection