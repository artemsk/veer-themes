<div class="col-sm-24 col-md-12 corners-post-id-{{ $data->id }}">@include($template . '.layout.excerpt-big', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))
    <div class="bolshaya-content-row-grid row corners-post-lists">
        <div class="col-sm-24">
            @if(isset($data->images) && count($data->images)>0)
            <a href="{{ route('page.show', $data->url) }}">
                <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="not-hovering-image img-rounded img-responsive">
            </a>
            @else
            <img data-src="holder.js/100%x400" class="img-rounded img-responsive">
            @endif
            <div class="type-12-text text-center" style="color: {{ data_get($data, 'params.titleColor', 'auto') }};">
                <div class="type-6-category">
                    <a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a> <a href="{{ route('category.show', data_get($data, 'categories.1.id')) }}">{{ data_get($data, 'categories.1.title') }}</a>
                </div>
                <h2 class="type-6-title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></h2>
            </div>
        </div>
    </div>
    @include($template . '.layout.excerpt-big', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))
</div>