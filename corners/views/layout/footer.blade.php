<div class="row bolshaya-content-row footer">
	<div class="col-md-3 col-sm-5 col-sm-offset-1">
		<div class="footer-age">18+</div>
		© 2015
		<br> {{ db_parameter('SITE_TITLE') }}
	</div>
	<div class="visible-xs bolshaya-content-half-row"></div>
	<div class="col-md-2 col-sm-5"><img data-src="holder.js/100%x123/sky">
	</div>
	<div class="visible-xs bolshaya-content-half-row"></div>
	<div class="col-md-14 col-sm-12"><strong>О НАС</strong>
		<br>{{ db_parameter('SITE_FOOTER') }}
	</div>
	<div class="visible-sm clearfix"></div>
	<div class="visible-xs bolshaya-content-half-row"></div>
	<div class="col-md-3 col-sm-11 col-sm-offset-1 col-md-offset-0">
		<a href="http://www.facebook.com/bolshaya.net" class="facebook-icon" target="_blank"><i class="fa fa-facebook"></i></a>
		<a href="http://www.twitter.com/BolshayaNet" class="twitter-icon" target="_blank"><i class="fa fa-twitter"></i></a>
	<br><br>
	<small>powered by <strong>Veer.</strong>
		<br>
		{ {{ array_get(app('veer')->statistics, 'loading') }}
		{{ array_get(app('veer')->statistics, 'memory') }} }</small>
	</div>
</div>