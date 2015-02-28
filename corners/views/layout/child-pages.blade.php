@if(isset($subpages) && count($subpages) > 0)
<div class="row bolshaya-content-row">
    <div class="col-xs-24 more-articles-title">
        <h2>Читать на эту тему</h2>
    </div>
</div>
<div class="row">
    @foreach($subpages as $key => $data)
    @if(round($key/3) == ($key/3)) <div class="clearfix"></div> @endif
    <div class="col-md-8 corners-post-id-{{ $data->id }} corners-post-lists bolshaya-content-half-row">
        @if(isset($data->images) && count($data->images)>0)
        <div class="img-focus">
            <a href="{{ route('page.show', $data->url) }}">
                <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive type-2-image">
            </a>
        </div>
        @else
        <div class="more-articles-post-no-img"></div>
        @endif
        <h4><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h4>
        <p>{{ $data->small_txt or 'Small Text' }}<small class="text-muted type-2-information">
                {{ data_get($data, 'categories.0.title') }}
                <strong>
                    @if(isset($data->created_at))
                    {{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
                    @endif
                </strong>@if(isset($data->user))
                {{ $data->user->username or null }}
                @endif
            </small></p>
    </div>

    @endforeach
</div>
@endif
