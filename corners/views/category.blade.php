@extends($template.'.layout.base')

@section('body')

    <div class="container-fluid intro" data-top="transform:translate(0px,0px);" data-top-bottom="transform:translate(0px,-50px);">
        <div class="row bolshaya-overflow">
            <div class="col-sm-16 col-sm-offset-4 text-center">
                <h1>{{ $category->title or null }}</h1>
            </div>
        </div>
        <div class="row bolshaya-content-row">
        </div>
        <span id="intro-bottom-mark"></span>
    </div>
    <div class="container-fluid bolshaya-main-content bolshaya-background-white">
        <div class="row">
            <div class="col-sm-22 col-sm-offset-1">
@if( count(data_get($data, 'function.indexCornersPages.data.gridSort')) > 0 )				
	@include($template . '.layout.pages-list', array('data' => $data))
@endif		
            </div>
        </div>
		
	@include($template . '.layout.footer')
	</div>             
@stop

@section('javascript-plugins')
	@parent
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr.min.js') }}"></script>
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr-effects.js') }}"></script>
@stop