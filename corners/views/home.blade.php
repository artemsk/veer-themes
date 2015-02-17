@extends($template.'.layout.base')

@section('body')

    <div class="fixed-header">
        <div class="row top-background-line"></div>
        <div class="container-fluid bolshaya-white-panel">
            <div class="row">
                <div class="col-sm-22 col-sm-offset-1 text-center">
                    <span class="logo-header">{{ db_parameter('SITE_TITLE', 'Corners') }}</span>
                </div>
                <!--<div class="col-sm-10 text-right"><span class="phone-header">+7 (919) 760-06-74</span> <span class="email-header"><a href="mailto:work@bolshaya.net">work@bolshaya.net</a></span>
        </div>-->
            </div>
        </div>
    </div>

    <div class="container-fluid intro" data-top="transform:translate(0px,0px);" data-top-bottom="transform:translate(0px,-50px);">
        <div class="row bolshaya-overflow">
            <div class="col-sm-16 col-sm-offset-4 text-center">
                <h1>{{ db_parameter('SITE_HERO', 'Beautiful, bright, clean, rich.<br>Beware of <strong>corners.</strong>') }}</h1>
               <div class="contact-form-group">
				   <form method="POST">
						<div class="form-inline contact-form">
							<input name="email" type="text" class="form-control" placeholder="Email" size="30">
							<button type="button" class="btn btn-primary">I Want!</button>
						</div>
						<div class="form-inline contact-form-2 hidden">
							<input name="contactName" type="text" class="form-control" placeholder="Name" size=30>
							<input name="phone" type="text" class="form-control" placeholder="Phone (optional)" size=30>
							<button type="submit" class="btn btn-danger">Yes!</button>
						</div>
				   </form>
                </div>
            </div>
        </div>
        <div class="row hero-content">
            <div class="col-sm-22 col-sm-offset-1">
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
            </div>
        </div>
        <span id="intro-bottom-mark"></span>
    </div>
    <div class="container-fluid bolshaya-main-content bolshaya-background-white">
        <div class="row">
            <div class="col-sm-22 col-sm-offset-1">
@include($template . '.layout.list-of-pages', array('data' => $data, 'template' => $template))	

				<div class="row bolshaya-content-row">
					<div class="col-sm-6 col-sm-offset-9 col-xs-22 col-xs-offset-1 text-center show-more">
						More
					</div>
				</div>
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
        <div class="row">
            <div class="col-sm-22 col-sm-offset-1">  
                <div class="row bolshaya-content-row">
                    <div class="col-sm-22"><strong>DIGEST / CATEGORY</strong>
                    </div>
                </div>
                <div class="row bolshaya-content-half-row">
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</small>
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                    <div class="visible-sm clearfix"></div>
                    <div class="visible-xs visible-sm bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                    <div class="visible-xs bolshaya-content-row"></div>
                    <div class="col-sm-6 col-md-3"><img data-src="holder.js/100%x153">
                        <br/><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
            </div>
        </div>
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
                <br>{{ db_parameter('SITE_FOOTER_AD') }}
            </div>
            <div class="visible-sm clearfix"></div>
            <div class="visible-xs visible-sm bolshaya-content-half-row"></div>
            <div class="col-md-3 col-sm-10 col-sm-offset-1 col-md-offset-0">Newsletter
                <br>Contacts
                </div>
            <div class="visible-xs bolshaya-content-half-row"></div>
            <div class="col-md-3 col-sm-11">Twitter
                <br>Facebook</div>
        </div>
    </div>             

    <div class="sidebar">*</div>

    <div class="overlay"></div>

@stop
