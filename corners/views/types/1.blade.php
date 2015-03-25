<div class="col-md-6 col-sm-12 corners-post-id-{{ $data->id }}">@include($template . '.layout.excerpt-small', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))<div class="corners-post-lists bolshaya-content-row-grid img-focus">
        @if(isset($data->images) && count($data->images)>0)
        <a href="{{ route('page.show', $data->url) }}">
            <img src="{{ asset(config('veer.images_path').'/'.$data->images[0]->img) }}" class="img-responsive">
        </a>
        @else
        <img data-src="holder.js/100%x340" class="img-responsive">
        @endif
    </div>@include($template . '.layout.excerpt-small', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))</div>
