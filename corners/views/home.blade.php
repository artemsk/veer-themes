@extends($template.'.layout.base')

@section('body')

    <div class="container-fluid intro" data-top="transform:translate(0px,0px);" data-top-bottom="transform:translate(0px,-50px);">
        <div class="row bolshaya-overflow">
            <div class="col-sm-16 col-sm-offset-4 text-center">
                <h1>{{ db_parameter('SITE_HERO', 'Beautiful, bright, clean, rich.<br>Beware of <strong>corners.</strong>') }}</h1>
               <div class="contact-form-group">
				   <form method="POST">
						<div class="form-inline contact-form">
							<input name="email" type="text" class="form-control" placeholder="Ваша почта" size="30">
							<button type="button" class="btn btn-primary">Есть работа!</button>
						</div>
						<div class="form-inline contact-form-2 hidden">
							<input name="contactName" type="text" class="form-control" placeholder="Ваше имя" size=30>
							<input name="phone" type="text" class="form-control" placeholder="Ваш телефон (по желанию)" size=30>
							<button type="submit" class="btn btn-danger">Отправить!</button>
						</div>
				   </form>
                </div>
            </div>
        </div>
        <div class="row bolshaya-content-row"> <!-- hero-content -->
            <!--<div class="col-sm-22 col-sm-offset-1">
                <div class="row">
                    <div class="col-sm-8"><img data-src="holder.js/100%x211/#ccc:#000/text:A" class="img-responsive">
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-8 text-center">
                        <img data-src="holder.js/100%x211/#ccc:#000/text:B" class="img-responsive">
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-8">
                        <img data-src="holder.js/100%x211/#ccc:#000/text:C" class="img-responsive">
                    </div>
                </div>
            </div>-->
        </div>
        <span id="intro-bottom-mark"></span>
    </div>
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
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr.min.js') }}"></script>
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr-effects.js') }}"></script>
@stop