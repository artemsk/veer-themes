@extends($template.'.layout.base')

@section('meta-properties')
<meta property="og:type"            content="website" />
<title>{{ $category->title or null }} — {{ db_parameter('SITE_TITLE') }}</title>
<meta name="title" content="{{ $category->title or null }} — {{ db_parameter('SITE_TITLE') }}" />
<meta property="og:title"           content="{{ $category->title or null }}" />
<meta property="og:description"     content="{{ $category->title or null }} — {{ db_parameter('SITE_TITLE') }}"/>
<!--<meta property="og:image"           content="IMAGE_URL" />-->
@stop

@section('body')
<div class="container-fluid intro intro-category" data-top="transform:translate(0px,0px);" data-top-bottom="transform:translate(0px,-50px);">
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

    @include($template . '.layout.footer')
</div>             
@stop
