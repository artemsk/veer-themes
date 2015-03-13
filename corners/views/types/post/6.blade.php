<div class="container-fluid corners-post-type-6">
    <div class="row">
        <div class="col-sm-24 corners-post-6-img" style="background-image: url(@if(count(veer_get('event.images'))>0){{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}
             @endif)">
            <div class="row" >
                    <div class="col-sm-22 col-sm-offset-1">
                        <div class="corners-post-category" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }}">
                            @if(isset($categories) && count($categories)>0)
                            @foreach($categories as $category)
                            <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                            @endforeach
                            @endif
                        </div>
                        @if($page->show_title)<div class="corners-post-title" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }}">{{ $page->title or 'Title' }}</div>@endif

                        @if($page->show_date)<div class="corners-post-date" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }}">{{ \Carbon\Carbon::parse($page->created_at)->format('d F Y') }}
                        </div>@endif

                        @if($page->show_small)<div class="corners-post-sub-title col-sm-16" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }}">{{ $page->small_txt or 'Small text' }}</div>@endif
                    </div>
                </div>
        </div>
    </div>
    <div class="row corners-post-main-content-wrapper corners-post-6-wrapper">
        <div class="col-sm-24">
            <div class="container">
                <div class="row corners-post-main-content">
                    <div class="col-md-3 col-md-offset-1 text-center corners-author">
                        @if(isset($page->user) && !empty($page->user->username))
                        <img data-src="holder.js/75x75"
                             src="{{ asset(config('veer.images_path').'/'.data_get($page->user->images, '0.img')) }}" class="img-circle corners-small-img">
                        <div class="corners-author-name-2">{{ '@'.$page->user->username }}</div>
                        @endif
                        <div class="social-buttons-type-3">@include($template . '.layout.social')</div>
                    </div>
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                    <div class="col-md-17 corners-text">
                        @foreach(paragraphs($page->txt, '(((img)))') as $key => $p)
                        {{ $p }}
                        @if(count(veer_get('event.images'))>0)
                        <p><img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive">
                            @endif
                            @endforeach

                            @if(count(veer_get('event.images'))>0)
                        <div class="row">
                            <div class="col-sm-24">
                                @foreach(veer_get('event.images') as $image)
                                <img src="{{ asset(config('veer.images_path').'/'.$image->img) }}" class="corners-images">
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <span class="end-of-text-mark"></span>
                        @if($page->show_comments)
                        <p class="comment-margin">
                            {{ veer_get('comments_disqus') }}
                        @endif
                        <p>{{ db_parameter('CORNERS_COMMENTS_SIDEBAR'); }}
                    </div>
                </div>
                @include($template . '.layout.child-pages', array('subpages' => $subpages))
            </div>
        </div>
    </div>
</div>
<div class="corners-full-width-footer">
    <div class="container-fluid">
        @include($template . '.layout.footer')
    </div>
</div>

@section('additional-css')
<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/page.css') }}">
@stop