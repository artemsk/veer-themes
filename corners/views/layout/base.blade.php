<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  
	{{ empty($veer_message_center) ? null : $veer_message_center }}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/dist20/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/holder.js') }}"></script>
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/skrollr.min.js') }}"></script>
    <script src="{{ asset(config('veer.assets_path').'/'.$template.'/js/index.js') }}"></script>
  </body>
</html>