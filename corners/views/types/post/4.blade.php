<div class="container narrow-post">

    <div class="row">
        <div class="col-sm-16">
            @if(isset($page->images) && count($page->images)>0)
            <img data-src="holder.js/100%x600/#efefef:#000/text:&nbsp;" src="{{ asset(config('veer.images_path').'/'.$page->images->pop()->img) }}" class="img-responsive">
            @else
            <img data-src="holder.js/100%x500/#CCCC99:#000/text:&nbsp;" class="img-responsive">
            @endif
            <div class="corners-post-4-title" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'inherit') }}">

                <div class="corners-post-4-category">@if(isset($categories) && count($categories)>0)
                    @foreach($categories as $category)
                    {{ $category->title }}
                    @endforeach
                    @endif</div>

                <h2>{{ $page->title }}</h2>

                <div class="corners-post-4-small-text">{{ $page->small_txt }}</div>

                <span class="corners-post-4-info">
                    <p>{{ \Carbon\Carbon::parse($page->created_at)->format('d F Y') }}
                        @if(isset($page->user) && !empty($page->user->username))
                        <strong>{{ ' @'.$page->user->username.'' }}</strong>
                        @endif
                    </p>
                </span>
            </div>

        </div>
        <div class="col-sm-8">
            <div class="blank-square hidden-xs"></div>
            <div class="social-buttons-type-2">@include($template . '.layout.social')</div>
        </div>
    </div>

    <div class="row corners-post-2-extra-margin">
        <div class="col-sm-16 corners-post-2-text">
            @foreach(paragraphs($page->txt, '(((img)))') as $key => $p)
            {{ $p }}
            @if(isset($page->images) && count($page->images)>0)
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-24">
            <p><img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-16 corners-post-2-text">
            @endif
            @endforeach
        </div>
    </div>

    @if(isset($page->images) && count($page->images)>0)
    <div class="row corners-post-2-extra-margin">
        <div class="col-sm-12">
            @if(isset($page->images) && count($page->images)>0)
            <img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">
            @endif
        </div>
        <div class="col-sm-12">
            @if(isset($page->images) && count($page->images)>0)
            <img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">
            @endif
        </div>
    </div>
    @endif
    @if(isset($page->images) && count($page->images)>0)
    <div class="row corners-post-2-extra-margin">
        <div class="col-sm-24">
            <div class="row">
                @foreach($page->images as $image)
                <div class="col-sm-4">
                    <img src="{{ asset(config('veer.images_path').'/'.$image->img) }}" class="corners-images img-responsive">
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-sm-7 col-sm-offset-1">
        </div>
    </div>
    @endif
    @if($page->show_comments)
    <p class="comment-margin">
    {{ data_get(app('veer')->loadedComponents, 'comments_disqus') }}
    @endif
    @include($template . '.layout.child-pages', array('subpages' => $subpages))
</div>
<div class="container-fluid">
    @include($template . '.layout.footer')
</div>
