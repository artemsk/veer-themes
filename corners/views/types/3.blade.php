<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }}">@include($template . '.layout.excerpt-small', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))<div class="corners-post-lists bolshaya-content-row-grid"><div class="img-focus">
        @if(isset($data->images) && count($data->images)>0)
        <a href="{{ route('page.show', $data->url) }}">
            <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
        </a>
        @else
        <img data-src="holder.js/100%x340" class="img-responsive">
        @endif
    </div>
    <div class="type-3-text text-center" style="color: {{ data_get($data->params, 'titleColor', 'auto') }}">
        <h4 class="type-3-title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h4>
        <p>{{ $data->small_txt or 'Small Text' }}</p><small class="text-muted type-2-information" style="color: {{ data_get($data->params, 'titleColor', 'auto') }}">
            <a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a>
            <strong class="type-2-information-date">
            <i class="fa fa-dot-circle-o"></i> {{ $data->views }}
        </strong>
        </small>
    </div>
    </div>@include($template . '.layout.excerpt-small', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))
</div>
