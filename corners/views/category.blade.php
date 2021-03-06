@extends($template.'.layout.base')

@section('meta-properties')
<meta name="keywords" content="{{ db_parameter('SITE_KEYWORDS') }}" />
<meta name="description" content="{{ db_parameter('SITE_DESCRIPTION') }}" />
<meta property="og:type"            content="website" />
<title>{{ $category->title or null }} — {{ db_parameter('SITE_TITLE') }}</title>
<meta name="title" content="{{ $category->title or null }} — {{ db_parameter('SITE_TITLE') }}" />
<meta property="og:title"           content="{{ $category->title or null }}" />
<meta property="og:description"     content="{{ $category->title or null }} — {{ db_parameter('SITE_TITLE') }}"/>
<!--<meta property="og:image"           content="IMAGE_URL" />-->
@stop

@section('body')
<div class="container-fluid intro intro-category" @if(isset($category->images) && count($category->images)>0)style="background-image:url({{ asset(config('veer.images_path').'/'.$category->images[0]->img) }})@endif">
    <div class="row bolshaya-overflow">
        <div class="col-sm-16 col-sm-offset-4 text-center">
            <span class="category-title">ТЕМА</span>
            <h1>{{ $category->title or null }}</h1>
        </div>
    </div>
    <div class="row bolshaya-content-half-row">
    </div>
    <span id="intro-bottom-mark"></span>
</div>
<div class="container-fluid bolshaya-main-content bolshaya-background-white">
    <div class="row">
        <div class="col-sm-22 col-sm-offset-1">
            @if( count(veer_get('function.indexCornersPages.data.gridSort')) > 0 )
            @include($template . '.layout.pages-list')
            @endif
        </div>
    </div>
</div>
<div class="corners-full-width-footer">
    <div class="container-fluid">
        @include($template . '.layout.footer')
    </div>
</div>
@stop

@section('additional-head-scripts')
<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/images.js') }}"></script>
@stop
