<div class="container narrow-post">

    <div class="row">
        <div class="col-sm-16">
            @if(isset($page->images) && count($page->images)>0)
            <img data-src="holder.js/100%x562" src="{{ asset(config('veer.images_path').'/'.$page->images->pop()->img) }}" class="img-responsive img-rounded">
            @else
            <img data-src="holder.js/100%x340/#9999CC:#000/text:&nbsp;" class="img-responsive img-rounded">
            @endif
            <div class="corners-post-2-title" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'inherit') }}">

                <div class="text-center corners-post-2-category">@if(isset($categories) && count($categories)>0)
                    @foreach($categories as $category)
                    {{ $category->title }}
                    @endforeach
                    @endif</div>

                <h2 class="text-center">{{ $page->title }}</h2>

            </div>

        </div>
        <div class="col-sm-8">
            <div class="corners-post-2-small-text">{{ $page->small_txt }}</div>
            <small>
                <p><span class="text-muted">{{ \Carbon\Carbon::parse($page->created_at)->format('d F Y') }}</span>
                    @if(isset($page->user) && !empty($page->user->username))
                    {{ ' @'.$page->user->username.'' }}
                    @endif
                </p>
            </small>
        </div>
    </div>
    <div class="row corners-post-2-extra-margin">
        <div class="col-sm-16">
            <div class="social-buttons">@include($template . '.layout.social')</div>
            <div class="clearfix"></div>
            <div class="corners-post-2-text">
                @foreach(paragraphs($page->txt, '(((img)))') as $key => $p)
                {{ $p }}
                @if(isset($page->images) && count($page->images)>0)
            </div>
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-24">
            <p><img src="{{ asset(config('veer.images_path').'/'.$page->images->shift()->img) }}" class="img-responsive">
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-16">
            <div class="corners-post-2-text">
                @endif
                @endforeach
            </div>
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
    </div>
    @endif
    <div class="row">
        <div class="col-sm-24">
    @if($page->show_comments)
    <p class="comment-margin">
    {{ data_get(app('veer')->loadedComponents, 'comments_disqus') }}
    @endif
    @include($template . '.layout.child-pages', array('subpages' => $subpages))
        </div>
    </div>
</div>
<div class="container-fluid">
    @include($template . '.layout.footer')
</div>
