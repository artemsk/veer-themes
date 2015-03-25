<div class="col-sm-24 col-md-12 corners-post-id-{{ $data->id }}">
    @include($template . '.layout.excerpt-big', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))
    <div class="bolshaya-content-row-grid corners-post-lists">
    <div class="img-focus">
        @if(isset($data->images) && count($data->images)>0)
        <a href="{{ route('page.show', $data->url) }}">
            <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive type-10-image">
        </a>
        @else
        <img data-src="holder.js/100%x211" class="img-responsive type-10-image">
        @endif
    </div>
    <h3><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h3>
    <p>{{ $data->small_txt or 'Small Text' }}</p>
    <small class="text-muted type-2-information">
        <a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a>
        <strong>
            @if(isset($data->created_at))
            {{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
            @endif
        </strong>@if(isset($data->user))
        {{ $data->user->username or null }}
        @endif
    </small>
    </div>@include($template . '.layout.excerpt-big', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))
</div>
