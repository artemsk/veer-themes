<div class="container-fluid">
    <div class="row corners-post-10-img text-center corners-post-type-3">
            @if(count(veer_get('event.images'))>0)
            <img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}">
            @endif
    </div>
                <div class="corners-post-11-info">
                    <div class="container narrow-post-10">
                    <div class="col-sm-24">
                        <div class="corners-post-category" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }} !important;">
                            @if(isset($categories) && count($categories)>0)
                            @foreach($categories as $category)
                            <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                            @endforeach
                            @endif
                        </div>
                        @if($page->show_title)<div class="corners-post-title" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }} !important;">{{ $page->title or 'Title' }}</div>@endif

                        @if($page->show_date)<div class="corners-post-date" style="color: {{ data_get($page->attributes->lists('val', 'name'), 'titlePostColor', 'auto') }} !important;">{{ \Carbon\Carbon::parse($page->created_at)->format('d F Y') }}
                        </div>@endif
                    </div>
                    </div>
                </div>
</div>

<div class="container narrow-post-10">

    <div class="row corners-post-8-title">
        <div class="col-sm-24">
            <div class="social-buttons">@include($template . '.layout.social')</div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-16 corners-post-2-text">
            <div class="corners-post-8-small-text">
                @if($page->show_small){{ $page->small_txt }}@endif
                <span class="corners-post-4-info">
                    <p>@if(isset($page->user) && !empty($page->user->username))
                        <strong>{{ ' @'.$page->user->username.'' }}</strong>
                        @endif
                    </p>
                </span>
            </div>
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
<div class="corners-full-width-footer">
    <div class="container-fluid">
        @include($template . '.layout.footer')
    </div>
</div>


@section('additional-css')
<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/page.css') }}">
@stop