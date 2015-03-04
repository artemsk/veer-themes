@extends($template.'.layout.base')

@section('body')

@if(db_parameter('HERO_ON_HOME', false))
@include($template.'.layout.hero')
@else
<div class="bolshaya-content-row"></div>
@endif

<div class="container-fluid bolshaya-main-content bolshaya-background-white">
    <div class="row">
        <div class="col-sm-22 col-sm-offset-1">
            @if( count(data_get($data, 'function.indexCornersPages.data.gridSort')) > 0 )
            @include($template . '.layout.pages-list', array('data' => $data))
            @endif

            <!--
<div class="row bolshaya-content-row">
                    <div class="col-sm-24">
                            <small>yesterday at 12:34</small>
                            <h1><a href="">Тype 12: Big image with parallax</a></h1>
                            <p>A little bit. <small><a href="">1 comment</a></small>
                            </p>
                    </div>
            </div>
            -->
        </div>
    </div>
    <!--
<div class="row">
<section id="slide-1" class="homeSlide" style="height: 300px;">
    <div class="bcg" data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 25px;" data-top-bottom="background-position: 50% -25px;" data-anchor-target="#slide-1"></div>
</section>
</div>
    -->
    @if( count(data_get($data, 'function.indexCornersDigest.data.items')) > 0 )
    <div class="row">
        <div class="col-sm-22 col-sm-offset-1">
            <div class="row bolshaya-content-row">
                <div class="col-sm-22 digest-title"><strong>{{ data_get($data, 'function.indexCornersDigest.data.tagName', 'Digest') }}</strong>
                </div>
            </div>
            <div class="row bolshaya-content-half-row">
                @foreach(data_get($data, 'function.indexCornersDigest.data.items') as $key => $item)
                @if($key == 4)
                <div class="visible-sm clearfix"></div>
                <div class="visible-xs visible-sm bolshaya-content-row"></div>
                @endif
                @if($key != 0 && $key != 4)
                <div class="visible-xs bolshaya-content-row"></div>
                @endif
                @include($template . '.types.digest', array('data' => $item))
                @endforeach
            </div>
        </div>
    </div>
    @endif

    @include($template . '.layout.footer')
</div>             
@stop

@section('javascript-plugins')
@parent
@if(db_parameter('HERO_ON_HOME', false))
<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr.min.js') }}"></script>
<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr-effects.js') }}"></script>
@endif
@stop
