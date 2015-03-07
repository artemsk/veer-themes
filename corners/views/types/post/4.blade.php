<div class="container narrow-post">

    <div class="row">
        <div class="col-sm-16">
            @if(count(veer_get('event.images'))>0)
            <img data-src="holder.js/100%x600/#efefef:#000/text:&nbsp;" src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive">
            @else
            <img data-src="holder.js/100%x500/#CCCC99:#000/text:&nbsp;" class="img-responsive">
            @endif
            <div class="corners-post-4-title" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }}">

                <div class="corners-post-4-category">@if(isset($categories) && count($categories)>0)
                    @foreach($categories as $category)
                    <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                    @endforeach
                    @endif</div>

                @if($page->show_title)<h2>{{ $page->title }}</h2>@endif

                @if($page->show_small)<div class="corners-post-4-small-text">{{ $page->small_txt }}</div>@endif

                <span class="corners-post-4-info">
                    <p>@if($page->show_date){{ \Carbon\Carbon::parse($page->created_at)->format('d F Y') }}@endif
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
            @if(count(veer_get('event.images'))>0)
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-24">
            <p><img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}" class="img-responsive">
        </div>
    </div>
    <div class="row corners-post-2-extra-half-margin">
        <div class="col-sm-16 corners-post-2-text">
            @endif
            @endforeach
        </div>
    </div>
@include($template.'.types.post.post-bottom')
</div>
<div class="container-fluid">
    @include($template . '.layout.footer')
</div>
