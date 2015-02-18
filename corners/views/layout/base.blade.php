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
	<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/index.css') }}">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

	@yield('body')
  
	<div class="container-fluid bolshaya-main-content bolshaya-background-white">
	<div class="row bolshaya-content-row footer">
		<div class="col-md-3 col-sm-5 col-sm-offset-1">18+
			<br> © 2015 www.bolshaya.net
			<br> Corners Theme
			<br> Made for Veer
		</div>
		<div class="visible-xs bolshaya-content-half-row"></div>
		<div class="col-md-2 col-sm-5"><img data-src="holder.js/100%x123/sky">
		</div>
		<div class="visible-xs bolshaya-content-half-row"></div>
		<div class="col-md-11 col-sm-12"><strong>ABOUT</strong>
			<br>{{ db_parameter('SITE_FOOTER') }}
		</div>
		<div class="visible-sm clearfix"></div>
		<div class="visible-xs visible-sm bolshaya-content-half-row"></div>
		<div class="col-md-3 col-sm-10 col-sm-offset-1 col-md-offset-0">Newsletter
			<br>Contacts
		</div>
		<div class="visible-xs bolshaya-content-half-row"></div>
		<div class="col-md-3 col-sm-11">Twitter
			<br>Facebook
		<br><br>
		<small>powered by <strong>Veer.</strong>
			<br>
			{ {{ array_get(app('veer')->statistics, 'loading') }}
			{{ array_get(app('veer')->statistics, 'memory') }} }</small>
		</div>
	</div>
	</div>
	
	{{ empty($veer_message_center) ? null : $veer_message_center }}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/dist20/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/holder.js') }}"></script>
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr.min.js') }}"></script>
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/index.js') }}"></script>
	<script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/showmore.js') }}"></script>
  </body>
</html>