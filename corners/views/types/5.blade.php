<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }}">
    @include($template . '.layout.excerpt-small', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))<div class="corners-post-lists row bolshaya-content-row">
        <div class="col-sm-24 text-center">
            @if(isset($data->images) && count($data->images)>0)
            <a href="{{ route('page.show', $data->url) }}">
                <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive img-rounded type-5-image">
            </a>
            @else
            <img data-src="holder.js/100%x280" class="img-responsive img-rounded type-5-image">
            @endif
            <span class="type-5-category">
                <a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a> <a href="{{ route('category.show', data_get($data, 'categories.1.id')) }}">{{ data_get($data, 'categories.1.title') }}</a>
            </span>
            <h3 class="type-5-title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h3>
        </div>
    </div>@include($template . '.layout.excerpt-small', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))
</div>
