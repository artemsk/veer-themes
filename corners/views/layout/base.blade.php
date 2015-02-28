<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="{{ db_parameter('SITE_KEYWORDS') }}" />
        <meta name="description" content="{{ db_parameter('SITE_DESCRIPTION') }}" />
        <meta property="og:site_name"       content="{{ db_parameter('SITE_TITLE') }}" />
        <meta property="fb:app_id"          content="{{ db_parameter('FB_APPID') }}" />
        <meta property="og:url"             content="{{ \URL::current() }}" />
        <meta property="og:locale"          content="ru_RU" />
        @section('meta-properties')
        <meta property="og:type"            content="website" />
        <title>{{ db_parameter('SITE_TITLE') }}</title>
        <meta name="title" content="{{ db_parameter('SITE_TITLE') }}" />
        <meta property="og:title"           content="{{ db_parameter('SITE_TITLE') }}" />
        <meta property="og:description"     content="{{ db_parameter('SITE_DESCRIPTION') }}"/>
        <!--<meta property="og:image"           content="{{ asset(config('veer.assets_path').'/'.$template.'/images/bam.jpg') }}" />-->
        @show
        
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

        @if(!empty(db_parameter('SCROLLBACK_ROOM')))<script>window.scrollback = {"room":"{{ db_parameter('SCROLLBACK_ROOM') }}","titlebarColor":"#81dab4","form":"toast","minimize":true};(function(d,s,h,e){e=d.createElement(s);e.async=1;e.src=(location.protocol === "https:" ? "https:" : "http:") + "//scrollback.io/client.min.js";d.getElementsByTagName(s)[0].parentNode.appendChild(e);}(document,"script"));</script>@endif
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
            <img data-src="holder.js/75x75/vine" src="{{ asset(config('veer.assets_path').'/'.$template.'/images/bam.jpg') }}" class="img-circle">

            <p class="extra-margin phone-header">{{ db_parameter('CONTACT_PHONE') }}</p>
            <p><a href="mailto:{{ db_parameter('CONTACT_EMAIL') }}">{{ db_parameter('CONTACT_EMAIL') }}</a></p>

            <div class="bolshaya-categories">
                <p class="extra-margin"><a href="{{ app('veer')->siteUrl }}">Главная</a></p>
                @if(count( data_get($data, 'function.globalCornersSidebar.data.categories') )>0)
                @foreach( data_get($data, 'function.globalCornersSidebar.data.categories') as $category_id => $title)
                <p><a href="{{ route('category.show', array('id'=>$category_id)) }}">{{ $title }}</a></p>
                @endforeach
                @endif
                <p class="extra-margin"><a href="http://www.twitter.com/{{ db_parameter('TWITTER_LINK') }}" target="_blank">Twitter</a></p>
                <p><a href="http://www.facebook.com/{{ db_parameter('FB_LINK') }}" target="_blank">Facebook</a></p>
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
