<div class="container-fluid corners-post-type-3">
    <div class="row corners-post-10-img text-center">
            @if(count(veer_get('event.images'))>0)
            <img src="{{ asset(config('veer.images_path').'/'.veer_get('event.images')->shift()->img) }}">
            @endif
    </div>
</div>

<div class="container narrow-post-10">

    <div class="row corners-post-8-title">
        <div class="col-sm-24">
            <div class="social-buttons">@include($template . '.layout.social')</div>
            <div class="clearfix"></div>
            <div class="bolshaya-content-half-row"></div>
            @if($page->show_title)<h2>{{ $page->title }}</h2>@endif
            <div class="corners-post-4-category">@if(isset($categories) && count($categories)>0)
                @foreach($categories as $category)
                <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
                @endforeach
                @endif</div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-16 corners-post-2-text">
            <div class="corners-post-8-small-text">
                @if($page->show_small){{ $page->small_txt }}@endif
                <span class="corners-post-4-info">
                    <p>@if($page->show_date){{ \Carbon\Carbon::parse($page->created_at)->format('d F Y') }}@endif
                        @if(isset($page->user) && !empty($page->user->username))
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
<div class="container-fluid">
    @include($template . '.layout.footer')
</div>


@section('additional-css')
<link rel="stylesheet" href="{{ asset(config('veer.assets_path').'/'.$template.'/css/page.css') }}">
@stop