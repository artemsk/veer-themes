<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }}">@include($template . '.layout.excerpt-small', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))<div class="corners-post-lists bolshaya-content-row"><div class="img-focus">
        @if(isset($data->images) && count($data->images)>0)
        <a href="{{ route('page.show', $data->url) }}">
            <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive type-2-image">
        </a>
        @else
        <img data-src="holder.js/100%x211" class="img-responsive type-2-image">
        @endif
    </div>
    <h4 class="type-2-title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h4>
    <p>{{ $data->small_txt or 'Small Text' }}</p><small class="text-muted type-2-information">
            <a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a>
            <strong>
                @if(isset($data->created_at))
                {{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
                @endif
            </strong>@if(isset($data->user))
            {{ $data->user->username or null }}
            @endif
        </small>
    </div>
    @include($template . '.layout.excerpt-small', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))
</div>
