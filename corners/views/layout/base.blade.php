<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="{{ db_parameter('SITE_KEYWORDS') }}" />
	<meta name="description" content="{{ db_parameter('SITE_DESCRIPTION') }}" />
    <title>{{ db_parameter('SITE_TITLE') }}</title>

	<link href="http://fonts.googleapis.com/css?family=Roboto:500,400,300,700,900&subset=cyrillic,latin" rel="stylesheet" type="text/css">
	 
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/dist20/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/index.css') }}">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="fixed-header">
        <div class="row top-background-line"></div>
        <div class="container-fluid bolshaya-white-panel">
            <div class="row">
                <div class="col-sm-22 col-sm-offset-1 text-center">
                    <i class="fa fa-bars sidebar-menu"></i><span class="logo-header"><a href="{{ app('veer')->siteUrl }}">{{ db_parameter('SITE_TITLE', 'Corners') }}</a></span>
                </div>
            </div>
        </div>
    </div>
	  
	@yield('body')
  	
	<div class="sidebar">
		<img data-src="holder.js/75x75/vine" class="img-circle">
           
		<p class="extra-margin phone-header">+7 (919) 760-06-74</p>
		<p><a href="mailto:work@bolshaya.net">work@bolshaya.net</a></p>

		<div class="bolshaya-categories">
			<p class="extra-margin"><a href="{{ app('veer')->siteUrl }}">Home</a></p>
			@if(count( data_get($data, 'function.globalCornersSidebar.data.categories') )>0)
				@foreach( data_get($data, 'function.globalCornersSidebar.data.categories') as $category_id => $title)
					<p><a href="{{ route('category.show', array('id'=>$category_id)) }}">{{ $title }}</a></p>
				@endforeach
			@endif
			<p class="extra-margin"><a href="http://www.twitter.com/BolshayaNet" target="_blank">Twitter</a></p>
			<p><a href="http://www.facebook.com/bolshaya.net" target="_blank">Facebook</a></p>		
		</div>
	</div>

    <div class="overlay"></div>
	
	@if(!empty($data['veer_message_center']))
	<div class="events-veer-message-center">{{ head($data['veer_message_center']) }}</div>
	@endif
	
	@section('javascript-plugins')
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/jquery.min.js') }}"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/dist20/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/holder.js') }}"></script>
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/index.js') }}"></script>
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/showmore.js') }}"></script>
	@show
  </body>
</html>