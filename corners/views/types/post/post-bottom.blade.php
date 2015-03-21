@if(count(veer_get('event.images'))>0)
<div class="row corners-post-2-extra-margin">
    <div class="col-sm-12">
        <img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive">
    </div>
    <div class="col-sm-12">
        @if(count(veer_get('event.images'))>0)
        <img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive">
        @endif
    </div>
</div>
@endif
@if(count(veer_get('event.images'))>0)
<div class="row corners-post-2-extra-margin">
    <div class="col-sm-24">
        <div class="row">
            @foreach(veer_get('event.images') as $image)
            <div class="col-sm-4">
                <img src="{{ asset(config('veer.images_path').'/'.$image->img) }}" class="corners-images img-responsive">
            </div>
            @endforeach
        </div>
    </div>
</div>

@endif
<span class="end-of-text-mark"></span>
@if($page->show_comments)
<p class="comment-margin">
<div class="row">
    <div class="col-xs-24 col-sm-16">
        {{ veer_get('comments_disqus') }}
        <div class="bolshaya-content-row"></div>
    </div>
    <div class="col-sm-8 hidden-xs text-right">
        {{ db_parameter('CORNERS_COMMENTS_SIDEBAR'); }}
    </div>
</div>
    @endif
    @include($template . '.layout.child-pages', array('subpages' => $subpages))
