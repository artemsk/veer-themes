<div class="container narrow-post">

    <div class="row">
        <div class="col-sm-16">
            @if(count(veer_get('event.images'))>0)
            <img data-src="holder.js/100%x562" src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive img-rounded">
            @else
            <img data-src="holder.js/100%x340/#9999CC:#000/text:&nbsp;" class="img-responsive img-rounded">
            @endif
            <div class="corners-post-2-title" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }}">

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
            <div class="corners-post-2-text corners-post-2-extra-half-margin">
                @foreach(paragraphs($page->txt, '(((img)))') as $key => $p)
                {{ $p }}
                @if(count(veer_get('event.images'))>0)
            </div>
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-24">
            <p><img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive">
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
@include($template.'.types.post.post-bottom')
</div>
<div class="container-fluid">
    @include($template . '.layout.footer')
</div>
