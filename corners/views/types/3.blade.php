<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }} corners-post-lists bolshaya-content-row"><div class="img-focus-lighter">
        @if(isset($data->images) && count($data->images)>0)
        <a href="{{ route('page.show', $data->url) }}">
            <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
        </a>
        @else
        <img data-src="holder.js/100%x340" class="img-responsive">
        @endif
    </div>
    <div class="type-3-text text-center" style="color: {{ data_get($data->params, 'titleColor', 'auto') }}">
        <h4><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h4>
        <p>{{ $data->small_txt or 'Small Text' }}</p><small class="text-muted type-2-information" style="color: {{ data_get($data->params, 'titleColor', 'auto') }}">
            {{ data_get($data, 'categories.0.title') }}
            <strong>
                @if(isset($data->created_at))
                {{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
                @endif
            </strong>
            @if(isset($data->user))
            {{ $data->user->username or null }}
            @endif
        </small>
    </div>
</div>
