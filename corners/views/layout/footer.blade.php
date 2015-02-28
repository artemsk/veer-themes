<div class="row bolshaya-content-row footer">
    <div class="col-xs-24">
        <div class="row">
            <div class="col-md-1 col-sm-2 col-sm-offset-1">
                <div class="footer-age">18+</div>
            </div>

            <div class="col-md-12 col-sm-10">© 2015 &nbsp; <strong>{{ db_parameter('SITE_TITLE') }}</strong></div>

            <div class="visible-xs bolshaya-content-half-row"></div>
            <div class="col-md-9 footer-right-to-left col-sm-10">
                <a href="http://www.facebook.com/{{ db_parameter('FB_LINK') }}" class="facebook-icon" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com/{{ db_parameter('TWITTER_LINK') }}" class="twitter-icon" target="_blank"><i class="fa fa-twitter"></i></a>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-22 col-sm-offset-1"><hr class="footer-line"></div>
        </div>
        <div class="row">
            <div class="col-md-14 col-sm-offset-1 col-sm-19"><strong>О НАС</strong>
                <br>{{ db_parameter('SITE_FOOTER') }}
            </div>
            <div class="visible-xs bolshaya-content-half-row"></div>
            <div class="col-md-8 col-sm-3 footer-right-to-left ">
                <small>powered by<br><strong class="veer">Veer</strong>
                    <div class="veer-stats">
                        {{ array_get(app('veer')->statistics, 'loading') }}
                        {{ array_get(app('veer')->statistics, 'memory') }}
                    </div>
                </small>
            </div>
        </div>
    </div>
</div>
