<div class="col-sm-12 col-md-6 corners-post-id-{{ $data->id }}">@include($template . '.layout.excerpt-small', array('position' => 't', 'connectedId' => data_get($data->params, 'connectedPageTop')))<div class="corners-post-lists bolshaya-content-row-grid">
    <div class="type-9-text">
        <div class="source"><a href="{{ route('category.show', data_get($data, 'categories.0.id')) }}">{{ data_get($data, 'categories.0.title') }}</a><span class="time">— @if(isset($data->created_at))
                {{ \Carbon\Carbon::parse($data->created_at)->format("j F") }}
                @endif</span>
        </div>
        <div class="title"><a href="{{ route('page.show', $data->url) }}">{{ $data->title or 'Title' }}</a></div>
    </div>
    </div>@include($template . '.layout.excerpt-small', array('position' => 'b', 'connectedId' => data_get($data->params, 'connectedPageBottom')))
</div>
